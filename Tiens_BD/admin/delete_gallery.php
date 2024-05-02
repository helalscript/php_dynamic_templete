<?php
$con=new mysqli('localhost','root','','tiens');
$id=$_GET['id'];
$query=$con->query("delete from photo_gallery where id=$id");
$con->close();
header('location: gallery_list.php')
?>