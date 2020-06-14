<?php
    session_start();
?>
<?php
include 'db.php';
$error=''; 
if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['password'])){
//$error = "Enter All details";
    echo"<script>alert('Enter All Details')</script>";
}
else
{
 $time = time();
    $date = date('F d, Y, g: i a');
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
  $sql = "insert into signup(name,dob,email,mobile,username,password) values ('$name','$dob','$email','$mobile','$user','$pass')";
    $sql1= "insert into login(username,password,name,email,visit) values ('$user','$pass','$name','$email','$date')";  
 if(mysqli_query($con, $sql)&& mysqli_query($con, $sql1))
    {
        //echo"<script>alert('You have successfully registered')</script>";
        header("Location:login.php");
    }


}
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>SIGNUP PAGE</title>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}

</style>
</head>
<body background = "Images/bar_background.png">
<div class="login">
<h1 align="center">SIGNUP</h1>
<h3 align ="center" style="color:black">Registered users Please Enter Username and Password</h3>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username"  name="name"><br/><br/>
<input type="text" placeholder="Password"  name="dob"><br/><br/>
<input type="text" placeholder="Username"  name="email"><br/><br/>
<input type="text" placeholder="Password"  name="mobile"><br/><br/>
<input type="text" placeholder="Username"  name="username"><br/><br/>
<input type="password" placeholder="Password" name="password"><br/><br/>
<input type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>
</form>
<a href="logout.php" style="color:black" >EXIT</a>
</div>
    
</body>
</html>
