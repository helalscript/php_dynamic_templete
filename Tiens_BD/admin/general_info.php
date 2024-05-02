<?php
require_once("header.php");
$result=$con->query('select * from general_info');
$data=$result->fetch_assoc();
if(isset($_POST['title'])){
    $title=$_POST['title'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $about=$_POST['about'];
    $query="update general_info set title='$title',email='$email',phone='$phone',address='$address',about='$about'";
    if($_FILES['logo']['name']!=''){
        $img=$_FILES['logo']['name'];
        move_uploaded_file($_FILES['logo']['tmp_name'],'uploads/'.$img);
        $query="update general_info set title='$title',email='$email',phone='$phone',address='$address',about='$about',logo='$img'";
    }
    $con->query($query);
?>
<script>
    window.location.assign('general_info.php')
</script>
<?php 

}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update General Information</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update General Information</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Headline" value="<?php echo $data['title'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Headline" value="<?php echo $data['phone'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <textarea name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Headline"><?php echo $data['address'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Headline" value="<?php echo $data['email'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Logo File</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <img src="uploads/<?php echo $data['logo'] ?>" alt="" width="40" height="40">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">About text</label>
                                        <textarea name="about" class="form-control" id="exampleInputEmail1" placeholder="Enter Headline"><?php echo $data['about'] ?></textarea>
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
require_once("footer.php");
?>