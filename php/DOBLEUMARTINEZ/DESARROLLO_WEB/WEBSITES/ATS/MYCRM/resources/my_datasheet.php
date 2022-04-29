<?php

if ($_POST['btn_action']=='new_datasheet'){
	
    # code...
    $area           = $_POST['area'];
    $type_area      = $_POST['type_area'];
    $product        = $_POST['product'];
    $description    = $_POST['description'];
    $aplications    = $_POST['aplications'];
    $recomentation  = $_POST['recomentation'];
    $specification  = $_POST['specification'];
    $imgproduct     = 'none';

    if (!empty($_FILES['imgproduct']['name'])) {
        
        $name_file  = $_FILES['imgproduct']['name'];
        $file       = $_FILES['imgproduct']['tmp_name'];
        $type       = $_FILES['imgproduct']['type'];
        $size       = $_FILES['imgproduct']['size'];

        $uploads_dir = '../images/generate_datasheet/products';
        $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
        $uploads_dir = './images/generate_datasheet/products/'.$name_file;

        $imgproduct = $uploads_dir;
    }


include "conexion.php";

include "fpdf/fpdf.php";

class myPDF extends FPDF {
    function myCell( $w,$h,$x,$t){
        $height = $h/3;
        $first  = $height+2;
        $second = $height+$height+$height+3;
        $tres   = $height+$height+$height+$height+$height+4;//Incrementar deacuerdo al text de fila
        $len    = strlen($t);

        if ($len>47) {
            
            $txt = str_split($t,47);
            $this->SetX($x);
            $this->Cell($w,$first,$txt[0],'','','');

            $this->SetX($x);
            $this->Cell($w,$second,$txt[1],'','','');

            $this->SetX($x);
            $this->Cell($w,$tres,$txt[2],'','','');//Incrementar deacuerdo al text de fila

            $this->SetX($x);
            $this->Cell($w,$h,'','LTRB',0,'C',0);
        }

        else{
            $this->SetX($x);
            $this->Cell($w,$h,$t,'LTRB',0,'C',0);
        }
    }
}


$pdf = new myPDF(); //CREAR OBJETO PDF

$pdf->AddPage();
$pdf->SetFont("Arial","",10);

$w = 45;
$h = 16;

// HEADER 
    $pdf->SetFont('Arial','B',20);
    $pdf->SetX(10);
    $pdf->Cell(50,15,utf8_decode($product));
    $pdf->Image('../images/brands/logo.png',160 ,8, 35, 16,'PNG'); //POSITION logo
    $pdf->Ln(20);                       //Salto de linea 30 posiciones 


//TABLE CONTENT
    $pdf->SetFont('Arial','B',12);      //FONT "B -> negritas " tamaño 
    $pdf->SetX(10);
    $pdf->setFillColor( 227,191,30,1);  //CHANGE BACKGROUND COLOR HEXADECIMAL
    $pdf->SetTextColor(17,17,17);    //CHANGE TEXT COLOR HEXADECIMAL
    $pdf->SetDrawColor(227,191,30,1);   //CHANGE BORDER COLOR
    $pdf->Cell(190,10, utf8_decode("DESCRIPCIÓN:"), 1 ,1, 'C', TRUE);
    $pdf->Ln(5);
    $pdf->SetTextColor(0,0,0);

//BODY TEXT 
    $pdf->SetFont("Arial","",11);
    $pdf->Ln(2);
    $pdf->Write(6, utf8_decode($description));
    $pdf->Cell(50,0,"");
    $pdf->Ln(15);


//TABLE CONTENT
    $pdf->SetFont('Arial','B',12);      //FONT "B -> negritas " tamaño 
    $pdf->SetX(10);
    $pdf->setFillColor( 227,191,30,1);  //CHANGE BACKGROUND COLOR HEXADECIMAL
    $pdf->SetTextColor(17,17,17);    //CHANGE TEXT COLOR HEXADECIMAL
    $pdf->SetDrawColor(227,191,30,1);   //CHANGE BORDER COLOR
    $pdf->Cell(190,10, utf8_decode("USOS Y APLICACIONES:"), 1 ,1, 'C', TRUE);
    $pdf->Ln(5);
    $pdf->SetTextColor(0,0,0);

//BODY TEXT 
    $pdf->SetFont("Arial","",11);
    $pdf->Ln(2);
    $pdf->Write(6, utf8_decode($aplications));
    $pdf->Cell(50,0,"");
    $pdf->Ln(15);


//TABLE CONTENT
    $pdf->SetFont('Arial','B',12);      //FONT "B -> negritas " tamaño 
    $pdf->SetX(10);
    $pdf->setFillColor( 227,191,30,1);  //CHANGE BACKGROUND COLOR HEXADECIMAL
    $pdf->SetTextColor(17,17,17);    //CHANGE TEXT COLOR HEXADECIMAL
    $pdf->SetDrawColor(227,191,30,1);   //CHANGE BORDER COLOR
    $pdf->Cell(190,10, utf8_decode("RECOMENDACIONES::"), 1 ,1, 'C', TRUE);
    $pdf->Ln(5);
    $pdf->SetTextColor(0,0,0);

//BODY TEXT 
    $pdf->SetFont("Arial","",11);
    $pdf->Ln(2);
    $pdf->Write(6, utf8_decode($recomentation));
    $pdf->Cell(50,0,"");
    $pdf->Ln(15);

//TABLE CONTENT
    $w = 65;
    $h = 22;
    $h2 = 25;

//ADD IMAGE FROM PRODUCT
    $pdf->SetFont('Arial','B',12);  
    $x = $pdf->GetX();
    $pdf->SetDrawColor(255,255,255);   //CHANGE BORDER COLOR
    $pdf->myCell(95,95,$x, $pdf->Image('.'.$imgproduct,
        $pdf->GetX(), $pdf->GetY(),90),1);


    $x = $pdf->GetX();
    $pdf->setFillColor( 227,191,30,1);  //CHANGE BACKGROUND COLOR HEXADECIMAL
    $pdf->SetTextColor(17,17,17);    //CHANGE TEXT COLOR HEXADECIMAL
    $pdf->SetDrawColor(227,191,30,1);   //CHANGE BORDER COLOR
    $pdf->Cell(95,10,utf8_decode('ESPECIFICACIONES TÉCNICAS'), 1 ,1, 'C', TRUE);

    $pdf->SetFont('Arial','',11);  
    $pdf->SetDrawColor(255,255,255);   //CHANGE BORDER COLOR
    $pdf->myCell($w,$h,$x, utf8_decode($specification));


//QR
    include('./conexion.php');

    $sql = "SELECT qr_principal FROM area WHERE name = '$area';";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_array()) {
                $qr_principal   = $row['qr_principal'];
                $pdf->Image($qr_principal,130 ,200, 45, 45,'JPG'); //POSITION QR
        }
    }    

    $pdf->SetFont("Arial","",8);
    $pdf->SetY(245);
    $pdf->SetX(133);
    $pdf->Cell(50,4,utf8_decode('Escanea este Código QR'));
    $pdf->Ln();
    $pdf->SetX(133);
    $pdf->Cell(50,4,utf8_decode('y visita nuestra página web'));


