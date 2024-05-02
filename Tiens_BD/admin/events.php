<?php
require_once("header.php");
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $location = $_POST['location'];

    $img = $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $img);

    $con->query("insert into events(title,event_date,event_time,location,photo)values('$title','$event_date','$event_time','$location','$img')");
?>
    <script>
        window.location.assign('events.php')
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
                    <h1>Events</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Events</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Events</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date</label>
                                        <input type="text" name="event_date" class="form-control" id="exampleInputEmail1" placeholder="Enter event date">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Time</label>
                                        <input type="text" name="event_time" class="form-control" id="exampleInputEmail1" placeholder="Enter event time">
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" name="location" class="form-control" id="exampleInputEmail1" placeholder="Enter location">
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
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">&nbsp;</label>
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            
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