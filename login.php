<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login form</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    
<?php if (isset($_REQUEST['msg'])) {
                    if ($_REQUEST['status'] == 'success') {
                        echo "<div class='alert alert-success'>" .
                            $_REQUEST['msg'] .
                            '</div>';
                    } else {
                        echo "<div class='alert alert-danger'>" .
                            $_REQUEST['msg'] .
                            '</div>';
                    }}?>
<main>
    <div class="left-side">
        <h1>Login using  social media accounts to get quick access</h1>
        <div class="btn-group">
            <button class="btn">
                <ion-icon class="logo" name="logo-facebook"></ion-icon>
                <span>Continue with Facebook</span>
            </button>
            <button class="btn">
                <ion-icon class="logo" name="logo-google"></ion-icon>
                <span>Continue with Google</span>
            </button>
            <button class="btn">
                <ion-icon class="logo" name="logo-apple"></ion-icon>
                <span>Continue with Apple</span>
            </button>
        </div>
    </div>
    <div class="right-side">
        <div class="title">
            <h1>Login in your account</h1>
            <p>Don't have accout? <a href="sign_in1.php">Sign up free!</a></p>
        </div>
        <form method="post">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter Email" required>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter password" required>
            <button type="submit"class="btn login-btn" name="submit">Login</button>
            <div class="links">
                <label class="container">
                    <input type="checkbox" />Remember Me <span class="checkmark"></span>
                </label>
                <a href="#">Forget password?</a>
            </div>
        </form>
    </div>
</main>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
<?php
include('config.php');
if(isset($_POST['submit'])){
    $username=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from registration where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result); 
    if($count==1){
        header('Location:wlecome.php');
    }
    else{
        echo '<script>
        window.location.href ="index.php";
        alert("Login Failed. Invalid username or password!!!")
        </script>';
   }

}
?>