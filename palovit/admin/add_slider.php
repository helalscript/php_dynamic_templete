<?php
require_once('header.php');
?>
<?php
// $con = new mysqli('localhost', 'root', '', 'palovit');
if(isset($_POST['submit'])){
$t1=$_POST['title1'];
$t2=$_POST['title2'];
$t3=$_POST['title3'];
$dt=$_POST['details'];
$img = $_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $img);

$S_query=$con->query("insert into sliders(title1,title2,title3,details,photo)values('$t1','$t2','$t3','$dt','$img')");
// echo '<pre>';
// Print_r($S_query);
?>
<script>
    window.location.assign('slider.php')
</script>
<?php } ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Slider photo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Slider photo</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Slider photo</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title 1</label>
                                        <input type="text" name="title1" class="form-control" id="exampleInputEmail1" placeholder="Enter title1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title 2</label>
                                        <input type="text" name="title2" class="form-control" id="exampleInputEmail1" placeholder="Enter title2">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title 3</label>
                                        <input type="text" name="title3" class="form-control" id="exampleInputEmail1" placeholder="Enter title3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">details</label>
                                        <input type="text" name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter details">
                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->


<?php
require_once('footer.php');
?>