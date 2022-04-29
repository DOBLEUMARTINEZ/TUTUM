<div class="brochure-content">

	<ol>
		<?php

    	if (isset($_GET["type_area"])) {

    		$type_area = $_GET["type_area"];

    		$sql = "SELECT * FROM $type WHERE area ='$type_area'";

    		//print_r($sql);

	        $result = $con->query($sql);
	        if ($result->num_rows > 0) {
	        	
	          	while($row = $result->fetch_array()) {

		            ?>

			    		<li onclick="modal_lead('<?=$type?>',<?php echo $row['id'];?>);" >

			    			<span><i class="fas fa-print" title="PDF / Imprimir" ></i></span>
			    			
			    			<img src="<?php if(!empty($row['portada'])){echo $row['portada'];}else{echo "images/brochure/portada/PORTADA NONE.jpg";} ?>" title="<?php echo $row['name']; ?>";>

			    			<p><?php echo strtoupper($row['name']);?></p>

			    		</li>
			    	
			    	<?php
	        	}


	         }else{

	         	echo "no hay datos";

	         }


	        // add new ficha tecnica

	          	if ($type=='data_sheet') {
	          		?>
		          	<li onclick="modal_lead('new_data_sheet','1');" >
			    		<span><i class="fas fa-plus" title="añadir" ></i></span>
			    		<img src="images/brochure/portada/PORTADA NONE.jpg" title="Nueva Ficha tecnica";>
			    		<p><?php echo strtoupper('nueva ficha tecnica');?></p>  
			    	</li>
		          	<?php
	          	}

    	}else{

    		$sql = "SELECT * FROM area LIMIT 1,10";

	        $result = $con->query($sql);

	        if ($result->num_rows > 0) {

	          	while($row = $result->fetch_array()) {

		            ?>

				    	<li onclick="window.location.href='./index.php?area=<?php echo $area;?>&type=<?=$type?>&type_area=<?php echo $row['name'];?>';">
				    		<span> <i class="fas fa-folder-open"></i></span>
				    		<img src="<?php if(!empty($row['logo'])){echo $row['logo'];}else{echo "images/brochure/portada/PORTADA NONE.jpg";} ?>";>
				    		<p><?php echo strtoupper($row['name']);?></p> 
				    	</li>
			    	
			    	<?php
	          	}

	        }else{

	         	echo "none";

	        }

    	}



		?>
	</ol>

</div>