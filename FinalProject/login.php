<?php
    session_start();
?>
<?php 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    include 'db.php';
    $sql="select * from login where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=  mysqli_query($con, $sql);
    if($result===FALSE)
        echo "<script>alert('** Query failed executing **')</script>";
    $number = mysqli_num_rows($result);
    
    if($number==1){
        echo "<script>alert('** Login Scuccesfully **')</script>";
        header("Location:main.php");
        exit();
    }
    else{
        echo "<script>alert('Unauthenticated user check your username and password')</script>";
        //header("Location:login.php");
        //exit();
    }
        
}
?>

<!DOCTYPE html>
<html>
<head>
 <title> Login Form </title>
 <link rel="stylesheet" a href="css\style1.css">
 
</head>
<body>
 <div class="container"> 
 <img src="Images/login.png"/>
 <h3 style="color:white">Registered users Please Enter Username and Password</h3>
 
 <form method = "POST" action="login.php">
 <div class="form-input">
 <input type="text" name="username" placeholder="Enter the User Name"/> 
 </div>
 <div class="form-input">
 <input type="password" name="password" placeholder="Enter password"/>
 </div>
 <input type="submit" type="submit" value="LOGIN" class="btn-login"/>
 
 </form>
 <p>   </p>
 <a href="signup.php" style="color:white">If You are new User Then Click Here</a>
 </div>
</body>
</html>