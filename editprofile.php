<?php include "connect2.php" ?>

<?php

$stmt = $pdo->prepare("UPDATE users SET username=?, email=?, password=? WHERE username=?"); 
$stmt->bindParam(1, $_POST["username"]); //
$stmt->bindParam(2, $_POST["email"]);
$stmt->bindParam(3, $_POST["password"]);
$stmt->bindParam(4, $_POST["username"]);
if ($stmt->execute()) 
 header('location:profile.php')
?>

