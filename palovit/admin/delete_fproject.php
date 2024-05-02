<?php
$con=new mysqli("localhost","root","","palovit");
$id=$_GET['id'];
$qr=$con->query("delete from featured_project where id=$id");
// $con->close();
// header('location: featured_project.php');
$con->close();
header('location: project_featured.php');
?>