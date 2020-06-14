<html>
    <head>
        <title>Register Here</title>
        <link rel="stylesheet" a href="css/style2.css">

    <body>
        <div class ="container">
                <h1>Register Here</h1>
        <form action = "signup.php" method="POST">
            <div class = "form-input">
              <input type = "text" name = "name" placeholder="Enter Your Name"/>  
            </div>
            <div class = "form-input" >
              <input type = "text" name = "dob" placeholder="Enter Date of Birth"/>  
            </div>
            <div class = "form-input">
                <input type = "text" name = "email" placeholder="Enter Email address"/>
            </div>
            <div class = "form-input">
               <input type = "text" name = "mobile" placeholder="Enter Mobile Number"/> 
            </div>
            <div class = "form-input">
                <input type = "text" name = "username" placeholder="Enter username"/>
            </div>
            <div class = "form-input">
               <input type = "password" name = "password" placeholder="Enter Password"/> 
            </div> 

       
            <input type ="submit" name ="signup" value ="signup">
        </form>
            </div>
    </body>    
    
</html>
<?php
    session_start();
?>
<?php

    if(isset($_POST['signup']))
    {
        $time = time();
    $date = date('F d, Y, g: i a');
     $name = $_POST['name'];
     $dob = $_POST['dob'];
    $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $user = $_POST['username'];
     $pass = $_POST['password'];
    include 'db.php';
      if($name =='')
     {
         echo"<script>alert('please enter the name')</script>";
         
     }

  if($user =='')
     {
         echo"<script>alert('please enter the username')</script>";
         
         
     }
     if($pass =='')
     {
         echo"<script>alert('please enter the password')</script>";
         
     }

    $sql = "insert into signup(name,dob,email,mobile,username,password) values ('$name','$dob','$email','$mobile','$user','$pass')";
    $sql1= "insert into login(username,password,name,email,visit) values ('$user','$pass','$name','$email','$date')";
    if(mysqli_query($con, $sql)&& mysqli_query($con, $sql1))
    {
        echo"<script>alert('You have successfully registered')</script>";
        header("Location:login.php");
    }
   }
?>
