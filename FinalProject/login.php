<?php
    session_start();
?>
<?php
include 'db.php';
$error=''; 
if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['password'])){
//$error = "Enter username and password";
echo"<script>alert('Enter username and password')</script>";
}
else
{
$user=$_POST['username'];
$pass=$_POST['password'];
$query = mysqli_query($con, "SELECT * FROM login WHERE username='$user' AND password='$pass'");
$rows = mysqli_num_rows($query);
if($rows == 1){ 
header("Location: main.php"); 
}
else
{
//$error = "Unauthenticated user check your username and password";
echo"<script>alert('Unauthenticated user check your username and password')</script>";
    
}
mysqli_close($con); // Closing connection
}
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Page</title>
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
<h1 align="center">LOGIN</h1>
<h3 align ="center" style="color:black">Registered users Please Enter Username and Password</h3>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="username"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="password"><br/><br/>
<input type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>
</form>
<a href="signup.php" style="color:black" >If You are new User Then Click Here</a><br><br>
<a href="logout.php" style="color:black" >EXIT</a>
</div>
    
</body>
</html>