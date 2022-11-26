<?php include "connect1.php" ?>
<?php session_start(); ?>

<html>
    <head>

    </head>
    <body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM `order`");
        $stmt->execute();

    while($row=$stmt->fetch()){
        ?>
        <?=$row ["name"]?>
        <?=$row ["pname"]?>
        <?=$row ["totalprice"]?>
    <?php } ?>
</body>
</html>