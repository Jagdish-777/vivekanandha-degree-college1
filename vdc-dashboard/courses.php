<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

     <!-- CKEditor -->
     <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
</head>
<body>

<div class="container mt-5">
    <form action="courses.php" enctype="multipart/form-data" method="POST">
        <div class="form-group">
            <label for="page_title">Page Title:</label>
            <input type="text" class="form-control" id="page_title" name="page_title" placeholder="Enter page title">
        </div>

        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" id="content" class="form-control" rows="5" name="content" placeholder="Enter content"></textarea>
        </div>

        <div class="form-group">
            <label for="qualification">Qualification:</label>
            <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter qualification">
        </div>

        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter duration">
        </div>

        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Enter code">
        </div>

        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- CKEditor Script -->
<script>
    ClassicEditor
        .create(document.querySelector('#content'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedlist', 'outdent', 'indent', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
        })
        .catch(error => {
            console.error(error);
        });
</script>

</body>
</html>

<?php
include('./includes/connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $page_title = $_POST['page_title'];
    $content = $_POST['content'];
    $qualification = $_POST['qualification'];
    $duration = $_POST['duration'];
    $code = $_POST['code'];
    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_image,"./includes/images/$image");

    //insert query
    $insert_query = "insert into courses(page_title,content,qualification,Duration,code,image)
    values('$page_title','$content','$qualification','$duration','$code','$image')";
    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('inserted successfully.')</script>";
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }
}
?>



