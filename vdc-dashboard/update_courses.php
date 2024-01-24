<?php
include('./includes/connect.php');

$id = $_GET['update_id'];
$fetch = "select * from courses where id=$id";
$result = mysqli_query($con,$fetch);
$row = mysqli_fetch_assoc($result);
$page_title = $row['page_title'];
$content = $row['content'];
$qualification = $row['qualification'];
$duration = $row['Duration'];
$code = $row['code'];
$existingImage = $row['image'];

$update_value = false;

//updating data into database
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $new_page_title = $_POST['page_title'];
    $new_content = $_POST['content'];
    $new_qualification = $_POST['qualification'];
    $new_duration = $_POST['duration'];
    $new_code = $_POST['code'];
    
    if(!empty($_FILES['image']['name'])){
        $newImage = $_FILES['image']['name'];
        $temp_img = $_FILES['image']['tmp_name'];

        //move the new uploaded imnage
        move_uploaded_file($temp_img,"./includes/images/$newImage");

        //delete the existing image
        if($existingImage && file_exists("./includes/images/$existingImage")){
            unlink("./includes/images/$existingImage");
        }
        $update_value = true;
    
    }else{
        // setting new image to existing image if no image is uploaded
        $newImage = $existingImage;
    }

    if($page_title!=$new_page_title || $content!=$new_content || $qualification!=$new_qualification || $duration!=$new_duration || $code!=$new_code || $update_value){

        //update the new image
        $update_query = "update courses set page_title=?, content=?, qualification=?, Duration=?, code=?, image=? where id=?";
        $smt_update = mysqli_prepare($con,$update_query);
        mysqli_stmt_bind_param($smt_update,"ssssssi", $new_page_title, $new_content, $new_qualification, $new_duration, $new_code, $newImage, $id);
        //execute the statement
        $result = mysqli_stmt_execute($smt_update);
    
        if($result){
            echo "<script>alert('Updated successfully.'); window.location.href='view_courses.php';</script>";
        }else{
            echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
        }
    }else{
        echo "<script>alert('No values are updated'); window.location.href='view_courses.php';</script>";
    }


}

?>

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
        <form action="" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="page_title">Page Title:</label>
                <input type="text" class="form-control" id="page_title" name="page_title" placeholder="Enter page title"
                    value="<?php echo $page_title; ?>">
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="content" class="form-control" rows="5" name="content"
                    placeholder="Enter content"><?php echo $content; ?></textarea>
            </div>

            <div class="form-group">
                <label for="qualification">Qualification:</label>
                <input type="text" class="form-control" id="qualification" name="qualification"
                    placeholder="Enter qualification" value="<?php echo $qualification; ?>">
            </div>

            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter duration"
                    value="<?php echo $duration; ?>">
            </div>

            <div class="form-group">
                <label for="code">Code:</label>
                <input type="text" class="form-control" id="code" name="code" placeholder="Enter code"
                    value="<?php echo $code; ?>">
            </div>

            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
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