<?php include "connect1.php" ?>
<?php
    if(isset($_POST['import'])){
        $array=array(
            array("pname"=>"John" ,"totalprice"=>"1000","qty"=>"2"),
        );
    $count=count($array);
    $query=$conn->prepare("SELECT COUNT(*) as total FROM `order`");
    $query->execute();
    $row=$query->fetch();

    
		if($row['total']==0){
			for($i=0; $i<$count-1; $i++){
				$pname=$array[$i]["pname"];
				$price=$array[$i]["price"];
				$qty=$array[$i]["qty"];
				try{
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "INSERT INTO `oeder`(,pname, totalprice)  VALUES (,'$pname', '$price')";
					$conn->exec($sql);
					
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			}
			
			echo"<script>alert('Successfully imported!')</script>";
			echo"<script>window.location='index.php'</script>";
			
		}else{
			echo"<script>alert('An array is already imported!')</script>";
			echo"<script>window.location='index.php'</script>";
		}
		
        
    }

?>