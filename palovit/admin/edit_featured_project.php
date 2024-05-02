<?php
require_once('header.php');
$id=$_GET['id'];
$sl=$con->query('select * from category_featured');
$sda=$con->query('select * from featured_project where id='.$id)->fetch_assoc();
?>

<?php
if(isset($_POST['submit'])){
$c_id=$_POST['c_id'];
$dt=$_POST['details'];
$img = $_FILES['photo']['name'];
if($img != ''){
$S_query=$con->query  ("update featured_project set cat_id='$c_id',details='$dt',photo='$img'");
move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $img);
}else{
    $S_query=$con->query  ("update featured_project set cat_id='$c_id',details='$dt'");
}

// echo '<pre>';
// Print_r($S_query);
// $con->close();
// header('Location: project_featured.php');
?>
<script>
    window.location.assign('project_featured.php')
</script>

<?php } ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> update Project Featured</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Project Featured</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> update Project Featured</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        
                                        <select name="c_id" id="" class="form-control">
                                        <option value="">Select Category</option>
                                        <?php foreach($sl as $dk){?>
                                            
                                            <option value="<?php echo $dk['id'] ?>"> <?php echo $dk['name'] ?></option>
                                                <?php }?>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">details</label>
                                        <input type="text" name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter details" value="<?php echo $da['details'] ?>">
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