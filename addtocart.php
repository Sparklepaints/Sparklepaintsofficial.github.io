<?php
	$msg="";
	$msgClass="";
	session_start();
if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
	$items = $_SESSION['cart'];
	$cartitems = explode(",", $items);
	$items .= "," . $_GET['id'];
	$_SESSION['cart'] = $items;
	header('location: http://localhost:1738/dashboard/sparkle/index.php#test3');
}else{
	$items = $_GET['id'];
	$_SESSION['cart'] = $items;
	header('location: http://localhost:1738/dashboard/sparkle/index.php#test3');
}
// $items = $_SESSION['cart'];
// $cartitems = explode(",", $items);
// if(in_array($_GET['id'], $cartitems)){
// 	header('location: store.php?status=incart');
// }else{
// 	$items .= "," . $_GET['id'];
// 	$_SESSION['cart'] = $items;
// 	// header('location: index.php?status=success');
	
// }
?>
