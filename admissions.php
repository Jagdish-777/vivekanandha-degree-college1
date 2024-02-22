<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="VDC-LOGO.svg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .nav{
            display: block;
        }
        .container form{
            margin: 20px auto;
        }
    </style>
</head>
<body>
<specia-header></specia-header>

    <div class="container">
            <h2 class="mt-4 text-center">Student Registration Form</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="student_name">Student Name:</label>
                    <input type="text" class="form-control" id="student_name" name="student_name" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="father_name">Father Name:</label>
                        <input type="text" class="form-control" id="father_name" name="father_name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mother_name">Mother Name:</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gender:</label><br>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" id="male" name="gender" value="male" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" id="female" name="gender" value="female" required>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="present_address">Present Address:</label>
                    <input type="text" class="form-control" id="present_address" name="present_address" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="present_district">District:</label>
                        <input type="text" class="form-control" id="present_district" name="present_district" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="present_state">State:</label>
                        <input type="text" class="form-control" id="present_state" name="present_state" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="present_pincode">Pincode:</label>
                        <input type="text" class="form-control" id="present_pincode" name="present_pincode" required>
                    </div>
                </div>
                <div class="form-group">

                    <div class="form-check-inline" style="position:relative">
                        <input class="form-check-input mr-0"  type="checkbox" id="use_present_address" name="use_present_address">
                        <label class="form-check-label" for="use_present_address">
                            Use Present Address as Permanent Address
                        </label>
                    </div>
                </div>
                
                <div id="permanent_address_fields" style="display: none;">
                    <div class="form-group">
                        <label for="permanent_address">Permanent Address:</label>
                        <input type="text" class="form-control" id="permanent_address" name="permanent_address">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="permanent_district">District:</label>
                            <input type="text" class="form-control" id="permanent_district" name="permanent_district">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="permanent_state">State:</label>
                            <input type="text" class="form-control" id="permanent_state" name="permanent_state">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="permanent_pincode">Pincode:</label>
                            <input type="text" class="form-control" id="permanent_pincode" name="permanent_pincode">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number:</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Nationality">Nationality:</label>
                        <input type="text" class="form-control" id="Nationality" name="Nationality" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="course_name">Course Name:</label>
                    <input type="text" class="form-control" id="course_name" name="course_name" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" style="position:absolute; left:-450px"  id="declaration" name="declaration" required>
                    <label class="form-check-label" for="declaration">I hereby declare that the information provided above is true to the best of my knowledge.</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
            </form>
    </div>
    <special-footer></special-footer>
    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('use_present_address').addEventListener('change', function() {
            var permanentAddressFields = document.getElementById('permanent_address_fields');
            if (this.checked) {
                permanentAddressFields.style.display = 'none';
            } else {
                permanentAddressFields.style.display = 'block';
            }
        });
    </script>
    <script src="./headerFooterManager.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>


<?php
include('./admin/connections/dbconnect.php');

if (isset($_POST['submit'])) {
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $gender = $_POST['gender'];
    $present_address = $_POST['present_address'];
    $present_district = $_POST['present_district'];
    $present_state = $_POST['present_state'];
    $present_pincode = $_POST['present_pincode'];
    $phone_number = $_POST['phone'];
    $Nationality = $_POST['Nationality'];
    $email = $_POST['email'];
    $course_name = $_POST['course_name'];
    $declaration = isset($_POST['declaration']) ? $_POST['declaration'] : '';

    // Check if checkbox for using present address as permanent address is checked
    if (isset($_POST['use_present_address'])) {
        $permanent_address = $present_address;
        $permanent_district = $present_district;
        $permanent_state = $present_state;
        $permanent_pincode = $present_pincode;
    } else {
        $permanent_address = $_POST['permanent_address'] ?? $present_address; // Using the present address if no separate permanent address is provided
        $permanent_district = $_POST['permanent_district'] ?? $present_district;
        $permanent_state = $_POST['permanent_state'] ?? $present_state;
        $permanent_pincode = $_POST['permanent_pincode'] ?? $present_pincode;
    }
    

    // Perform any necessary validation before inserting into the database

    // Insert data into database
    $insert_query = "INSERT INTO `admissions`(`student_name`, `father_name`, `mother_name`, `gender`, `present_address`, `present_district`, `present_state`, `present_pincode`, `permanent_address`, `permanent_district`, `permanent_state`, `permanent_pincode`, `phone_number`, `nationality`, `email`, `course_name`, `declaration`) 
    VALUES ('$student_name','$father_name','$mother_name','$gender','$present_address','$present_district','$present_state',' $present_pincode ','$permanent_address','$permanent_district','$permanent_state','$permanent_pincode','$phone_number','$Nationality','$email','$course_name','$declaration')";

    $result = mysqli_query($con, $insert_query);
    if ($result) {
        echo "<script>alert('Record inserted successfully.')</script>";
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

