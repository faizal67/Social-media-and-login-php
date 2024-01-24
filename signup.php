
<?php
 $showAlert=false; 
 $showError_p=false; 
 $showError_r=false; 
if($_SERVER["REQUEST_METHOD"]== "POST"){
    
    include 'partials/_dbconnect.php';
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    $existSql = "SELECT * FROM users WHERE  email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0){
        $showError_r= true;
        // $exists = true;
    }
    else {
        // $exists = false;
    

        if($password == $cpassword)
        {
       $sql = "INSERT INTO `users` ( `firstname`, `lastname`, `mobile`, `email`,`password`, `dt`) VALUES ('$firstname', '$lastname',
          '$mobile', '$email', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
            if($result)
            {
            $showAlert=true;
            }
        
        }
        else{
            $showError_p=true;
            }
    }
}
?>

<!doctype html>
<html>
<head>
<title>sign up</title>
<style>
body
{
text-align:center;
background-image:url(/project/resource/bg2.jpg);
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;
}
.transbox
{
margin:140px;
background-color: #ffffff;
border: 2px solid blue;
opacity:0.9;
width:550px;
height:450px;
border-radius:25px;
}
.head
{
font-size:120%;
color:blue;
}

.box input
{
border-radius:6px;
border-color:blue;
margin:5px;
padding:6px;
font-size:100%
outline:none;

}
#email
{
width:280px;
margin:5px;
}
#mobile
{
margin:5px;
}
.btn
{
margin:25px;
padding:10px;
font-size:120%;
color:blue;
outline:none;
border:2px solid blue;
border-radius:15px;
font-weight:bold;
}
</style>
</head>

<body>
<?php
 if($showAlert)
 {
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>success!</strong> your account is now creaded and you can login';
 }
 if($showError_p)
 {
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>!Error password do not match   </strong>';
 }
 if($showError_r)
 {
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>!Error This email is already exist   </strong>';
 }
?>

<center>
<div class="transbox">


<div class="head">


<h1>Sign Up</h1>
</div>

<div class="box">
<form action="/project/signup.php" method="post">
<label for="fname"><img src="resource/icons8-user-24.png"></lable>
<input type="text" id="fname" name="firstname" placeholder="First Name">
<input type="text" id="lname" name="lastname" placeholder="Last Name"><br>
<label for="mobile"><img src="resource/icons8-phone-24.png"></lable>
<input type="text" id="mobile id" name="mobile id" value="+91" style="width:45px;">
<input type="mobile no" id="mobile" name="mobile" placeholder="Mobile No."><br>
<label for="email"><img src="resource/icons8-email-24.png"></lable>
<input type="email" id="email" name="email" placeholder="Email Address"><br>
<label for="password"><img src="resource/icons8-password-24.png"></lable>
<input type="password" id="password" name="password" placeholder="Create Password"><br>
<label for="cpassword"><img src="resource/icons8-password-24.png"></lable>
<input type="password" id="cpassword" name="cpassword" placeholder="Re-type Password"><br>
</div>

<button type="submit" class="btn" >Sign up</button>
</form>
</div>
</center>
</body>
</html>