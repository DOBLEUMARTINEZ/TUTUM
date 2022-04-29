<?php
session_start();

if ($_POST['btn_action']=='new_lead'){

    $id                     = $_POST['id'];
    $area                   = $_POST['area'];
    $cliente                = $_POST['cliente'];
    $direccion              = $_POST['direccion'];
    $servicio               = $_POST['servicio'];
    $cantidad               = $_POST['cantidad'];
    $unidad                 = $_POST['unidad'];
    $description            = $_POST['description'];
    $p_unit                 = $_POST['p_unit'];
    $month                  = $_POST['month'];
    $nota                   = $_POST['nota'];
    $especificaciones       = $_POST['especificaciones'];


    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME,'es_MX.UTF-8');
    setlocale(LC_TIME, 'spanish');

    $date_anio=strftime("%Y");
    $date_mes=strftime("%B");
    $date_dia=strftime("%d");
    $date_l=strftime("%Y-%m-%d");
    $time_l=strftime("%H:%M:%S");

    $date_l=strftime("%Y-%m-%d");

    $fin = date("t", strtotime($date_l));


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
    function myCelll( $w,$h,$x,$t){
        $height = $h/3;
        $first  = $height+2;
        $second = $height+$height+$height+3;
        $len    = strlen($t);

        if ($len>50) {
            
            $txt = str_split($t,50);
            $this->SetX($x);
            $this->Cell($w,$first,$txt[0],'','','');

            $this->SetX($x);
            $this->Cell($w,$second,$txt[1],'','','');

            $this->SetX($x);
            $this->Cell($w,$h,'','LTRB',0,'C',0);


        }

        else{
            $this->SetX($x);
            $this->Cell($w,$h,$t,'LTRB',0,'C',0);
        }
    }
    function mydevs( $w,$h,$x,$t){
        $height = $h/3;
        $first  = $height+2;
        $second = $height+$height+$height+3;
        $len    = strlen($t);

        if ($len>11) {
            
            $txt = str_split($t,11);
            $this->SetX($x);
            $this->Cell($w,$first,$txt[0],'','','');

            $this->SetX($x);
            $this->Cell($w,$second,$txt[1],'','','');

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
    $pdf->Cell(50,15,utf8_decode('Limpieza en '.$servicio));
    $pdf->Image('../images/brands/logo.png',155 ,8, 40, 16,'PNG'); //POSITION logo
    $pdf->Ln(0); //Salto de linea 0 posiciones 

//FECHA
    $pdf->SetFont('Arial','B', 9);
    $pdf->SetX(125);
    $pdf->Cell(50,38,"Atizapan de Zaragoza a ".$date_dia." de ".ucwords($date_mes)." del ".$date_anio);
    $pdf->Ln(25);

//DATOS DEL CLIENTE 
    $pdf->SetFont("Arial","B",12);
    $pdf->SetX(10);
    $pdf->Cell(50,10,utf8_decode($cliente));
    $pdf->Ln(5);
    $pdf->SetFont("Arial","",11);
    $pdf->Cell(50,10,utf8_decode($direccion));
    $pdf->Ln(10);


//SALUDOS 
    $pdf->SetFont("Arial","",11);
    if (empty($_POST['esquema'])) {
    $pdf->Ln(7);
    }else{
    $pdf->Ln(2);        
    }
    $pdf->Write(5, utf8_decode($description));
    $pdf->Cell(50,0,"");
    $pdf->Ln(5);
    $pdf->Ln(5);


//TABLE CONTENT
    $pdf->SetFont('Arial','B',12);      //FONT "B -> negritas " tamaño 
    $pdf->SetX(10);
    $pdf->setFillColor( 227,191,30,1);  //CHANGE BACKGROUND COLOR HEXADECIMAL
    $pdf->SetTextColor(17,17,17);    //CHANGE TEXT COLOR HEXADECIMAL
    $pdf->SetDrawColor(227,191,30,1);   //CHANGE BORDER COLOR

    if (empty($_POST['esquema'])) {
        # code...
    }else{
    $pdf->Cell(190,10, utf8_decode("El esquema de trabajo será el siguiente:"), 1 ,1, 'C', TRUE); 
    }

    $pdf->Ln(0);
    $pdf->SetTextColor(0,0,0);


//BODY TEXT 
    if (empty($_POST['esquema'])) {

    }
    else{
    foreach($_POST['esquema'] as $esquema_select) {
        $pdf->SetFont("Arial","",11);
        $pdf->Ln(2);
        $pdf->Write(6, utf8_decode($esquema_select));
        $pdf->Cell(50,0,"");
        $pdf->Ln(4);

    }
    $pdf->Ln(5);
    }
//TABLE CONTENT
    $pdf->SetFont('Arial','B',12);      //FONT "B -> negritas " tamaño 
    $pdf->SetX(10);
    $pdf->setFillColor( 227,191,30,1);  //CHANGE BACKGROUND COLOR HEXADECIMAL
    $pdf->SetTextColor(17,17,17);    //CHANGE TEXT COLOR HEXADECIMAL
    $pdf->SetDrawColor(227,191,30,1);   //CHANGE BORDER COLOR
    if (empty($_POST['lugares'])) {
    $pdf->Cell(190,10, utf8_decode("ESPECIFICACIONES DEL SERVICIO"), 1 ,1, 'C', TRUE);
    }else{
    $pdf->Cell(190,10, utf8_decode("Lugares en los cuales se prestará el servicio de limpieza integral:"), 1 ,1, 'C', TRUE);
    }

    $pdf->Ln(0);
    $pdf->SetTextColor(0,0,0);

//BODY TEXT 
    if (empty($_POST['lugares'])) {
    $pdf->SetFont("Arial","",11);
    $pdf->Ln(7);
    $pdf->Write(6, utf8_decode($especificaciones));
    $pdf->Cell(50,0,"");
    $pdf->Ln(20);

    }else{
    foreach($_POST['lugares'] as $lugares_select) {
    $pdf->SetFont("Arial","",11);
    $pdf->Ln(2);
    $pdf->Write(6, utf8_decode($lugares_select));
    $pdf->Cell(50,0,"");
    $pdf->Ln(4);
}

$pdf->Ln(7);
}
//TABLE CONTENT 
$w = 65;
$h = 10;

$h2 = 21;

$pdf->SetDrawColor(0,0,0,0);   //CHANGE BORDER COLOR
$pdf->SetFont('Arial','',10);  
$x = $pdf->GetX();
$pdf->myCell(30,$h,$x,'CANTIDAD');
$x = $pdf->GetX();
$pdf->myCell(30,$h,$x,'UNIDAD');
$x = $pdf->GetX();
$pdf->myCell($w,$h,$x,utf8_decode('DESCRIPCIÓN'));
$x = $pdf->GetX();
$pdf->myCell(30,$h,$x,'P.UNIT');
$x = $pdf->GetX();
$pdf->myCell(30,$h,$x,'TOTAL');

$pdf->Ln();

$x = $pdf->GetX();
$pdf->myCell(30,$h2,$x,$cantidad);
$x = $pdf->GetX();
$pdf->mydevs(30,$h2,$x,$unidad);
$x = $pdf->GetX();
$pdf->myCell($w,$h2,$x,utf8_decode($servicio));
$x = $pdf->GetX();
$pdf->myCell(30,$h2,$x,'$ '. number_format($p_unit,2));
$x = $pdf->GetX();
$pdf->myCell(30,$h2,$x,'$ '. number_format($p_unit,2));
$pdf->Ln();


$x = $pdf->GetX();
$pdf->myCelll(125,$h2,$x,utf8_decode($nota));


$x = $pdf->GetX();
$pdf->myCell(30,7,$x,'SUBTOTAL');
$x = $pdf->GetX();
$pdf->myCell(30,7,$x,'$ '. number_format($p_unit,2));
$pdf->Ln();
$x = $pdf->GetX();

$iva   = $p_unit * 0.16; 

$total = $iva + $p_unit; 

$pdf->myCell(30,7,135,'IVA');
$x = $pdf->GetX();
$pdf->myCell(30,7,$x,'$ '. number_format($iva,2));
$pdf->Ln();
$x = $pdf->GetX();
$pdf->myCell(30,7,135,'TOTAL');
$x = $pdf->GetX();
$pdf->myCell(30,7,$x,'$ '. number_format($total,2));



//
$pdf->Ln(9);
$pdf->SetFont('Arial','',9);                      //FONT "B -> negritas " tamaño 
$pdf->SetX(10);

$pdf->Cell(0,10, utf8_decode("*Cotización valida hasta el día ".$fin." de ".ucwords($date_mes)." del ".$date_anio));
$pdf->Ln(5);
$pdf->Cell(0,10, utf8_decode("Para agendar el servicio se requiere el 60% de anticipo"));
$pdf->Ln(0);

$pdf->Ln(35);
//END FOOTER
$pdf->SetFont('Arial','B',12);                      //FONT "B -> negritas " tamaño 
$pdf->SetX(30);
$pdf->Cell(0,10,"ATENTAMENTE");
$pdf->Ln(0);
$pdf->SetX(15);
$pdf->Cell(0,0,"ADMINISTRACION DE VENTAS");
$pdf->Ln(0);

include('./conexion.php');

$user = $_SESSION['user'];

$sql = "SELECT name, last_name  FROM user WHERE user = '$user';";
$result = $con->query($sql);

if ($result->num_rows > 0) {

            while($row = $result->fetch_array()) {
          
            $pdf->SetFont("Arial","B",10);
            $pdf->Ln(20);  
            $pdf->SetX(24);
            $pdf->Write(6, strtoupper($row['name'].' '.$row['last_name']));
            $pdf->Cell(50,0,"");
            $pdf->Ln(4);
    }
}    
//IMPRIMIR CODIGO QR 

$sql = "SELECT qr_principal FROM area WHERE name = '$area';";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_array()) {
            $qr_principal   = $row['qr_principal'];
            $pdf->Image($qr_principal,135 ,210, 55, 55,'JPG'); //POSITION QR
    }
}    

    $pdf->SetFont("Arial","",8);
    $pdf->SetY(265);
    $pdf->SetX(137);
    $pdf->Cell(0,4,utf8_decode('Escanea este Código QR'));
    $pdf->Ln();
    $pdf->SetX(137);
    $pdf->Cell(0,4,utf8_decode('y visita nuestra página web'));

