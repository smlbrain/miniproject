<?php include "connect1.php" ?>
<?php
error_reporting(0);
session_start();
$_SESSION['username'] =$_COOKIE['username'] ;

if(isset($_POST['submit'])){
	
	foreach ($_SESSION["cart"] as $item) {

		$name = $_SESSION['username'];
		$pname = $item["pname"];
		$pprice = $item["price"];
		$qtyy = $item["qty"];
		
		$insert = "INSERT INTO `order`(`name`, `pname`, `totalprice`, `qty`) VALUES ('$name','$pname','$pprice','$qtyy')";
		mysqli_query(mysqli_connect('localhost','root','','livehousedata'), $insert);
		header('location:myticket.php');

	}
}


if ($_GET["action"]=="add") {

	$pid = $_GET['pid'];

	$cart_item = array(
 		'pid' => $pid,
		'pname' => $_GET['pname'],
		'price' => $_GET['price'],
		'qty' => $_POST['qty']
	);

	
	if(empty($_SESSION['cart']))
    	$_SESSION['cart'] = array();
 
	
	if(array_key_exists($pid, $_SESSION['cart']))
		$_SESSION['cart'][$pid]['qty'] += $_POST['qty'];
 
	
	else
	    $_SESSION['cart'][$pid] = $cart_item;


} else if ($_GET["action"]=="update") {
	$pid = $_GET["pid"];     
	$qty = $_GET["qty"];
	$_SESSION['cart'][$pid]['qty'] = $qty;


} else if ($_GET["action"]=="delete") {
	
	$pid = $_GET['pid'];
	unset($_SESSION['cart'][$pid]);
}
?>


<html>
<head>
	<title>My Cart</title>
	<link rel="shortcut icon" type="image/x-icon" href="../pic/logo.png" />
	<link rel="stylesheet" href="css2.css">       
<script>
	
	function update(pid) {
		var qty = document.getElementById(pid).value;
		
		document.location = "cart.php?action=update&pid=" + pid + "&qty=" + qty; 
	}
</script>
</head>
<body>
	
    </header>
<div class="form-container">
	<form method="post">
		<table border="1" style="width:465px;border-radius:5px;">
		<h3><?=$_SESSION["username"]?> Cart</h3>
		<?php 
		$sum = 0;
		foreach ($_SESSION["cart"] as $item) {
		$sum += $item["price"] * $item["qty"];
		?>
		<tr>
			<td><?=$item["pname"]?></td>
			<td><?=$item["price"]?></td>
			<td>		
				<input type="number" class="input1"  id="<?=$item["pid"]?>" value="<?=$item["qty"]?>" min="1" max="9">
				<a href="?action=delete&pid=<?=$item["pid"]?>" class="trash_1"><img src="../pic/trash1.jpg" class="trash_2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลบ</a>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="3" align="right">รวม <?=$sum?> บาท</td>
		</tr>
		</table>
		<div class="input2">
        	<button style="font-size:25px;" class="button2"><a style="color:black;" href="1.php">< เลือกสินค้าต่อ</a></button>
    	</div>
		<div class="input3">
			<button type="submit" style="font-size:25px;" name="submit" value="" class="button3"><a style="color:white;">ยืนยัน ></a></button>
		</div> 
	</form>	
</div>

</body>

</html>
<script>

</script>

