<?php
if(isset($_POST['submit'])){
    $file = fopen('data.csv','a');
    $headline = $_POST["headline"];
    $fileName = time().$_FILES["images"]["name"];
    $fileTmpLocation = $_FILES["images"]["tmp_name"];
    $fileSize  = $_FILES["images"]["size"];
    $upLocation = "../img/";
    move_uploaded_file($fileTmpLocation, $upLocation.$fileName);
    fputcsv($file, [$headline,$fileName]);
    header("Location:addnews.php");
}

?>