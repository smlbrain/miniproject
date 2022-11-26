<?php include "connect1.php" ?>
<?php
    $insert = "INSERT INTO order(name, pname ,totalprice) VALUES(,'$name','$pname','$totalprice')";
    $stmt->bindParam(1, $_POST["name"]);
    $stmt->bindParam(2, $_POST["pname"]);
    $stmt->bindParam(3, $_POST["totalprice"]);
    $stmt->execute();
?>

