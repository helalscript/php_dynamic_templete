<?php
require_once('header.php');
$qr=$con->query('SELECT featured_project.*, category_featured.name FROM featured_project JOIN category_featured ON featured_project.cat_id=category_featured.id')->fetch_all(MYSQLI_ASSOC);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>slider List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> <a href="add_project_featured.php" class="btn btn-primary">ADD New Project </a></h3>
                    </div>
                   

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th style="width: 10px">#</th>
                                    <th>Category</th>
                                    <th>Details</th>
                                    <th>Image</th>
                                    <th style="width: 200px">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            
                            <?php foreach($qr as $i=>$p ){ ?>
                              <tr>
                                    <td><?php echo ++$i ?></td>
                                    <td><?php echo $p['name'] ?></td>
                                    <td><?php echo $p['details'] ?></td>
                                    <td><img src="uploads/<?php echo $p['photo'] ?>" alt="" width="120" height="60"></td> 
                                    
                                    <td> 
                                        <a href="edit_featured_project.php?id=<?php  echo $p['id'] ?>" class="btn btn-success">Edit</a>
                                        <a href="delete_fproject.php?id=<?php echo $p['id']  ?>" class="btn btn-danger" onclick="return confirm('Moyna tumi ki ata dashbin e pele dite cao?')">Delete</a>
                                    </td>

                                </tr>
                               <?php } ?>


                            </tbody>


                        </table>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

</div>
<!-- /.content-wrapper -->


<?php
require_once('footer.php');
?>