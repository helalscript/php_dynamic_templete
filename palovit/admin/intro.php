<?php
require_once('header.php');
$d=$con->query('select * from intro')->fetch_assoc();
?>
<?php
// $con = new mysqli('localhost', 'root', '', 'palovit');
if(isset($_POST['submit'])){
$dt=$_POST['details'];
$w=$_POST['owner'];

$S_query=$con->query("update intro details='$dt',owner='$w'");
// echo '<pre>';
// Print_r($data);

}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Intro</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Intro</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title ">Update Intro</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> </label>
                                        <textarea name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value=""><?php echo $d['details'] ?> </textarea>
                                    </div>
                            </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> </label>
                                        <input type="text" name="owner" class="form-control" id="exampleInputEmail1" placeholder="Enter Owner name" value="<?php echo $d['owner'] ?>">
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