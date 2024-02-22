<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect user to the login page
    header("Location: login.php");
    exit();
}

include('./connections/dbconnect.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Add New Entry
                    </div>
                    <div class="card-body">
                        <form action="gallery.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Choose Image</label>
                                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_image,"../images/gallery/$image");

    $insert_query = "insert into `gallery`(name,image) values('$name','$image')";
    $result = mysqli_query($con,$insert_query);
    if($result == 1){
        echo "<script>alert('Record inserted successfully.')</script>";
    }else{
        echo "Error: " . $insert_query . "<br>" . mysqli_error($con);
    }
}
?>
<?php
include('includes/footer.php');

?>