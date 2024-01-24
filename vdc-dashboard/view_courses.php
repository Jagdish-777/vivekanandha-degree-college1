<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>View_courses</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Id</th>
                <th>page_title</th>
                <th>content</th>
                <th>qualification</th>
                <th>duration</th>
                <th>code</th>
                <th>image</th>
                <th>operations</th>
            </tr>
        </thead>
        <tbody>

            <?php
include('./includes/connect.php');

$select_query = "select * from courses";
$result_query = mysqli_query($con,$select_query);
if($result_query){
    $serial_number = 1;
    while($row = mysqli_fetch_assoc($result_query)){
        $id = $row['id'];
        $page_title = $row['page_title'];
        $content = $row['content'];
        $qualification = $row['qualification'];
        $duration = $row['Duration'];
        $code = $row['code'];
        $image = $row['image'];
        
        echo '<tr>
        <td>'. $serial_number .'</td>
        <td>'. $id .'</td>
        <td>'. $page_title .'</td>
        <td>'. $content .'</td>
        <td>'. $qualification .'</td>
        <td>'. $duration .'</td>
        <td>'. $code .'</td>
        <td><img src="./includes/images/' . $image . '" alt="content_image" width="50"></td>
        <td>
        <button class="btn btn-primary"><a href="update_courses.php?update_id='.$id.'" class="text-light">edit</a></button>
        <button class="btn btn-danger"><a href="delete_courses.php?delete_id='.$id.'" class="text-light">Delete</a></button>
        </td>
        </tr>';
        $serial_number++;
    }
}
?>
        </tbody>
    </table>
</body>
</html>