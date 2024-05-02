<?php
$con = new mysqli('localhost', 'root', '', 'palovit');

// $da=$con->query('SELECT featured_project.*, category_featured.name FROM featured_project JOIN category_featured ON featured_project.cat_id=category_featured.id')->fetch_all(MYSQLI_ASSOC);
// $db=$con->query('select * from category_featured')->fetch_all(MYSQLI_ASSOC);
//  foreach($da as $fpi=>$fpl){ 
//  
// foreach($d as $dd){
// echo ($dd['name'].'<br>');
// }
// $d=$con->query('select * from personal_info')->fetch_all();
// echo $fpl['photo'];
$d=$con->query('select * from featured_project')->fetch_assoc();

// $d=$con->query('select * from intro')->fetch_assoc();
echo '<pre>';
Print_r($d);
// echo $d['details']

//  }
?>
<!-- <img src="uploads/<?php echo $fpl['photo']; ?>" class="img-responsive" alt="" /> -->