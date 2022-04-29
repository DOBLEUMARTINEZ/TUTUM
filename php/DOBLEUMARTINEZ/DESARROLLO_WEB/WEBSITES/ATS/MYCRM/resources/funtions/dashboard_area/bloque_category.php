<li  class="back-prooduct">

	<h2><?=ucfirst($row['category'])?></h2>


	<ol>

		<li class="hover-01" onclick="window.location.href='./?origin=<?=$_GET['origin']?>&category=<?=$row['category']?>';" style="border-top: 2px solid #8bc34a9c;" >
			<h3>Items</h3>
			<p><?=product_category($row['category'])?></p> 
		</li>


	</ol>

</li>



