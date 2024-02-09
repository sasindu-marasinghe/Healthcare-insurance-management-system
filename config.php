<?php

$severname="localhost";
$username="root";
$password="";
$db="health";

$conn=new mysqli($severname,$username,$password,$db);

if($conn->connect_error)
{
    die('connection error:'.$conn->connect_error);
}
else {
    echo('successfully');
}

?>