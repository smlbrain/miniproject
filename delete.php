<?php include "connect1.php" ?>
<?php

$stmt = $pdo->prepare("DELETE FROM `order` WHERE orderid=?");
$stmt->bindParam(1, $_GET["orderid"]); 
if ($stmt->execute()) 
header("location: myticket.php"); 

?>