<?php include "connect2.php" ;?>
<?php session_start();
$_SESSION['username'] =$_COOKIE['username'] ;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bindParam(1, $_GET["username"]); 
    $stmt->execute(); 
    $row = $stmt->fetch(); 
?>
<html>
    <head>  
    <title>Edit Profile</title>
    <link rel="shortcut icon" type="image/x-icon" href="../pic/logo.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css1.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/6c1080b656.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	    <script src="editscript.js"></script>
    </head>
    <body>
        <header>
        <div id="main_1">
                <span style="font-size:30px;cursor:pointer;margin-left:-140px;color:white;" onclick="openNav()">&#9776;</span>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
                    
                  echo "<a class='nav_regis_username' style='border-top-right-radius:0px;border-bottom-right-radius:0px;margin-right:-7px;' href='profile.php' >$_SESSION[username]</a>
                  <a href='logout.php' class='nav_regis_logout' style='border-top-left-radius:0px;border-bottom-left-radius:0px;'>logout</a>
                    ";
                }else{
                    echo "<a href='login.php' class='nav_regis'>register | login</a> 
                    ";
                }
                ?>
              
            </nav>
        </header>
        <section class="home" id="home" style="margin-bottom:-250px;">
        <div class="back_1" style="margin-top:20px;padding-left:-20px;">
            <a href="../profile.php"><img src="../pic/back.jpg" style="width: 60px;height:40px;cursor:pointer;"></a>
         </div>
         <div class="form-container">
            <form  onsubmit="return check()" action="editprofile.php" method="post" style="margin-top:-200px;">
            <input type="hidden" name="username" value="<?=$row["username"]?>">
            <h1>Edit Profile<br></h1>
            <div style="text-align: left;margin-bottom:-15px;">
            username <input type="button" name="pass"  value="<?=$row["username"]?>"><br>
            new email <a style="color:red;">*</a><input type="text" style="border:1px solid red;" name="email" value="<?=$row["email"]?>">
            old password <input type="button" name="pass"  value="<?=$row["password"]?>"><br>
            new password <a style="color:red;">*</a><input type="password" style="border:1px solid red;" name="password" value="" id='password'></div><br>
            <div id="check" style="margin-top: 0.2rem; color: red;font-size:18px;"></div>
            <input type="submit" value="?????????????????????????????????" name='submit' class="form-btn" >
            </form>
         </div>
            </section>
         <script>
                function check(){
                let password = document.getElementById("password");
                if( password.value == "" ) {
                 let check = document.getElementById("check");
                 check.innerHTML = "???????????????????????????????????????????????????????????????????????????";
                 password.focus();
                 return false;
                    }
                }
         </script>
         <section class="zonefooter" style="padding:0px;">
        <div class="footer_2">
            <div style="display:flex;padding:60px 95px 25px 95px;color:white;">
                <div class="row_1" style="display:flex;">
                    <div style="margin-left:240px;width:350px;">
                        <a href="../1.php" class="logo" style="text-transform: uppercase;font-size:45px;"><span style="color:red;">TICKET</span>minor</a>
                        <div style="font-size:18px;margin-top:-10px;">
                            <p style="margin-bottom:30px;color:#999;">????????????????????????????????????????????????????????????????????????????????????</p>
                            <p style="margin-bottom:15px;">????????????????????? : ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????1518 ??????????????????????????????????????? ?????????????????????????????????????????????????????? 10800</p>
                            <p style="margin-bottom:15px;">????????? : (+66)9999-9999</p>
                            <p style="margin-bottom:15px;">?????????????????? : @email.kmutnb.ac.th</p>
                        </div>
                    </div>
                    <div style="margin-top:20px;margin-left:220px;width:350px;">
                        <div style="font-size:18px;padding:10px;">
                            <p style="margin-bottom:28px;font-size:25px;">???????????????????????????</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- ????????????????????????????????????</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- ????????????????????????????????????????????????????????????</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- ??????????????????????????????</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- ??????????????????-???????????????????????????</p>
                            <p style="margin-bottom:8px;font-size:18px;text-decoration: underline;">- ???????????????????????????????????????????????????</p>
                        </div>
                    </div>
                    <div style="margin-top:20px;margin-left:110px;width:350px;">
                        <div style="font-size:18px;padding:10px;">  
                            <p style="margin-bottom:28px;font-size:25px;">????????????????????????????????????????????? :</p>
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
            <center><a style="color:white;">Copyright ?? 2018 COMPUTER SCIENCE(CS) King Mongkut's University of Technology North Bangkok</a></center>
        </div>
        </section>
    </body>
</html>