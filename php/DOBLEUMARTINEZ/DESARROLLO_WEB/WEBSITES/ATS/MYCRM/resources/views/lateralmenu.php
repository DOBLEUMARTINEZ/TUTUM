<div class="lateral-menu">

	<button class="btn-lateral-menu">
		<span class="btn-l-open" style="display: none;" onclick="btnlateral('open');" ><i class="fas fa-caret-square-right"></i></span>
		<span class="btn-l-close"  onclick="btnlateral('close');" ><i class="fas fa-caret-square-left"></i></span>
	</button>

	<div class="box-01">
		
		<h2>
			<img src="<?php echo img_user($_SESSION['user']); ?>">
		</h2>

		<ul>
			<li><h1><?php echo strtoupper($_SESSION["business"]);?></h1></li>
			<li><p><?php echo $_SESSION["name_u"]; ?></p></li>
			<li><?php echo $_SESSION["privilege"]; ?></li>
		</ul>

	</div>

	<div class="box-02">
		<ul>

			<li onclick="window.location.href='./';" >
				<i class="fas fa-tachometer-alt"></i>
				Dashboard
			</li>

			<?php // MODULOS SOLO DEL MASTER
			 if ($_SESSION["privilege"]=='master') {
			 	?>

			 	<li onclick="window.location.href='./?origin=clientes';">
					<i class="fas fa-user-tie"></i>Clientes
				</li>

			 	<?php
			 }
			?>

			<li onclick="window.location.href='./?origin=leads';">
				<i class="fas fa-user"></i>
				Leads
			</li>

			<li onclick="window.location.href='./?origin=usuarios';">
				<i class="fas fa-users"></i>
				Usuarios
			</li>

			<li onclick="window.location.href='./?origin=blog';">
				<i class="fas fa-blog"></i>
				Blog
			</li>

		</ul>
	</div>

	<button class="btn-close" onclick="window.location.href='./resources/action.php'" >Cerrar sesion</button>

</div>