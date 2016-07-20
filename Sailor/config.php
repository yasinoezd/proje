<?php


$host="localhost";
$user="root";
$password="";
$db="deneme";


$conn=mysqli_connect($host,$user,$password,$db);

if (mysqli_connect_errno())
{
	echo "Bağlantı Başarısız";
}


mysqli_query($conn,"SET NAMES utf8");
session_start();

?>