//END FOOTER
    $pdf->Image('../images/generate_datasheet/contact.png',10 ,280, 130, 10,'PNG'); //POSITION logo

//FINALIZAR  Y ENVIAR AL NAVEGADOR//

    //$pdf->output(); 									

//FINALIZAR Y DESCARGAR

    //$pdf->Output($product.'.pdf','D');

//FINALIZAR Y GUARDAR EN EL SERVIDOR

    $rute = '../images/data_sheet/pdf/'.$product.'.pdf';

    $pdf->Output($rute,'F');

    $enlace = str_replace('../', ' ', $rute);

    if (empty($type_area)) {
        $sql = "INSERT INTO data_sheet (name, detail, area, portada, pdf) 
        VALUES ('$product','$product','$area','images/brochure/portada/PORTADA NONE.jpg','$enlace');";
    }else{
        $sql = "INSERT INTO data_sheet (name, detail, area, portada, pdf) 
        VALUES ('$product','$product','$type_area','images/brochure/portada/PORTADA NONE.jpg','$enlace');";
    }


    $result = $con->query($sql);

    if(empty($type_area)){
        header('location: ../index.php?area='.$area.'&type=data_sheet');
    }else{
        header('location: ../index.php?area='.$area.'&type=data_sheet&type_area='.$type_area);
    }


    exit();

}else{
	echo "none";
	exit();
}

?>