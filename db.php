<?php
$conn=mysqli_connect('localhost','root','mypass','jacky');
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}