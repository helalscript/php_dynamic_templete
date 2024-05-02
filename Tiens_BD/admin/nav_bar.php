<?php
require_once("header.php");
$nav_bar=$con->query('select * from nav_bar')->fetch_all(MYSQLI_ASSOC);
// echo'<pre>';
// print_r($nav_bar);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Navbar Box</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Navbar list</li>
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
                                    <th>Option</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php foreach($nav_bar as $nv=>$kv) { ?>
                                <tr>
                                    <td><?php echo ++$nv ?></td>
                                    <td><?php echo $kv['name'] ?></td>
                                    <td><?php echo $kv['option'] ?></td>
                                    <td>
                                        <a href="edit_nav.php?id=<?php  ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="delete_nav.php?id=<?php  ?>" class="btn btn-danger btn-sm" onclick="return confirm('Moyna D D D Delet korte Cao?')">Delete</a>
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
<div class="container" style="margin-left: 8px;"><a href="add_nav.php" class="btn btn-success">ADD Nav</a></div>
</div>
<!-- /.content-wrapper -->



<?php
require_once("footer.php");
?>