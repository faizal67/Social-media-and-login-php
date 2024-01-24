<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
   header("location: login.php");
   exit;
}


?>



<!doctype html>
<html>
<head>
<title>Welcome </title>
<style>
body
{
background-image:url(/project/resource/background.jpg);
}
.header
{
background-color:white;
opacity:0.9;
padding:20px;
text-align:center;
color:black;
}
.topnav
{
overflow:hidden;
background-color:black;
}
.topnav a
{
float: left;
display: block;
color: white;
text-align:center;
padding: 14px 16px;
text-decoration:none;
}
.topnav a:hover
{
background-color: grey;
color:black;
}



.icons
{ 
   margin-left:100px;
   margin-top:50px;
}
.icons img
{
   padding:10px;
   
}
.icons img:hover
{
   height:220px;
   width:220px;
}

/* .column
{
float:left;
width:30%;
padding:12px;
}
.row:after
{
content:"";
display:table;
clear:both;
} */

/* .footer
{
background-color:lightgrey;
padding:10px;
text-align:center;

} */
</style>
</head>
<body>

<div class="header">
<h1>Soial share button</h1>

Welcome 
</div>

<div class="topnav">
<a href="#">Home</a>
<!-- 
<a href="/project/login.php">Log in</a> -->
<a href="/project/signup.php">Sign up</a>
<a href="/project/logout.php">Log out</a>
<a href="#">contact us</a>


</div>
<div class="icons">
<a href="https://www.facebook.com/kiet.edu" target="blank"><img  src="/project/resource/facebook.png"></img></a>
<img  src="/project/resource/linkedin.png"></img>
<img  src="/project/resource/twitter.png"></img>
<img  src="/project/resource/instagram.png"></img>
<img  src="/project/resource/youtube.png " style="height:240px; width:240px;"></img>
</div>
<!-- <div class="row">
<div class="column">
<h2>Column</h2>
<p>Lorem ipsum doloor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec cgklsg sdlgkj sghoorort magna ergurgl,grlweglkgegelgldf
ekrglkehgre rehg dgejgh erlgjhhleth elgjleht elgjlh</p>
</div>

<div class="column">
<h2>Column</h2>
<p>Lorem ipsum doloor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec cgklsg sdlgkj sghoorort magna ergurgl,grlweglkgegelgldf
ekrglkehgre rehg dgejgh erlgjhhleth elgjleht elgjlh</p>
</div>

<div class="column">
<h2>Column</h2>
<p>Lorem ipsum doloor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec cgklsg sdlgkj sghoorort magna ergurgl,grlweglkgegelgldf
ekrglkehgre rehg dgejgh erlgjhhleth elgjleht elgjlh</p>
</div>
</div> -->


<!-- <div class="footer" >
<p>Footer</p>
</div> -->

</body>
</html>