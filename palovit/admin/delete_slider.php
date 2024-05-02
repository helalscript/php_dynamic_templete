<?php
$con=new mysqli('localhost', 'root','','palovit');
$id=$_GET['id'];
$qw=$con->query("delete from sliders where id=$id");
$con->close();
header('location: slider.php');
?>