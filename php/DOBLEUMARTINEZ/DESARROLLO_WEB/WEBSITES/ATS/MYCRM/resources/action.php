<?php
session_start();

	if (isset($_POST['btn_action'])||isset($_GET['btn_action'])) {

    if(!empty($_GET['btn_action'])){
      $btn_action = $_GET['btn_action'];
    }else{
      $btn_action = $_POST['btn_action'];
    }
          
		include('conexion.php');

		switch ($btn_action) {

			case 'login':

       $user = $_POST['user'];
        $password   = $_POST['password'];
        $sql = "SELECT * FROM user WHERE email='$user' and password='$password'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {

          while($row = $result->fetch_array()) {
            $name_u       = $row['name'];
            $user       = $row['email'];
            $privilege  = $row['type_user'];
            $business   = $row['empresa'];
          }
          $_SESSION["name_u"]     = $name_u;
          $_SESSION["user"]       = $user;
          $_SESSION["privilege"]  = $privilege;
          $_SESSION["business"]   = $business;

          echo "<script>window.location.href='../';</script>";

          //header("location: http://www.crm.atsonline.com.mx/");   

        }else{
          echo "<script>window.location.href='../';</script>";
          //header("location: http://www.crm.atsonline.com.mx/");
        }
				break;
			
      case 'user':
                # code...
                break;

      case 'blog':

          if (isset($_GET['action'])||isset($_POST['action'])) {

            if (isset($_GET['action'])){$action = $_GET['action'];}elseif(isset($_POST['action'])){$action = $_POST['action'];}else{echo "error";exit();}

            switch ($action) {
              case 'delete':
                //echo 'modulo->'.$btn_action.'. accion->'.$action.'. id->'.$_GET['id'];
                $sql = "DELETE FROM blog WHERE id =".$_GET['id'];
                $result = $con->query($sql);
                echo "<script>window.location.href='../?origin=blog';</script>";
                exit();
                break;

              case 'update':
                //echo 'modulo->'.$btn_action.'. accion->'.$action.'. id->'.$_POST['id'];

                // recuerando datos
                $id = $_POST['id'];
                $autor = $_POST['autor'];
                $title = $_POST['title'];
                $sub_title = $_POST['sub_title'];
                $description = $_POST['description'];
                $img = $_POST['img_1'];

                if (!empty($_FILES['image']['name'])) {
                  $name_file  = $_FILES['image']['name'];
                  $file       = $_FILES['image']['tmp_name'];
                  $type       = $_FILES['image']['type'];
                  $size       = $_FILES['image']['size'];

                  $uploads_dir = '../images/uploads/img_blog';
                  $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                  $uploads_dir = './images/uploads/img_blog/'.$name_file;
                  $img = $uploads_dir;
                }

                // insertar datos a la BD

                $sql = "UPDATE blog SET autor='$autor', title='$title', sub_title='$sub_title', description='$description', img='
                $img' WHERE id = '$id'; ";

                //print_r($sql);
                $result = $con->query($sql);
                echo "<script>window.location.href='../?origin=blog';</script>";
                exit();
                break;
              
              default:
                # code...
                break;
            }

          }else{
            //echo "new blog";
            //recuerando datos
            $autor = $_POST['autor'];
            $title = $_POST['title_entrada'];
            $sub_title = $_POST['subtitle'];
            $category = 'Recursos Humanos';
            $description = $_POST['decription'];

            $name_file  = $_FILES['img_entrada']['name'];
            $file       = $_FILES['img_entrada']['tmp_name'];
            $type       = $_FILES['img_entrada']['type'];
            $size       = $_FILES['img_entrada']['size'];

            $uploads_dir = '../images/uploads/img_blog';
            $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
            $uploads_dir = './images/uploads/img_blog/'.$name_file;
            $img = $uploads_dir;

            // insertar datos a la BD

            $sql = "INSERT INTO blog (autor, title, sub_title, category, description, img) VALUES ('$autor','$title','$sub_title','$category','$description','$img');";

            //print_r($sql);
            $result = $con->query($sql);
            echo "<script>window.location.href='../?origin=blog';</script>";
            //exit();
          }

          break;

      case 'new_lead':

        //echo "add_lead</br>";

          $from_l   = $_POST['from'];
          $name     = $_POST['name'];
          $type_l   = $_POST['type'];
          $origin   = 'MYCRM';
          $phone    = $_POST['phone'];
          $email    = $_POST['email'];
          $plaza    = 'EDOMEX';
          $address  = $_POST['address'];
          $origin     = $_POST['origin'];
          $date_l   = $_POST['date_l'];
          $time_l   = $_POST['time_l'];
          $pharner  = $_POST['pharner'];
          $status   = $_POST['status'];
          $quote    = 0;
          $fac_no   = 'NONE';
          $pay      = 0;
          $empresa  = $_POST['empresa'];
          $puesto   = $_POST['puesto'];
          $gallery  = 'NONE';


          if ($_POST['msg']=='Productos') {
            $msg      = $_POST['msg-2'];
          }else{
            $msg      = $_POST['msg'];
          }

          $desc_serv = $_POST['desc_serv'];
          $comments = $_POST['comments'];

          // VALIDAR PRECIO Y COTIZACIÓN
            $letters = array('$', ',');

            if (!empty($_POST['quote'])&&!empty($_POST['pay'])) {

              $quote = str_replace($letters, '', $_POST['quote']);
              $pay   = str_replace($letters, '', $_POST['pay']);

            }elseif (!empty($_POST['quote'])) {

              $quote=$_POST['quote'];

            }elseif (!empty($_POST['pay'])) {

              $pay=$_POST['pay'];

            }

          // ULTIMA ACTUALIZCION
            date_default_timezone_set('America/Mexico_City');
            setlocale(LC_TIME, 'es_MX.UTF-8');
            $last_update = date("Y-m-d H:i:s"); 

          // DOCUMENTACION

            $quote_pdf  = 'NONE';
            $fac_pre    = 'NONE';
            $fac_end    = 'NONE';
            $pay_pdf    = 'NONE';
            $gallery    = 'NONE';

            if (!empty($_FILES['quote_pdf']['name'])||!empty($_FILES['fac_pre']['name'])||!empty($_FILES['fac_end']['name'])||!empty($_FILES['pay_pdf']['name'])) {

              if (!empty($_POST['fac_no'])) {
                $fac_no   = $_POST['fac_no'];
              }

              if (!empty($_FILES['quote_pdf']['name'])) {

                //echo "</br>------quote pdf------</br>";

                $name_file  = $_FILES['quote_pdf']['name'];
                $file       = $_FILES['quote_pdf']['tmp_name'];
                $type       = $_FILES['quote_pdf']['type'];
                $size       = $_FILES['quote_pdf']['size'];

                $uploads_dir = '../images/uploads/quote';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/quote/'.$name_file;

                $quote_pdf = $uploads_dir;

              }

              if (!empty($_FILES['fac_pre']['name'])) {
               //echo "</br>------ fac pre pdf------</br>";
                $name_file  = $_FILES['fac_pre']['name'];
                $file       = $_FILES['fac_pre']['tmp_name'];
                $type       = $_FILES['fac_pre']['type'];
                $size       = $_FILES['fac_pre']['size'];

                $uploads_dir = '../images/uploads/fac_pre';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/fac_pre/'.$name_file;

                $fac_pre = $uploads_dir;
              }

              if (!empty($_FILES['fac_end']['name'])) {
                //echo "</br>------fac end pdf------</br>";
                $name_file  = $_FILES['fac_end']['name'];
                $file       = $_FILES['fac_end']['tmp_name'];
                $type       = $_FILES['fac_end']['type'];
                $size       = $_FILES['fac_end']['size'];

                $uploads_dir = '../images/uploads/fac_end';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/fac_end/'.$name_file;

                $fac_end = $uploads_dir;

              }

              if (!empty($_FILES['pay_pdf']['name'])) {
                //echo "</br>------pay pdf------</br>";
                $name_file  = $_FILES['pay_pdf']['name'];
                $file       = $_FILES['pay_pdf']['tmp_name'];
                $type       = $_FILES['pay_pdf']['type'];
                $size       = $_FILES['pay_pdf']['size'];

                $uploads_dir = '../images/uploads/pay';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/pay/'.$name_file;

                $pay_pdf = $uploads_dir;
              }

            }

            if(!empty($_FILES['file-0']['name'])||!empty($_FILES['file-1']['name'])||!empty($_FILES['file-2']['name'])||!empty($_FILES['file-3']['name'])||!empty($_FILES['file-4']['name'])){

              if(!empty($_FILES['file-0']['name'])){

                $name_file  = $_FILES['file-0']['name'];
                $file       = $_FILES['file-0']['tmp_name'];
                $type       = $_FILES['file-0']['type'];
                $size       = $_FILES['file-0']['size'];

                $uploads_dir = '../images/uploads/sevice_place';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/sevice_place/'.$name_file;

                $gallery = $uploads_dir;

              }

              if(!empty($_FILES['file-1']['name'])){

                $name_file  = $_FILES['file-1']['name'];
                $file       = $_FILES['file-1']['tmp_name'];
                $type       = $_FILES['file-1']['type'];
                $size       = $_FILES['file-1']['size'];

                $uploads_dir = '../images/uploads/sevice_place';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/sevice_place/'.$name_file;

                $gallery .= '#'.$uploads_dir;
   
              }

              if(!empty($_FILES['file-2']['name'])){
                $name_file  = $_FILES['file-2']['name'];
                $file       = $_FILES['file-2']['tmp_name'];
                $type       = $_FILES['file-2']['type'];
                $size       = $_FILES['file-2']['size'];

                $uploads_dir = '../images/uploads/sevice_place';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/sevice_place/'.$name_file;

                $gallery .= '#'.$uploads_dir;
              }

              if(!empty($_FILES['file-3']['name'])){
                $name_file  = $_FILES['file-3']['name'];
                $file       = $_FILES['file-3']['tmp_name'];
                $type       = $_FILES['file-3']['type'];
                $size       = $_FILES['file-3']['size'];

                $uploads_dir = '../images/uploads/sevice_place';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/sevice_place/'.$name_file;

                $gallery .= '#'.$uploads_dir;
              }

              if(!empty($_FILES['file-4']['name'])){
                $name_file  = $_FILES['file-4']['name'];
                $file       = $_FILES['file-4']['tmp_name'];
                $type       = $_FILES['file-4']['type'];
                $size       = $_FILES['file-4']['size'];

                $uploads_dir = '../images/uploads/sevice_place';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/sevice_place/'.$name_file;

                $gallery .= '#'.$uploads_dir;
              }

            }

          $sql = "INSERT INTO lead_ats (from_l,type, origin, name, phone, email, plaza, address, area, msg, date_l, time_l, pharner, status, quote, quote_pdf, fac_no, fac_pre, fac_end, pay, pay_pdf, last_update, comments, empresa, puesto, gallery) VALUES ('$from_l','$type_l', '$origin', '$name', '$phone', '$email', '$plaza', '$address', '$origin', '$msg', '$date_l', '$time_l', '$pharner', '$status', '$quote', '$quote_pdf', '$fac_no', '$fac_pre', '$fac_end', '$pay', '$pay_pdf', '$last_update','$desc_serv', '$empresa', '$puesto','$gallery');";

          //print_r($sql);
          $result = $con->query($sql);

          // COMENTARIOS 
          $fecha =date("Y-m-d");
          $hora = date("H:i:s");

          if (!empty($comments)) {

            //echo "nuevo comentario";

            $sql_last_lead =" SELECT * FROM lead_ats ORDER BY ID DESC LIMIT 1 ";

            $result = $con->query($sql_last_lead);

              if ($result->num_rows > 0) {while($row = $result->fetch_array()) {$user_id = $row['id'];}}

              //echo $user_id;

              $sql ="INSERT INTO `comments` ( `reference`, `fecha`, `user`, `detail`) VALUES ('$user_id', '$fecha', '$pharner', '$comments');";
            
             $result = $con->query($sql);
          }

          $fechaComoEntero = strtotime($date_l);
          $mes = date("m", $fechaComoEntero);
          switch ($mes) {
            case '01':
              $mes='Enero';
              break;

            case '02':
              $mes='Febrero';
              break;

            case '03':
              $mes='Marzo';
              break;

            case '04':
              $mes='Abril';
              break;

            case '05':
              $mes='Mayo';
              break;

            case '06':
              $mes='Junio';
              break;

            case '07':
              $mes='Julio';
              break;

            case '08':
              $mes='Agosto';
              break;

            case '09':
              $mes='Septiembre';
              break;

            case '10':
              $mes='Octubre';
              break;

            case '11':
              $mes='Noviembre';
              break;

            case '12':
              $mes='Diciembre';
              break;

            
            default:
              # code...
              break;
          }

          echo '<script>';
            echo 'window.location.href="../?origin='.$origin.'";';
          echo '</script>';

          header('location: ../index.php?area='.$area.'&month='.$mes);
          exit();

        break;

      case 'update_lead':
        //ACTUALIZAR DESDE MASTER
        if ($_SESSION["privilege"]=='master') {

          $id       = $_POST['id'];
          $type_l   = $_POST['type_l'];
          $name     = $_POST['name'];
          $phone    = $_POST['phone'];
          $email    = $_POST['email'];
          $plaza    = 'Mexico_City';
          $address  = $_POST['address'];
          $area     = $_POST['area'];
          $origin   = $_POST['origin'];
          $msg      = $_POST['msg'];
          $date_l   = $_POST['date_l'];
          $time_l   = $_POST['time_l'];
          $pharner  = $_POST['pharner'];
          $status   = $_POST['status'];
          $quote    = $_POST['quote'];
          $fac_no   = $_POST['fac_no'];
          $pay      = $_POST['pay'];
          $comments = $_POST['comments'];
          $empresa  = $_POST['empresa'];;
          $puesto   = $_POST['puesto'];;
          $record   = $_POST['record'];
          $month    = $_POST['month'];

          // VALIDAR PRECIO Y COTIZACIÓN
            $letters = array('$', ',');

            if (!empty($_POST['quote'])&&!empty($_POST['pay'])) {

              $quote = str_replace($letters, '', $_POST['quote']);
              $pay   = str_replace($letters, '', $_POST['pay']);

            }elseif (!empty($_POST['quote'])) {

              $quote=$_POST['quote'];

            }elseif (!empty($_POST['pay'])) {

              $pay=$_POST['pay'];

            }

          // last update
            date_default_timezone_set('America/Mexico_City');
            setlocale(LC_TIME, 'es_MX.UTF-8');
            $last_update = date("Y-m-d H:i:s"); 

          /* files*/

          //echo "</br>--------------- docs before -----------------</br></br>";

          //echo $_POST['quote_pdf_b']."</br>";
          //echo $_POST['fac_pre_b']."</br>";
          //echo $_POST['fac_end_b']."</br>";
          //echo $_POST['pay_b']."</br>";

          //echo "</br>--------------- new docs -----------------</br></br>";

          $quote_pdf  = $_POST['quote_pdf_b'];
          $fac_pre    = $_POST['fac_pre_b'];
          $fac_end    = $_POST['fac_end_b'];
          $pay_pdf    = $_POST['pay_b'];

          // DOCUMENTS
            if (!empty($_FILES['quote_pdf']['name'])||!empty($_FILES['fac_pre']['name'])||!empty($_FILES['fac_end']['name'])||!empty($_FILES['pay_pdf']['name'])) {

              if (!empty($_FILES['quote_pdf']['name'])) {

                //echo "</br>------quote pdf------</br>";

                $name_file  = $_FILES['quote_pdf']['name'];
                $file       = $_FILES['quote_pdf']['tmp_name'];
                $type       = $_FILES['quote_pdf']['type'];
                $size       = $_FILES['quote_pdf']['size'];

                $uploads_dir = '../images/uploads/quote';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/quote/'.$name_file;

                $quote_pdf = $uploads_dir;

              }

              if (!empty($_FILES['fac_pre']['name'])) {
               //echo "</br>------ fac pre pdf------</br>";
                $name_file  = $_FILES['fac_pre']['name'];
                $file       = $_FILES['fac_pre']['tmp_name'];
                $type       = $_FILES['fac_pre']['type'];
                $size       = $_FILES['fac_pre']['size'];

                $uploads_dir = '../images/uploads/fac_pre';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/fac_pre/'.$name_file;

                $fac_pre = $uploads_dir;
              }

              if (!empty($_FILES['fac_end']['name'])) {
                //echo "</br>------fac end pdf------</br>";
                $name_file  = $_FILES['fac_end']['name'];
                $file       = $_FILES['fac_end']['tmp_name'];
                $type       = $_FILES['fac_end']['type'];
                $size       = $_FILES['fac_end']['size'];

                $uploads_dir = '../images/uploads/fac_end';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/fac_end/'.$name_file;

                $fac_end = $uploads_dir;

              }

              if (!empty($_FILES['pay_pdf']['name'])) {
                //echo "</br>------pay pdf------</br>";
                $name_file  = $_FILES['pay_pdf']['name'];
                $file       = $_FILES['pay_pdf']['tmp_name'];
                $type       = $_FILES['pay_pdf']['type'];
                $size       = $_FILES['pay_pdf']['size'];

                $uploads_dir = '../images/uploads/pay';
                $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
                $uploads_dir = './images/uploads/pay/'.$name_file;

                $pay_pdf = $uploads_dir;
              }

            }else{
              //echo "docs empty";
            }

          // SEPARAR LEADS
            $sql = "UPDATE lead_ats SET type = '$type_l', name = '$name', phone = '$phone', email = '$email', plaza='$plaza', address = '$address', area = '$area', msg = '$msg', date_l = '$date_l', time_l = '$time_l', pharner = '$pharner', status = '$status', quote = '$quote', quote_pdf = '$quote_pdf', fac_no = '$fac_no', fac_pre = '$fac_pre', fac_end = '$fac_end', pay = '$pay', pay_pdf = '$pay_pdf', last_update = '$last_update', comments = '$comments', empresa = '$empresa', puesto = '$puesto' WHERE id = '$id' ;";

            $result = $con->query($sql);

            //print($sql);

            // COMENTARIOS 
              $fecha =date("Y-m-d");
              $hora = date("H:i:s");

              if (!empty($record)) {

                //echo "nuevo comentario";

                $sql_last_lead =" SELECT * FROM lead_ats ORDER BY ID DESC LIMIT 1 ";

                $result = $con->query($sql_last_lead);

                  if ($result->num_rows > 0) {while($row = $result->fetch_array()) {$user_id = $row['id'];}}

                  //echo $user_id;

                  $sql ="INSERT INTO `comments` ( `reference`, `fecha`, `user`, `detail`) VALUES ('$user_id', '$fecha', '$pharner', '$comments');";
                
                 $result = $con->query($sql);
              }


          echo '<script>';
            echo 'window.location.href="../?origin='.$origin.'";';
          echo '</script>';

          exit();

        }else{ // ATUALIZAR USER

          //echo "update ejecutivo segumiento</br>--------------------------------</br></br>";

          $id       = $_POST['id'];
          $type_l   = $_POST['type_l'];
          $name     = $_POST['name'];
          $phone    = $_POST['phone'];
          $email    = $_POST['email'];
          $address  = $_POST['address'];
          $plaza    = 'NONE';
          $area     = $_POST['area'];
          $msg      = $_POST['msg'];
          $date_l   = $_POST['date_l'];
          //echo $_POST['time_l']."</br>";
          $pharner  = $_SESSION["user"];
          $status   = $_POST['status'];
          $quote    = $_POST['quote'];
          $fac_no   = $_POST['fac_no'];
          $pay      = $_POST['pay'];
          $comments = $_POST['comments'];
          $empresa  = $_POST['empresa'];
          $puesto   = $_POST['puesto'];
          $record   = $_POST['record'];

          // VALIDAR PRECIO Y COTIZACIÓN
            $letters = array('$', ',');

            if (!empty($_POST['quote'])&&!empty($_POST['pay'])) {

              $quote = str_replace($letters, '', $_POST['quote']);
              $pay   = str_replace($letters, '', $_POST['pay']);

            }elseif (!empty($_POST['quote'])) {

              $quote=$_POST['quote'];

            }elseif (!empty($_POST['pay'])) {

              $pay=$_POST['pay'];

            }

          // last update
          date_default_timezone_set('America/Mexico_City');
          setlocale(LC_TIME, 'es_MX.UTF-8');
          $last_update = date("Y-m-d H:i:s");

          //file
          $quote_pdf  = $_POST['quote_pdf_b'];
          $fac_pre    = $_POST['fac_pre_b'];
          $fac_end    = $_POST['fac_end_b'];
          $pay_pdf    = $_POST['pay_b'];

          if (!empty($_FILES['quote_pdf']['name'])||!empty($_FILES['fac_pre']['name'])||!empty($_FILES['fac_end']['name'])||!empty($_FILES['pay_pdf']['name'])) {

            if (!empty($_FILES['quote_pdf']['name'])) {

              //echo "</br>------quote pdf------</br>";

              $name_file  = $_FILES['quote_pdf']['name'];
              $file       = $_FILES['quote_pdf']['tmp_name'];
              $type       = $_FILES['quote_pdf']['type'];
              $size       = $_FILES['quote_pdf']['size'];

              $uploads_dir = '../images/uploads/quote';
              $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
              $uploads_dir = './images/uploads/quote/'.$name_file;

              $quote_pdf = $uploads_dir;

            }

            if (!empty($_FILES['fac_pre']['name'])) {
             //echo "</br>------ fac pre pdf------</br>";
              $name_file  = $_FILES['fac_pre']['name'];
              $file       = $_FILES['fac_pre']['tmp_name'];
              $type       = $_FILES['fac_pre']['type'];
              $size       = $_FILES['fac_pre']['size'];

              $uploads_dir = '../images/uploads/fac_pre';
              $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
              $uploads_dir = './images/uploads/fac_pre/'.$name_file;

              $fac_pre = $uploads_dir;
            }

            if (!empty($_FILES['fac_end']['name'])) {
              //echo "</br>------fac end pdf------</br>";
              $name_file  = $_FILES['fac_end']['name'];
              $file       = $_FILES['fac_end']['tmp_name'];
              $type       = $_FILES['fac_end']['type'];
              $size       = $_FILES['fac_end']['size'];

              $uploads_dir = '../images/uploads/fac_end';
              $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
              $uploads_dir = './images/uploads/fac_end/'.$name_file;

              $fac_end = $uploads_dir;

            }

            if (!empty($_FILES['pay_pdf']['name'])) {
              //echo "</br>------pay pdf------</br>";
              $name_file  = $_FILES['pay_pdf']['name'];
              $file       = $_FILES['pay_pdf']['tmp_name'];
              $type       = $_FILES['pay_pdf']['type'];
              $size       = $_FILES['pay_pdf']['size'];

              $uploads_dir = '../images/uploads/pay';
              $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
              $uploads_dir = './images/uploads/pay/'.$name_file;

              $pay_pdf = $uploads_dir;
            }

          }

          //echo "</br>--------------- consult -----------------</br></br>";
          //sql

          if($status=='Solicitud de trabajo'){

            //echo "Solicitud de trabajo";

            $sql="INSERT INTO lead_prospecto (type, origin, from_l, name, phone, email, address, area, msg, date_l, time_l, pharner, status, resume, last_update, comments) VALUES ('$type_l', '$area', '$area', '$name', '$phone', '$email', '$address', '$area', '$msg', '$date_l', '$time_l', '$pharner', 'nuevo', 'cv', '$last_update', '$comments')";

            $result = $con->query($sql);


            $sql = "DELETE FROM lead WHERE id = $id";
            $result = $con->query($sql);

          }else{

            $sql = "UPDATE lead SET type = '$type_l', name = '$name', phone = '$phone', email = '$email', plaza = '$plaza', address = '$address', area = '$area', msg = '$msg', pharner = '$pharner', status = '$status', quote = '$quote', quote_pdf = '$quote_pdf', fac_no = '$fac_no', fac_pre = '$fac_pre', fac_end = '$fac_end', pay = '$pay', pay_pdf = '$pay_pdf', last_update = '$last_update', comments = '$comments', empresa = '$empresa', puesto = '$puesto' WHERE id = '$id' ;";

            //print_r($sql);
            $result = $con->query($sql);

            if (!empty($record)) {
              // record 
              $fecha =date("Y-m-d");
              $hora = date("H:i:s");

              $sql ="INSERT INTO `record` ( `pharner`, `area`, `lead`, `fecha`, `hora`, `detail`) VALUES ('$pharner', '$area', '$id', '$fecha', '$hora', '$record');";

              //print_r($sql);
              $result = $con->query($sql);
            }

            
          }

          // REDIRECCIONAMIENTO
            if (isset($_POST['btn_filter'])) {

              if ($status=='Solicitud de trabajo') {
                $id=$id+1;
              }

              header('location: ../index.php?area='.$area.'&pharner='.$_POST['pharner_filter'].'&status='.$_POST['status_filter'].'&type_lead='.$_POST['type_lead_filter'].'&date_1='.$_POST['date_1_filter'].'&date_2='.$_POST['date_2_filter'].'&btn_filter=true&lead_id='.$id);

            }elseif (isset($_POST['search_bar'])) {

              header('location: ../index.php?area='.$area.'&search_bar='.$_POST['search_bar'].'&lead_id='.$id);

            }else{

              $fechaComoEntero = strtotime($date_l);
              $mes = date("m", $fechaComoEntero);
                switch ($mes) {
                    case '01':
                      $mes='Enero';
                      break;

                    case '02':
                      $mes='Febrero';
                      break;

                    case '03':
                      $mes='Marzo';
                      break;

                    case '04':
                      $mes='Abril';
                      break;

                    case '05':
                      $mes='Mayo';
                      break;

                    case '06':
                      $mes='Junio';
                      break;

                    case '07':
                      $mes='Julio';
                      break;

                    case '08':
                      $mes='Agosto';
                      break;

                    case '09':
                      $mes='Septiembre';
                      break;

                    case '10':
                      $mes='Octubre';
                      break;

                    case '11':
                      $mes='Noviembre';
                      break;

                    case '12':
                      $mes='Diciembre';
                      break;

                    
                    default:
                      # code...
                      break;
                }

              header('location: ../index.php?area='.$area.'&month='.$mes.'&lead_id='.$id);

            }

        }         
        
        exit();
        break;

      case 'delete_lead':
        //echo 'delete_lead';
        $id = $_GET['id'];
        $origin = $_GET['origin'];

        $sql = "DELETE FROM lead_ats WHERE id = $id ";
        $result = $con->query($sql);

        echo '<script>';
          echo 'window.location.href="../?origin='.$origin.'";';
        echo '</script>';

        header('location: ../index.php?area='.$area.'&month='.$month.'&lead_id='.$id);

        exit();
        break;

      case 'upload_excel':
        echo "upload_excel</br></br>";

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        
        if (!empty($_FILES['new_excel']['name'])) {

          $area = $_POST['area'];

          $name_file  = $_FILES['new_excel']['name'];
          $file     = $_FILES['new_excel']['tmp_name'];
          $type     = $_FILES['new_excel']['type'];
          $size     = $_FILES['new_excel']['size'];

          /*echo $name_file."</br>";
          echo $file."</br>";
          echo $type."</br>";
          echo $size."</br>";*/

          $uploads_dir = 'uploads/xlsx';
          $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
          $uploads_dir = 'uploads/xlsx/'.$name_file;

          //echo $uploads_dir;

          $user    = "root";
          $pw     = "";
          $server   = "localhost";
          $database   = "helicomm_mycrm";

          include 'simplexlsx.class.php';

          $xlsx = new SimpleXLSX($uploads_dir);
          $conn = new PDO( "mysql:host=$server;dbname=$database","$user","$pw");
          $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          if ($area=='prestamos') {

            $stmt = $conn->prepare( "INSERT INTO lead_prestamo (name, nutra, phone, corto, plaza, antique, job, proyect, arren, origen, status, ejecutivo, fecha, observacion) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            
            $stmt->bindParam( 1, $name);
            $stmt->bindParam( 2, $nutra);
            $stmt->bindParam( 3, $phone);
            $stmt->bindParam( 4, $corto);
            $stmt->bindParam( 5, $plaza);
            $stmt->bindParam( 6, $antique);
            $stmt->bindParam( 7, $job);
            $stmt->bindParam( 8, $proyect);
            $stmt->bindParam( 9, $arren);
            $stmt->bindParam( 10, $origen);
            $stmt->bindParam( 11, $status);
            $stmt->bindParam( 12, $ejecutivo);
            $stmt->bindParam( 13, $fecha);
            $stmt->bindParam( 14, $observacion);

            $cont_row = 0;

            foreach ($xlsx->rows() as $fields){

              if ($cont_row>=1) {

                $name     = $fields[0];
                $nutra    = $fields[1];
                $phone    = $fields[2];
                $corto    = $fields[3];
                $plaza    = $fields[4];
                $antique  = $fields[5];
                $job      = $fields[6];
                $proyect  = $fields[7];
                $arren    = $fields[8];
                $origen   = $fields[9];
                $status   = $fields[10];
                $ejecutivo= $fields[11];
                $fecha    = date("Y-m-d");
                $observacion = $fields[13];
                  // funcion coments
                  if (!empty($observacion)) {

                    $fecha =date("Y-m-d");
                    $hora = date("H:i:s");
                    $user_id = 1;

                    $sql_last_lead =" SELECT * FROM lead_prestamo ORDER BY ID DESC LIMIT 1 ";

                    $result = $con->query($sql_last_lead);

                      if ($result->num_rows > 0) {while($row = $result->fetch_array()) {$user_id = $row['id'];}}

                      $sql ="INSERT INTO `record` ( `pharner`, `area`, `lead`, `fecha`, `hora`, `detail`) VALUES ('$ejecutivo', '$area', '$user_id', '$fecha', '$hora', '$observacion');";
                    
                     $result = $con->query($sql);

                  }

                $stmt->execute();
                
              }

              $cont_row++;

            }

          }else{ 

            $stmt = $conn->prepare( "INSERT INTO lead (type, origin, from_l, name, phone, email, address, area, msg, date_l, time_l, pharner, status, quote, quote_pdf, fac_no, fac_pre, fac_end, pay, pay_pdf, last_update, comments ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            
            $stmt->bindParam( 1, $type);
            $stmt->bindParam( 2, $origin);
            $stmt->bindParam( 3, $from_l);
            $stmt->bindParam( 4, $name);
            $stmt->bindParam( 5, $phone);
            $stmt->bindParam( 6, $email);
            $stmt->bindParam( 7, $address);
            $stmt->bindParam( 8, $area);
            $stmt->bindParam( 9, $msg);
            $stmt->bindParam( 10, $date_l);
            $stmt->bindParam( 11, $time_l);
            $stmt->bindParam( 12, $pharner);
            $stmt->bindParam( 13, $status);
            $stmt->bindParam( 14, $quote);
            $stmt->bindParam( 15, $quote_pdf);
            $stmt->bindParam( 16, $fac_no);
            $stmt->bindParam( 17, $fac_pre);
            $stmt->bindParam( 18, $fac_end);
            $stmt->bindParam( 19, $pay);
            $stmt->bindParam( 20, $pay_pdf);
            $stmt->bindParam( 21, $last_update);
            $stmt->bindParam( 22, $comments);

            $cont_row=0;

            foreach ($xlsx->rows() as $fields){

              if ($cont_row>=1) {

                $type     = $fields[0];
                $origin   = $fields[1];
                $from_l   = $fields[2];
                $name     = $fields[3];
                $phone    = $fields[4];
                $email    = $fields[5];
                $address  = $fields[6];
                $area     = $fields[7];
                $msg      = $fields[8];
                $date_l   = date("Y-m-d"); 
                $time_l   = date("H:i:s"); 
                $pharner  = $fields[11];
                $status   = $fields[12];
                $quote    = $fields[13];
                $quote_pdf = $fields[14];
                $fac_no   = $fields[15];
                $fac_pre  = $fields[16];
                $fac_end  = $fields[17];
                $pay      = $fields[18];
                $pay_pdf  = $fields[19];
                $last_update = date("Y-m-d H:i:s");

                $comments = $fields[21];
                  // funcion coments
                  if (!empty($comments)) {

                    $fecha =date("Y-m-d");
                    $hora = date("H:i:s");
                    $user_id = 1;

                    $sql_last_lead =" SELECT * FROM lead ORDER BY ID DESC LIMIT 1 ";

                    $result = $con->query($sql_last_lead);

                      if ($result->num_rows > 0) {while($row = $result->fetch_array()) {$user_id = $row['id'];}}

                      $sql ="INSERT INTO `record` ( `pharner`, `area`, `lead`, `fecha`, `hora`, `detail`) VALUES ('$pharner', '$area', '$user_id', '$fecha', '$hora', '$comments');";
                    
                     $result = $con->query($sql);

                  }

                $stmt->execute();
                
              }

              $cont_row++;

            }

          }
 
          header('location: ../index.php?area='.$area);
          exit();

        }else{
          echo "no";
          header('location: ../index.php?area='.$area);
        }
        exit();
        break;

      case 'export_xlsx':

        //echo "expot_xlsx<br>";

        if (isset($_GET['area'])||(isset($_GET['plaza'])||isset($_GET['lead_wallet']))) {

          $area = $_GET['area'];

          switch ($area) {
            case 'prestamos':
              $plaza = $_GET['plaza'];
              $sql = "SELECT * FROM lead_prestamo WHERE plaza = '$plaza' ";
              break;
            
            default:
            //echo "default<br>";

              if (isset($_GET['lead_wallet'])) {

                if ($area=='maredima') {

                  $sql = "SELECT * FROM lead_wallet ";

                }else{
                  $sql = "SELECT * FROM lead_wallet WHERE area = '$area' ";
                }

              }else{
                $sql = "SELECT * FROM lead WHERE area = '$area' "; 
              }
              break;
          }

          
        }else{
          //echo "none";
          $sql = "SELECT * FROM lead ";
        }

        

        /*$sql_1 = "SELECT * FROM lead";
        $sql_2 = "SELECT * FROM lead_prestamo";

        $area = $_SESSION['business'];

        if (isset($_GET['area'])&&!empty($_GET['area'])) {

          if (isset($_GET['search_bar'])&&!empty($_GET['search_bar'])) {

            $word_search = $_GET['search_bar'];
            $area = $_GET['area']; 

            $date_search_1 = $_GET['date_search_1'];
            $date_search_2 = $_GET['date_search_2']; 

            $sql_1 = "SELECT * FROM lead WHERE (id LIKE '%$word_search%' OR name LIKE '%$word_search%' OR status LIKE '%$word_search%') AND area = '$area' AND date_l BETWEEN '$date_search_1' AND '$date_search_2'";

          }elseif(isset($_GET['date_search_1'])||isset($_GET['date_search_2'])){

            date_default_timezone_set('America/Mexico_City');
            setlocale(LC_TIME, 'es_MX.UTF-8');

            $area = $_GET['area'];

            if (!empty($_GET['date_search_1'])&&!empty($_GET['date_search_2'])) { // TWO DATES

                $date_search_1 = $_GET['date_search_1'];
                $date_search_2 = $_GET['date_search_2'];

                if (!empty($_GET['status'])&&!empty($_GET['pharner'])) { // STATUS & PHARNER

                  $status = $_GET['status'];
                  $pharner = $_GET['pharner'];

                  if (isset($_GET['plaza'])&&$area='prestamos') {
                    $plaza=$_GET['plaza'];
                    $sql_1 = "SELECT * FROM lead_prestamo WHERE plaza='$plaza' AND status = '$status' and pharner = '$pharner' AND fecha BETWEEN  '$date_search_1' AND '$date_search_2' ";

                  }else{

                    $sql_1 = "SELECT * FROM lead WHERE area='$area' AND status = '$status' and pharner = '$pharner' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";

                    }

                }elseif (!empty($_GET['status'])) { // STATUS

                  $status = $_GET['status'];

                  if (isset($_GET['plaza'])&&$area='prestamos') {
                    $plaza=$_GET['plaza'];
                    $sql_1 = "SELECT * FROM lead_prestamo WHERE plaza='$plaza' AND status = '$status' AND fecha BETWEEN  '$date_search_1' AND '$date_search_2' ";

                  }else{
                      $sql_1 = "SELECT * FROM lead WHERE area='$area' AND status = '$status' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";
                  }

                }elseif (!empty($_GET['pharner'])) { // PHARNER

                  $pharner = $_GET['pharner'];

                  if (isset($_GET['plaza'])&&$area='prestamos') {
                    $plaza = $_GET['plaza'];
                    $sql_1 = "SELECT * FROM lead_prestamo WHERE plaza = '$plaza' AND ejecutivo = '$pharner' AND fecha BETWEEN  '$date_search_1' AND '$date_search_2' ";
                  }else{
                    $sql_1 = "SELECT * FROM lead WHERE area='$area' AND pharner= '$pharner' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";
                  }

                }else{ // JUST DATES

                  if (isset($_GET['plaza'])&&$area='prestamos') {

                    $plaza = $_GET['plaza'];

                    $sql_1 = "SELECT * FROM lead_prestamo WHERE plaza = '$plaza' AND fecha BETWEEN  '$date_search_1' AND '$date_search_2' ";

                  }else{

                    $sql_1 = "SELECT * FROM lead WHERE area='$area' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";
                  }

                }

            }elseif (!empty($_GET['date_search_1'])) { // DATE 1 

                echo "date 1";
                $date_search_1 = $_GET['date_search_1'];
                $date_search_2 = $_GET['date_search_2'];

                if (!empty($_GET['status'])&&!empty($_GET['pharner'])) { // STATUS & PHARNER

                  $status = $_GET['status'];
                  $pharner = $_GET['pharner'];

                  $sql_1 = "SELECT * FROM lead WHERE area='$area' AND status = '$status' and pharner = '$pharner' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";

                }elseif (!empty($_GET['status'])) { // STATUS

                  $status = $_GET['status'];
                  $sql_1 = "SELECT * FROM lead WHERE area='$area' AND status = '$status' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";

                }elseif (!empty($_GET['pharner'])) { // PHARNER

                  $pharner = $_GET['pharner'];
                  $sql_1 = "SELECT * FROM lead WHERE area='$area' AND pharner= '$pharner' AND date_l BETWEEN '$date_search_1' AND '$date_search_2' ";

                }else{ // JUST DATES
                  $date_search_2 = $_GET['date_search_2'];
                  $sql_1 = "SELECT * FROM lead WHERE area ='$area' AND date_l BETWEEN '$date_search_1' AND '$date_search_2' ";

                }
                            
            }elseif (!empty($_GET['date_search_2'])) { // DATE 2

                echo "date 2";

                $date_search_1 = $_GET['date_search_1'];
                $date_search_2 = $_GET['date_search_2'];

                if (!empty($_GET['status'])&&!empty($_GET['pharner'])) { // STATUS & PHARNER

                  $status = $_GET['status'];
                  $pharner = $_GET['pharner'];

                  $sql_1 = "SELECT * FROM lead WHERE area='$area' AND status = '$status' and pharner = '$pharner' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";

                }elseif (!empty($_GET['status'])) { // STATUS

                  $status = $_GET['status'];
                  $sql_1 = "SELECT * FROM lead WHERE area='$area' AND status = '$status' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";

                }elseif (!empty($_GET['pharner'])) { // PHARNER

                  $pharner = $_GET['pharner'];
                  $sql_1 = "SELECT * FROM lead WHERE area='$area' AND pharner= '$pharner' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";

                }else{ // JUST DATES

                  $sql_1 = "SELECT * FROM lead WHERE area='$area' AND date_l BETWEEN  '$date_search_1' AND '$date_search_2' ";

                }

            }else{
                goto cunsult_area;
            }

          }elseif(isset($_GET['status'])&&!empty($_GET['status'])){

            $area = $_GET['area'];
            $status = $_GET['status'];

            $sql_1 = "SELECT * FROM lead WHERE status ='$status' AND area='$area' ";

          }elseif(isset($_GET['pharner'])&&!empty($_GET['pharner'])){

            $area = $_GET['area'];
            $pharner = $_GET['pharner'];

            $sql_1 = "SELECT * FROM lead WHERE pharner ='$pharner' AND area='$area' ";

          }else{
            cunsult_area:
            $sql_1 = "SELECT * FROM lead WHERE area='$area'";
          }

        }else{  

          echo'ALL';
          
        }

        //print_r($sql_1);
        //exit(); */

        //print_r($sql);

        //exit();

        $productResult  = $con->query($sql);

        $leads = array();

        while( $rows = mysqli_fetch_assoc($productResult) ) {

          $leads[] = $rows;

        }

        if(!empty($leads)) {

          // file_name
          if ($area=='prestamos') {
            $filename = 'leads_'.$area.'_'.$_GET['plaza'].'.xls';
          }else{
            if (isset($_GET['lead_wallet'])) {
              $filename = 'clientes_frecuntes_'.$area.'.xls';
            }else{
              $filename = 'leads_'.$area.'.xls';
            }
            
          }
          
          header("Content-Type: application/vnd.ms-excel");

          header("Content-Disposition: attachment; filename=".$filename);

          $mostrar_columnas = false;

          foreach($leads as $lead) {
            if(!$mostrar_columnas) {

              echo implode("\t", array_keys($lead)) . "\n";

              $mostrar_columnas = true;

            }

            echo implode("\t", array_values($lead)) . "\n";
            
          }

        }else{

          echo "No hay datos a exportar <a href='../index.php?area=".$area."'>haz click para regresar</a>";
        }

        //echo "none";
        exit();
        
        break;

			default:
				echo "no";
				break;
    }

	}else{
    
		session_destroy();
		header('location: ../');
    exit();
	}

?>