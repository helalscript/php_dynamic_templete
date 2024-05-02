<?php
require_once("header.php");
$pro=$con->query("select products.*,categories.name as category from products JOIN categories ON categories.id=products.category_id")->fetch_all(MYSQLI_ASSOC);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product list</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product list</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Details</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php foreach($pro as $i=>$pd){ ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $pd['name'] ?></td>
                                    <td><?php echo $pd['price'] ?></td>
                                    <td><?php echo $pd['details'] ?></td>
                                    <td><?php echo $pd['category'] ?></td>
                                    <td><img src="uploads/<?php echo $pd['photo'] ?>" alt="" width="50" height="60"></td>
                                    <td>
                                        <a href="edit_product.php?id=<?php echo $pd['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="delete_product.php?id=<?php echo $pd['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Moyna D D D Delet korte Cao?')">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

</div>
<!-- /.content-wrapper -->

<?php
require_once("footer.php");
?>