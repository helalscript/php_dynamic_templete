<?php
$con1=new mysqli("localhost","root","","tiens");
$id=$_GET['id'];
$query1= $con1->query("delete from products where id= $id");
$con1->close();
header("location: product_list.php");
?>
