<?php include "connect1.php" ?>
<?php session_start(); 
error_reporting(0);
$_SESSION['username'] =$_COOKIE['username'] ;

?>
<?php  
function  createConfirmationmbox() {  
    echo '<script type="text/javascript"> ';  
    echo ' function openulr(newurl) {';  
    echo '  if (confirm("กรุณาเข้าสู่ระบบก่อน")) {';  
    echo '    document.location ="login.php"'; 
    echo '  }';  
    echo '}';  
    echo '</script>';  
    }  
?>


</script>
<!doctype html>
<html>
    <head>
        <title>Search Ticket</title>
        <link rel="shortcut icon" type="image/x-icon" href="../pic/logo.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css2.css">
        
        <script src="https://kit.fontawesome.com/6c1080b656.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <?php 
        createConfirmationmbox();  
        ?> 
    </head>
    <body>
        <header>
            <div id="main_1">
                <span style="font-size:30px;cursor:pointer;margin-left:-140px;color:white;" onclick="openNav()">&#9776;</span>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                <a href="../1.php">Home</a>
                <?php
                if(isset($_SESSION['username'])){
                    echo"<a href='myticket.php'>my ticket</a>";
                }else{
                    echo"<a href=javascript:openulr('#'); class='nav_myticket'>my ticket</a>";
                }
                ?>
                <?php 
                if(isset($_COOKIE['username'])){
                    
                  echo "<a href='../cart1.php'>my cart</a>
                    ";
                }else{
                    echo "<a href=javascript:openulr('#'); class='nav_myticket'>my cart</a>
                    ";
                }
                ?>
                <a href="../serch.php">search</a>
                <?php 
                if(isset($_COOKIE['username'])){
                    
                  echo "<a class='nav_regis_username' style='border-top-right-radius:0px;border-bottom-right-radius:0px;margin-right:-7px;' href='profile.php' >$_SESSION[username]</a>
                  <a href='logout.php' class='nav_regis_logout' style='border-top-left-radius:0px;border-bottom-left-radius:0px;'>logout</a>
                    ";
                }else{
                    echo "<a href='login.php' class='nav_regis'>register | login</a> 
                    ";
                }
                ?>
            </div>
            <a href="1.php" class="logo"><span>TICKET</span>minor</a>
            <nav class="navbar">
                <a href="../1.php">home</a>
                <?php
                if(isset($_SESSION['username'])){
                    echo"<a href='myticket.php'>my ticket</a>";
                }else{
                    echo"<a href=javascript:openulr('#'); class='nav_myticket'>my ticket</a>";
                }
                ?>
                <?php 
                if(isset($_COOKIE['username'])){
                    
                  echo "<a href='../cart1.php'>my cart</a>
                    ";
                }else{
                    echo "<a href=javascript:openulr('#'); class='nav_myticket'>my cart</a>
                    ";
                }
                ?>
                <a href="../serch.php">search</a>
                <?php 
                if(isset($_COOKIE['username'])){
                    
                  echo "<a class='nav_regis_username' style='border-top-right-radius:0px;border-bottom-right-radius:0px;margin-right:-7px;' href='profile.php'>$_SESSION[username]</a>
                  <a href='logout.php' class='nav_regis_logout' style='border-top-left-radius:0px;border-bottom-left-radius:0px;'>logout</a>
                    ";
                }else{
                    echo "<a href='login.php' class='nav_regis'>register | login</a> 
                    ";
                }
                ?>
      
            </nav>
        </header>
                
            

                    <div class="form-container" style="margin-top: 85px;">
                    <div class="form-container_1">
                   
  
                
                <form onsubmit="return check()">
                <h3>search ticket</h3>   
                        Username : <input type="text" name="name" placeholder="ex.user1234" style="width:60%;" id="name" >
                        <div id="check" style="margin-top: 14px; color: red;font-size:18px;"></div> 
                        <input type="submit" class="search_input_1" style="font-size: 23px;" value="ค้นหา" > 

                    <div class="my_tic_detail" style="padding-top:13px;">
                     
                    <script>
                         function check(){
                            let name = document.getElementById("name");
                            if( name.value == "" ) {
                            let check = document.getElementById("check");
                             check.innerHTML = "กรุณากรอกชื่อผู้ใช้ก่อน";
                             name.focus();
                            return false;
                                    }
                             }
                    </script>
                    <?php
                    $stmt = $pdo->prepare("SELECT * FROM `order` WHERE name LIKE?");
                    if(!empty($_GET)){
                        $value = '%'.$_GET["name"].'%';
                    }
                    $stmt ->bindParam(1,$value);
                    $stmt->execute();



                    while ($row = $stmt->fetch()) {
                    ?>
                    ชื่อสมาชิก : <?=$row ["name"]?><br>
                    ชื่อคอนเสิร์ต : <?=$row ["pname"]?><br>
                    จำนวน : <?=$row ["qty"]?> ใบ<br>
                    </form>

                    <hr>
                    <?php } ?>
                      
                                                



                       
                    </div>
                 
            </form>
       
            </div> 
        </div>
    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        }
    </script>
    </body>
</html>