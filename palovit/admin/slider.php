<?php
require_once('header.php');
$qr=$con->query('select * from sliders')->fetch_all(MYSQLI_ASSOC);
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
                        <li class="breadcrumb-item active">sliders</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><a href="add_slider.php" class="btn btn-primary">ADD NEW Slider</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Title1 </th>
                                    <th>Title2 </th>
                                    <th>Title3 </th>
                                    <th>Details </th>
                                    <th>Images</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php  foreach($qr as $data=>$u){ ?>
                              <tr>
                                    <td><?php echo ++$data ?> </td>
                                    <td><?php echo $u['title1'] ?></td>
                                    <td><?php echo $u['title2'] ?></td>
                                    <td><?php echo $u['title3'] ?></td>
                                    <td><?php echo $u['details'] ?></td>
                                   
                                    <td><img src="uploads/<?php echo $u['photo'] ?> " alt="ccc" width="80" height=""></td> 
                                    
                                    <td> 
                                        <a href="edit_slider.php?id=<?php echo $u['id'] ?>" class="btn btn-success">Edit</a>
                                        <a href="delete_slider.php?id=<?php echo $u['id'] ?>" class="btn btn-danger" onclick="return confirm('Moyna tumi ki ata dashbin e pele dite cao')">Delete</a>
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