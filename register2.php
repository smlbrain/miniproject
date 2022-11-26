<?php 
@include 'config.php';
 
if(isset($_POST['submit'])){
    $username =mysqli_real_escape_string($conn,$_POST['username']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $pass =md5($_POST['password']);
    $cpass =md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    

    $select ="SELECT * FROM user WHERE email ='$email' && password ='$pass'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist!!';
    }
    else{
        if($pass != $cpass){
            $error[] = 'password not matched';
        }else{
            $insert = "INSERT INTO user(username, email ,password ,USER_TYPE) VALUES('$username','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
           // if($fetch_user->rowcount() > 0){
            //    $fetch_user->execute([$email,$cpass]);
          //      $row = $fetch_user ->fetch(PDO::FETCH_ASSOC);
                setcookie('username',$row['username'],time() +60*60*24, '/');
          //  }
            header('location:login.php');
        }
    }
};
?> 

<!doctype html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../css1.css">
        <script src="https://kit.fontawesome.com/6c1080b656.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="script.js"></script>
    </head>
    <body>


        <div class="form-container">
            <form action="" method="post">
                <h3>register now</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';

                    };
                };
                ?>
                <input type="text" name="username" required placeholder="enter your name" id="username"><span></span>
                <input type="email" name="email" required placeholder="enter your email" id="email"><span></span>
                <input type="password" name="password" required placeholder="enter your password" id="password">
                <input type="password" name="cpassword" required placeholder="confirm your password">
                <select name="user_type">
                    <option value ="male">male</option>
                    <option value ="female">female</option>
            </select>
                <input type="submit" name="submit" value="register now" class="form-btn">
                <p>already have an account?<a href="login.php">login now</p>
</form> 

</div>

    </body>
</html>