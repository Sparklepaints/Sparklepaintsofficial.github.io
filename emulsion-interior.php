<?php 
require_once('connect.php');
include('header.php');
include('nav.php');
// include('nav.php');
?>
<?php

$sql = "SELECT * FROM emulsion_interior";
$res = mysqli_query($connection, $sql);

?>
 
<div class="container-fluid productwrapper green-body text-center justify-content-center my-auto d-flex">
	<div class="row col-lg-12">
		<?php if (!empty($msg)): ?>
			<div class="alert<?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif ?>
	 <?php while($r = mysqli_fetch_assoc($res)){ ?>
		  <div class=" col-lg-2 card pt-4">
		    <div class="thumbnail rounded-circle">
		      <img style="width: 250px;height: 250px;" src="<?php echo $r['image']; ?>" alt="<?php echo $r['title'] ?>">
		      <div class="caption">
		        <h3 class="green-font"><?php echo $r['title'] ?></h3>
		        <p class="text-muted"><?php echo $r['description'] ?></p>
		        	<i class="green-font">Price: <s class="text-danger">N5,500</s></i>
					<p class="green-font">Our price: N<?php echo $r['price']; ?></p>
		        <p><a href="addtocart.php?id=<?php echo $r['id']; ?>" class="btn container-fluid green-body text-white" role="button">Add to Cart</a></p>
		      </div>
		    </div>
		  </div>
	<?php } ?>
 
	</div>
</div>

<style type="text/css">
	.productwrapper{
		margin-top: 10em !important;
		background-color: transparent;
		height: 100% !important;
		width: 100% !important;
		overflow-y: scroll;
	}
</style>
