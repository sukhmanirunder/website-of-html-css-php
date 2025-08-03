<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesigin.css">
</head>
<body>
    <div class="box">
        <span class="borderLine"></span>
        <form method="post">
            <h2>Sign Up</h2>
            <div class="inputBox">
                <input type="text" required="required" name="username">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="password">
                <span>password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#" >Forgot password</a>
                <a href="login.php" >login</a>
            </div>
            <input type="submit"name="submit" value="Sign up">
        </form>
    </div>
</body>
</html>
<?php
if(isset($_REQUEST['submit'])){
    echo "button is clicked";
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    include('config.php');
    $query="INSERT INTO `registration`(`username`, `password`) VALUES ('$username','$password')";
    $result=mysqli_query($conn,$query);
    if($result>0){
        echo "data inserted";
    }
    else{
        echo"try again";
    }
}
?>