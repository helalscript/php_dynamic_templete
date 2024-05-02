<?php
require_once("header.php");
$category = $con->query('select * from categories');
$edit = $con->query('select * from products where id=' . $_GET['id'])->fetch_assoc();
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    $category_id = $_POST['category_id'];

    if ($_FILES['photo']['name'] != '') {
        $img = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $img);
        $con->query("update products set name='$name',price='$price',details='$details',category_id=$category_id,photo='$img' where id=".$_GET['id']);
    } else {
        $con->query("update products set name='$name',price='$price',details='$details',category_id=$category_id where id=".$_GET['id']);
    }
?>
    <script>
        window.location.assign('product_list.php')
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
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Products</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $edit['name'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Select Category</option>
                                            <?php while ($c = $category->fetch_assoc()) { ?>
                                                <option value="<?php echo $c['id'] ?>" <?php if ($c['id'] == $edit['category_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?php echo $c['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Price</label>
                                        <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price" value="<?php echo $edit['price'] ?>">
                                    </div>
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
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Details</label>
                                        <textarea name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter Details"><?php echo $edit['details'] ?></textarea>
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