<?php
function name_img($a){
	$name_img = str_replace('./images/uploads/img_blog/', '', strtolower($a));
	$name_img = str_replace('.jpg', '', $name_img);
	return $name_img;
}

function title_blog($a){
	include('conexion.php');

    $sql = "SELECT * FROM blog WHERE id = '$a';";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_array()) {
        	$title_blog = $row['title'];
        }
    }

    return $title_blog;
}

function datosUsuario($mail){

    include('conexion.php');

    $sql = "SELECT * FROM user WHERE email = '$mail';";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_array()) {  

            $data_user = array(
                'name' => $row['name'],
                'phone' => $row['phone'],
                'email' => $row['email'],
                'org' => $row['empresa']
            );
        }
    }

    return $data_user;

}

?>