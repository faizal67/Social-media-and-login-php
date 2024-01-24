<?php

$showError = false;
$login = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include 'partials/_dbconnect.php';
    // $firstname = $_POST["firstname"];
    // $lastname = $_POST["lastname"];
    // $mobile = $_POST["mobile"];
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    

// $result = mysql_query('SELECT * FROM `users` WHERE `email` LIKE "password" ')
//     $firstname= mysql_result($result,1 );


$sql = "Select * from users where email='$email' AND password='$password' ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

      if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        // $_SESSION['firstname'] = $firstname;


        // $_SESSION['firstname'] = $firstname;
        header("location: welcome.php");


      }
        else {
         $showError = true;
      }
    }

?>




<!doctype html>
<html>
<head>
<title>Login </title>
<style>
body
{
 background-image:url(/project/resource/background.jpg);
 background-repeat: no-repeat;
 background-attachment:fixed;
 background-size:cover;
}
.transbox
{
 margin:150px;
 background-color: #ffffff;
 border: 1px solid black;
 opacity: 0.9;
 width:450px;
 height:400px;
 border-radius:8px;
}
.box
{
margin:15%;
color:#000000;
font-size:180%;
padding:10px;
font-weight:110%;
color:mediumblue;
}
.box input
{
outline:none;
border: none;
border-bottom:2px solid black;
}
.head
{
font-size:130%;
color:DodgerBlue;
font-family:vardana;

}
.btn
{
 color:darkblue;
 cursor:pointer;
 outline:none;
 border:2px solid dark purple;
 border-radius:6px;
 font-size:18px;
 font-weight:bold;
}
</style>
</head>


<body>


<?php
if($login){
    echo 'You are now login';
}
if($showError){
    echo 'Invalid credentials';
}



?> 
<center>
<div class="transbox">
    <div class="head">
        <h1>Log In</h1>
    </div>

<div class="box">
<form action="/project/login.php" method="post" >
<lable for="email ">email : </lable>

<input type="email" id="email"  name="email" placeholder="Enter your Email" style="width:200px"><br><br>
<lable for="password">Password: </lable>
<input type="password" id="password" name="password" placeholder="Enter your password">
</div>

<div>
<button type="Submit" class = "btn" >Sign In</button>

</div>
</form>
</div>


<div>
    <p><br>New user click here to <a href="/project/signup.php">sign up</a> </p>
</div>    
</center>

</body>
</html>