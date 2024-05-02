<?php
require_once('header.php');
$id=$_GET['id'];
$d=$con->query('select * from personal_info where id='.$id)->fetch_assoc();
?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $company=$_POST['company'];
    $details=$_POST['details']; 
    $img=$_FILES['photo']['name'];
    $id=$_GET['id'];
        if($img != ''){
        move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$img);
        $qry= $con->query("update personal_info set name='$name',company='$company',details='$details',photo='$img'  where id=$id ");
        }else{
        $qry= $con->query("update personal_info set name='$name',company='$company',details='$details'  where id=$id " );
        }
    ?>
    
<script>
    window.location.assign('personal_info.php')
</script>

<?php } ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Personal info </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Personal info </li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Personal info </h3>
                    </div>
                    
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name " value="<?php echo $d['name'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company</label>
                                        <input type="text" name="company" class="form-control" id="exampleInputEmail1" placeholder="Enter Company" value="<?php echo $d['company'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">details</label>
                                        <input type="text" name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter details" value="<?php echo $d['details'] ?>">
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