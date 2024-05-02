<?php
$con= new mysqli("localhost","root","","palovit");
$id=$_GET['id'];
$qr=$con->query("delete from personal_info where id='$id'");
$con->close();
header('location: personal_info.php');
?>