<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="icon" href="VDC-LOGO.svg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- top bar css  -->
    <!-- <style>
        * {
            margin: 0px;
            padding: 0;
            box-sizing: border-box;
            --font-color: #ff6900;
            /* ----colors  */
            --font-hover-color: #ff7454;
            --navigation-background: #f9f9f4;
            --font-color-navigation: #c21c20;
            --nav-hover-backgroung-light: #d0dae6;
            --black: black;
            --white: white;
            --font-color: #ff6900;

        }

        body {
            background-color: var(--navigation-background);
            font-size: 16px;
        }

        .top-bar-section {
            position: relative;
            left: 0;
            width: 100%;
            z-index: -1;

        }

        .top-bar-section img {
            width: 100%;
            height: 300px;

        }

        .top-bar-section h1 {
            position: absolute;
            top: 45%;
            left: 45%;
            font-size: 32px;
            font-family: 'Courier New', Courier, monospace;
            color: #fff;
            text-decoration: underline;
            font-weight: 600;
            text-transform: uppercase;

        }

        /* capsule css  */
        .capsule {
            display: block;
            text-align: center;
            margin: 10px auto;
            padding: 5px;
            background-color: var(--font-hover-color);
            border-radius: 50px;
        }

        .courses h1 {
            font-family: 'Jost', sans-serif;
            margin: 20px 0px;
            color: var(--font-color);
            text-decoration: underline;
            margin: 10px;
            padding: 5px;

        }

        .capsule h1 {
            color: var(--black);
        }

        .top-bar-section h1:hover {

            /* font-size: 36px; */
            font-family: 'Courier New', Courier, monospace;
            color: var(--font-color);

        }

        @media (max-width:600px) {
            .top-bar-section h1 {
                left: 40%;

            }


        }
    </style> -->

    <!-- course card css  -->
    <style>
        .courses-cards {
            /* margin: 10px; */
            width: 100%;
            /* border: 1px solid black; */
            background-color: var(--navigation-background);


        }

        .courses-cards .course-flex {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            border: 2px solid black;
            border-radius: 10px;
            box-shadow: 5px 5px 5px grey;
            margin: 10px;

        }

        .ug-course-heading {
            text-align: center;
            margin: 10px;
            text-decoration: underline;
            /* background-color: var(--navigation-background); */

        }

        .courses-cards .ug-courses {
            /* border: 1px solid black; */
            width: 30%;
            /* height: 300px; */
            margin: 10px;
            padding: 10px;
            box-shadow: 5px 5px 5px grey;
            border-radius: 10px;
            border: 1px solid black;
        }

        .courses-cards .ug-courses:hover {
            background-color: var(--nav-hover-backgroung-light);
            border-radius: 15px;
            box-shadow: 7px 7px 5px grey;
            cursor: pointer;
        }
        .ug-courses .ug-courses-small-content{
            height: 110px;
            overflow: hidden;
        }

        .courses-cards .ug-courses h1:hover {
            color: var(--font-color);
        }

        .courses-cards .ug-courses h1 {
            font-size: 100%;
            margin: 10px;
            text-decoration: underline;
            /* height: 120px; */
        }

        .courses-cards .ug-courses p {
            height: 110px;
            overflow: hidden;
        }

        .courses-cards .ug-courses .btn-courses a {
            color: var(--white);
            text-decoration: none;
        }

        .btn-courses {
            background-color: var(--font-color);
            color: var(--black);
            padding: 3px;
            font-size: 0.8rem;
            font-weight: 300;
            border-radius: 30px;
            margin: 5px;
            color: var(--white);
        }

        .btn-courses:hover {
            font-size: 1rem;
        }

        @media (max-width:800px) {
            .courses-cards .course-flex {
                flex-direction: column;
                box-sizing: border-box;
            }

            .courses-cards .ug-courses {
                width: 95%;
                padding: 5px;
            }

            .courses-cards .ug-courses {
                box-shadow: 0px 0px 5px grey;
            }

        }
    </style>


</head>

