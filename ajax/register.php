<?php include('process.php'); ?>
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


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <link rel="shortcut icon" type="image/x-icon" href="../pic/logo.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css1.css">
        <link rel="stylesheet" href="../style.css">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://kit.fontawesome.com/6c1080b656.js" crossorigin="anonymous"></script>   
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	    <script src="script2.js"></script>
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
                <a href="../login.php" class="nav_regis">register | login</a>
              
            </nav>
        </header>
        <section class="home" id="home" style="margin-bottom:-50px;">
        <div class="back_1" style="margin-top:20px;padding-left:-20px;">
            <a href="../login.php"><img src="../pic/back.jpg" style="width: 60px;height:40px;cursor:pointer;"></a>
        </div>
        <div class="form-container" style="min-height:75.5vh">
            <form id="register_form">
                <h3>register now</h3>
                <div id="error_msg" style="font-size:18px;"></div>
                <div>
                    <input  type="text" name="username" id="username" required placeholder="enter your username"  >
                    
                    <span></span>
                </div> 
                <div>
                    <input type="text"  name="email" id="email" required placeholder="enter your email"    >
                    <span style="margin:0px;"></span>
                </div>
                    <input type="password" name="password" id="password" required placeholder="enter your password">
                    <span style="margin:0px;"></span>
                <select name="user_type">
                    <option value ="male">male</option>
                    <option value ="female">female</option>
                </select>
                    <input type="submit" name="register" id="reg_btn" value="register now" class="form-btn" href="../login.php"   onclick="ValidateEmail(document.register_form.email)">
                    <script src="regax.js"></script> 
                <p>already have an account?<a href="../login.php">login now</p>
            </form> 
        </div>
        </section>
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
        <div class="footer_2">
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