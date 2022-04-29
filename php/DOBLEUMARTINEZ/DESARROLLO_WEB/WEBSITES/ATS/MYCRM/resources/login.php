<?php
echo "<body style='background-image: url(./images/img/bg-login.jpg); background-size:100%;'>";
?>

<div class="login">


	<form method="POST" action="./resources/action.php">

		<img src="./images/brands/logo.png"><br>

		<label>Email</label><br>
		<input type="text" name="user" placeholder="example@gmail.com"><br><br>

		<label>Contraseña</label><br>
		<input type="password" name="password" placeholder="Contraseña"><br><br>

		<button type="submit" name="btn_action" value="login" >aceptar</button>
	</form>
</div>

<?php
echo "</body>";
?>