<body>
    <specia-header></specia-header>
    <!-- top section  -->
    <div class="top-bar-section">
        <img src="./images/Courses/background-courses.png" alt="No Image">
        <h1 class="top-bar-heading">
            Courses
        </h1>
    </div>

    <!-- capsule -  -->
    <div class="capsule">
        <h1>
            Home | Courses
        </h1>
    </div>

    <h1 class="ug-course-heading" id="U.G Courses">U.G Courses</h1>

    <div class="courses-cards">
        <div class="course-flex">

            <?php
                include('./vdc-dashboard/includes/connect.php');
                include('./vdc-dashboard/function.php');

                $fetct_query = "SELECT * FROM `courses` WHERE course_title in ('B.sc Honors in Computer Science','B.A','B.C.A','BBA (Bachelor of Business Administration)')";
                $result = mysqli_query($con,$fetct_query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $pgt = $row['program_title'];
                    echo "<div class='ug-courses'>
                            <h1 class='ug-card-heading'>" . $row['program_title'] . "</h1>
                            <div class='ug-courses-small-content'>" . $row['content'] . "</div>
                            <button class='btn-courses'><a href='call-courses.php?page=$pgt'>Learn More...</a></button>
                        </div>";
                }
            ?>

        </div>
        <h1 class="ug-course-heading">B.Com</h1>
        <div class="course-flex">

            <?php
                $fetct_query = "SELECT * FROM `courses` WHERE course_title ='B.Com'";
                $result = mysqli_query($con,$fetct_query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $pgt = $row['program_title'];
                    echo "<div class='ug-courses'>
                            <h1 class='ug-card-heading'>" . $row['program_title'] . "</h1>
                            <div class='ug-courses-small-content'>" . $row['content'] . "</div>
                            <button class='btn-courses'><a href='call-courses.php?page=$pgt'>Learn More...</a></button>
                        </div>";
                }
            ?>
        </div>
        <h1 class="ug-course-heading">B.Sc. (Physical Sciences)</h1>
        <div class="course-flex">

                
            <?php
                $fetct_query = "SELECT * FROM `courses` WHERE course_title ='B.Sc. (Physical sciences)'";
                $result = mysqli_query($con,$fetct_query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $pgt = $row['program_title'];
                    echo "<div class='ug-courses'>
                            <h1 class='ug-card-heading'>" . $row['program_title'] . "</h1>
                            <div class='ug-courses-small-content'>" . $row['content'] . "</div>
                            <button class='btn-courses'><a href='call-courses.php?page=$pgt'>Learn More...</a></button>
                        </div>";
                }
            ?>
            
        </div>
        <h1 class="ug-course-heading">B.Sc. (life Sciences)</h1>
        <div class="course-flex">
        <?php
                $fetct_query = "SELECT * FROM `courses` WHERE course_title ='B.Sc. (Life Sciences)'";
                $result = mysqli_query($con,$fetct_query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $pgt = $row['program_title'];
                    echo "<div class='ug-courses'>
                            <h1 class='ug-card-heading'>" . $row['program_title'] . "</h1>
                            <div class='ug-courses-small-content'>" . $row['content'] . "</div>
                            <button class='btn-courses'><a href='call-courses.php?page=$pgt'>Learn More...</a></button>
                        </div>";
                }
            ?>
        </div>
    </div>

    <h1 class="ug-course-heading" id="P.G-Courses">P.G Courses</h1>
    <div class="courses-cards">

        <!-- <h1 class="ug-course-heading" id="U.G Courses">B.Com</h1> -->
        <div class="course-flex">
        <?php

                $fetct_query = "SELECT * FROM `courses` WHERE course_title in ('M.Com.','M.Sc. (Computer Science)')";
                $result = mysqli_query($con,$fetct_query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $pgt = $row['program_title'];
                    echo "<div class='ug-courses'>
                            <h1 class='ug-card-heading'>" . $row['program_title'] . "</h1>
                            <div class='ug-courses-small-content'>" . $row['content'] . "</div>
                            <button class='btn-courses'><a href='call-courses.php?page=$pgt'>Learn More...</a></button>
                        </div>";
                }
            ?>
        </div>
    </div>

    <special-footer></special-footer>

    <script src="./headerFooterManager.js"></script>

</body>

</html>