<div class="modal fade details-7" id="details-7" tabindex="-1" role="dialog" aria-labelledby="details-7" aria-hidden="false">

	<div class="modal-content">
		<div class="">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center">Make purchase:</h4>
			</div>

			<div class="modal-body">
			<?php 
			// session_start();
			require_once('connect.php'); 
			include('header.php'); 
			include('nav.php'); ?>
			<div class="container">
				<div class="row">
				  <table class="table">
				  		
			<?php
			session_start();
			$items = $_SESSION['cart'];
			$cartitems = explode(",", $items);
			?>

			<?php
			$total = 0;
			$i=1;
			 foreach ($cartitems as $key=>$id) {
				$sql = "SELECT * FROM emulsion_interior WHERE id = $id";
				$res=mysqli_query($connection, $sql);
				$r = mysqli_fetch_assoc($res);
			?>	  	
				<tr>
					<!-- <td><?php echo $i; ?></td> -->
					<td><a class="btn btn-danger mr-3" href="delcart.php?remove=<?php echo $key; ?>">Remove</a><img style="width: 20px;height: 20px;" src="<?php echo $r['image']; ?>" alt="<?php echo $r['title'] ?>"> <?php echo $r['title']; ?></td>
					<td><p class="text-muted"><?php echo $r['description'] ?></p></td>
					<td>$<?php echo $r['price']; ?></td>
				</tr>
			<?php 
				$total =$total + $r['price'];
				$i++; 
				} 
			?>

			<?php
			session_start();
			$items = $_SESSION['cart'];
			$cartitems = explode(",", $items);
			?>

			<?php
			$total = 0;
			$i=1;
			 foreach ($cartitems as $key=>$id) {
				$sql = "SELECT * FROM emulsion_exterior WHERE id = $id";
				$res=mysqli_query($connection, $sql);
				$r = mysqli_fetch_assoc($res);
			?>	  	
				<tr>
					<!-- <td><?php echo $i; ?></td> -->
					<td><a class="btn btn-danger mr-3" href="delcart.php?remove=<?php echo $key; ?>">Remove</a><img style="width: 20px;height: 20px;" src="<?php echo $r['image']; ?>" alt="<?php echo $r['title'] ?>"> <?php echo $r['title']; ?></td>
					<td><p class="text-muted"><?php echo $r['description'] ?></p></td>
					<td>$<?php echo $r['price']; ?></td>
				</tr>
			<?php 
				$total =$total + $r['price'];
				$i++; 
				} 
			?>
			<tr>
				<td><strong class=" modal-dialog">Total Price</strong></td>
				<td><strong>$<?php echo $total; ?></strong></td>
				<td><a href="#" class="btn btn-info">Checkout</a></td>
			</tr>
				  </table>
				</div>
			</div>

			</div>
			
		</div>

		</div>
	</div>