//FINALIZAR  Y ENVIAR AL NAVEGADOR//

    //$pdf->output(); 									

//FINALIZAR Y DESCARGAR

    //$pdf->Output($product.'.pdf','D');

//FINALIZAR Y GUARDAR EN EL SERVIDOR

    $rute = '../images/cotizacion/'.$area.'/'.$servicio.'.pdf';

    $pdf->Output($rute,'F');

    $enlace = str_replace('../', './', $rute);

    //$sql = "INSERT INTO cotizacion_0 (name, detail, user, area, pdf, date_l, time_l) 
    //VALUES ('$servicio','$unidad','$user','$area','$enlace','$date_l','$time_l');";

    //$result = $con->query($sql);


    $sql = "UPDATE `lead` SET `quote`= '$total', `quote_pdf`= '$enlace' WHERE  id = '$id';";
    $result = $con->query($sql);


//END FOOTER
/*
    if (empty($type_area)) {
        $sql = "INSERT INTO data_sheet (name, detail, area, portada, pdf) 
        VALUES ('$product','$product','$area','images/brochure/portada/PORTADA NONE.jpg','$enlace');";
    }else{
        $sql = "INSERT INTO data_sheet (name, detail, area, portada, pdf) 
        VALUES ('$product','$product','$type_area','images/brochure/portada/PORTADA NONE.jpg','$enlace');";
    }
*/

    if(empty($type_area)){
        header('location: ../index.php?area='.$area.'&month='.$month);
    }else{
        header('location: ../index.php?area='.$area.'&month='.$month);
    }

    exit();

}else{
	echo "none";
	exit();
}

?>