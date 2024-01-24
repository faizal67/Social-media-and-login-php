<?php
$server = "localhost";
$username = "root";
$password = "";


$database = "users";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn)
{
//     echo "connection to the database : Success";
// }
// else
// {
    die ("Error". mysqli_connect_error());
}


?>