<?php
$con=new mysqli('localhost','root','','tiens');
$id=$_GET['id'];
$query=$con->query("delete from news where id=$id");
$con->close();
header('location: newslist.php')
?>
