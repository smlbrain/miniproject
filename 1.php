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
    echo '    document.location ="../login.php"'; 
    echo '  }';  
    echo '}';  
    echo '</script>';  
    }  
?>
<script>
function Consearch(name) { 
var ans = confirm("คุณต้องการลบสินค้า ไช่หรือไม่?"); 
if (ans==true) 
document.location = "serch.php?name="+name; 
}
</script>
<!doctype html>
<html>
    <head>
        <title>Home</title>
        <link rel="shortcut icon" type="image/x-icon" href="../pic/logo.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css1.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/6c1080b656.js" crossorigin="anonymous"></script>
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
            <a href="../1.php" class="logo"><span>TICKET</span>minor</a>
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
                    
                  echo "<a class='nav_regis_username' style='border-top-right-radius:0px;border-bottom-right-radius:0px;margin-right:-7px;' href='profile.php' >$_SESSION[username]</a>
                  <a href='logout.php' class='nav_regis_logout' style='border-top-left-radius:0px;border-bottom-left-radius:0px;'>logout</a>
                    ";
                }else{
                    echo "<a href='login.php' class='nav_regis'>register | login</a> 
                    ";
                }
                ?>
                <button type="button" onclick="change1()" style="curser:pointer;"><img src="../pic/15.png"></button>
                <button type="button" onclick="change2()" style="curser:pointer;"><img src="../pic/14.png"></button>
                <button type="button" onclick="change3()" style="curser:pointer;" ><img src="../pic/16.png"></button>
            </nav>
                <script>
                function change1() {  
                document.body.style.backgroundColor = "salmon";
                }
                </script>
                <script>
                function change2() {  
                document.body.style.backgroundColor = "white";
                }
                </script>
                <script>
                function change3() {  
                document.body.style.backgroundColor = "gray";
                }
                </script>
    </header>
        <section class="home" id="home">
            <div class="container">
            <?php
                if(isset($_SESSION['username'])){
                    echo"<h1 class='h1'>Welcome to TICKETMINOR ,<a class='username_1'>$_SESSION[username]</a></h1>";
                }else{
                    echo"<div class='h1_div'><h1 class='h1'>SCROLL DOWN TO BUY TICKET NOW!!</h1></div>";
                }
                ?>
                <?php
                if(isset($_SESSION['username'])){
                    echo"<div class='slideshow_2'>
                    <div class='w3-content w3-section' style='max-width:500px'>
                        <img class='mySlides w3-animate-fading' src='../pic/4.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/1.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/2.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/3.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/5.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/6.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/7.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/8.jpg' style='width:500px;height: 645px;'>
                    </div>
                    </div>";
                }else{
                    echo"<div class='slideshow_1'>
                    <div class='w3-content w3-section' style='max-width:500px'>
                        <img class='mySlides w3-animate-fading' src='../pic/4.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/1.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/2.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/3.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/5.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/6.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/7.jpg' style='width:500px;height: 645px;'>
                        <img class='mySlides w3-animate-fading' src='../pic/8.jpg' style='width:500px;height: 645px;'>
                    </div>
                    </div>";
                }
                ?>
                <script>
                  var myIndex = 0;
                  carousel();
                  function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                      x[i].style.display = "none";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 3000);    
                  }
                </script>
        </section>
        <div style="background-color:crimson;color:white;padding:15px;width:100%;font-size:30px;margin-top:-295px;">
                    <a style="width:100%;text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Ticket...</a>
                </div>

        <section>


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <div style="width:100% !important;margin-top:-70px;">
                <div class="card_selection" style="width: 100%;"> 
                    <?php
		            $stmt = $pdo->prepare("SELECT * FROM ticket");
	                $stmt->execute();
                    while ($row = $stmt->fetch()){
	                ?>                  
                    <div style="text-align:center;margin-bottom:0px;" class="line_1">
                    <div class="block_1" >
                    <a href="detail.php?pid=<?=$row["pid"]?>">
                    <img src='pic/<?=$row["pid"]?>.jpg' class="poster_1" style="margin-bottom:15px;border-radius: 8px;">
                    </a>
                        <br>
                        <div style="margin-bottom:-10px;font-size:35px;">
                            <?=$row ["pname"]?></div><div style="margin-bottom:-10px;font-size:17px;"><?=$row ["price"]?> บาท
                        </div>
                        <form method="post" action="cart1.php?action=add&pid=<?=$row["pid"]?>&pname=<?=$row["pname"]?>&price=<?=$row["price"]?>&qty=<?=$row["price"]?>"><br>
                        <div>  
                            <input type="number" name="qty" value="1" min="1" max="9" style="border-color:black;border-style: solid;border-width:1.5px;font-size: 20px; border-radius:7px" >
                        </div>
                        <?php
                        if(isset($_SESSION['username'])){
                            echo"<a href='cart1.php'><input type='submit' value='BUY TICKET' class='box_1_buttuon'></a>";
                            }else{
                                echo"<a href=javascript:openulr('#');><input type='button' value='BUY TICKET' class='box_1_buttuon_notlogin'></a>";
                                }
                        ?>
			            </form>
                        </div>
<?php } ?></div>
                    </div>
                </div>
                </div>
        </section>
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
        <section class="zonefooter" style="padding:0px;">
        <div class="footer">
            <div style="display:flex;padding:60px 95px 25px 95px;color:white;">
                <div class="row_1" style="display:flex;">
                    <div style="margin-left:240px;width:350px;">
                        <a href="../1.php" class="logo" style="text-transform: uppercase;font-size:45px;"><span style="color:red;">TICKET</span>minor</a>
                        <div style="font-size:18px;margin-top:-10px;">
                            <p style="margin-bottom:30px;color:#999;">เว็บไซต์จำหน่ายบัตรคอนเสิร์ต</p>
                            <p style="margin-bottom:15px;">ที่อยู่ : มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ1518 แขวงวงศ์สว่าง เขตบางซื่อกรุงเทพฯ 10800</p>
                            <p style="margin-bottom:15px;">โทร : (+66)9999-9999</p>
                            <p style="margin-bottom:15px;">อีเมล์ : @email.kmutnb.ac.th</p>
                        </div>
                    </div>
                    <div style="margin-top:20px;margin-left:220px;width:350px;">
                        <div style="font-size:18px;padding:10px;">
                            <p style="margin-bottom:28px;font-size:25px;">ช่วยเหลือ</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- เกี่ยวกับเรา</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- นโยบายการเป็นส่วนตัว</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- จุดจำหน่าย</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- ติดต่อ-แบบสอบถาม</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- ให็คะแนนการบริการ</p>
                        </div>
                    </div>
                    <div style="margin-top:20px;margin-left:110px;width:350px;">
                        <div style="font-size:18px;padding:10px;">  
                            <p style="margin-bottom:28px;font-size:25px;">ติดตามเราได้ที่ :</p>
                            <a href="../1.php">
                                <p style="margin-bottom:5px;font-size:25px;">localhost/1.php</p>
                                <img src="../pic/9.png">
                                <img src="../pic/10.png">
                                <img src="../pic/11.png">
                                <img src="../pic/12.png">
                                <img src="../pic/13.jpg" width="170px;" height="80px;" style="margin-top:20px;border-radius:10px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <center><a style="color:white;">Copyright © 2018 COMPUTER SCIENCE(CS) King Mongkut's University of Technology North Bangkok</a></center>
        </div>
        </section>

    </body>
</html>