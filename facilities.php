<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="VDC-LOGO.svg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Facilities</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- facilities css  -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            /* ----colors  */
            --navigation-background: #f9f9f4;
            --font-color-navigation: #c21c20;
            --nav-hover-backgroung: #bfd0e2;
            --font-color: #ff6900;
            --font-hover-color: #ff7454;
            --nav-hover-backgroung-light: #d0dae6;
            --facilities-font-color: #185c74;
            --black: black;
            --white: white;
        }

        body {
            font-size: 16px;
        }

        #our-Dept-header {
            font-size: 2rem;
            padding: 20px auto;
            margin: 20px auto;
            /* font-weight: 500; */
            text-align: center;
            text-decoration: underline;
            color: var(--facilities-font-color);
            background-color: lightyellow;

        }

        .labs {
            margin: 10px 40px;
            padding: 10px;
            /* border: 1px solid black; */
        }

        .labsflex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            background-color: var(--navigation-background);

        }

        .labs .labcontent-sub {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* padding: 10px; */
            box-sizing: border-box;
        }

        .labcontent {
            background-color: lightgrey;
            margin-left: 0px;
            padding-left: 0px;
            min-height: 300px;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;

        }
        .labcontent-2{
            background-color: lightgrey;
            margin-left: 0px;
            padding-left: 0px;
            min-height: 300px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;

        }

        .labs .labcontent-sub h1 {
            text-decoration: underline;
            font-size: 1.5rem;
            padding: 10px;
            color: var(--facilities-font-color);
        }

        .labs .labcontent-sub ul {
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .labs .labcontent-sub img {
            width: 100%;
            height: auto;
        }

        /* @media (max-width:900px) {
            .labsflex {
                flex-direction: column;

            }

            .labs .labcontent-sub {
                width: 100%;
            }

        } */
        @media (max-width:1118.9999px) {
            .labsflex {
                flex-direction: column;

            }

            .labs .labcontent-sub {
                width: 100%;
            }

            .labs .labcontent-sub ul {
                padding-bottom: 10px;
            }

            .labcontent {
                border-top-left-radius: 20px;
                border-bottom-left-radius: 0px;
                border-top-right-radius: 20px;

            }
            .labcontent-2 {
                border-top-right-radius: 0px;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;

            }

        }
    </style>

</head>

<body>
    <!-- including header  -->
    <specia-header></specia-header>

    <!-- including social bar  -->
    <special-icon-bar></special-icon-bar>

    <!-- top section  -->
    <div class="top-bar-section">
        <img src="./images/Courses/background-courses.png" alt="No Image">
        <h1 class="top-bar-heading">
            Our Facilities
        </h1>
    </div>


    <!-- our facilities start  -->
    <h1 id="our-Dept-header">OUR Departments</h1>

    <div class="labs labsflex">
        <div class="labcontent-sub labcontent">
            <h1>DEPARTMENT OF LIFE SCIENCE</h1>
            <ul>
                <li><Strong>Global Relevance:</Strong> In today's interconnected world, computer science expertise is
                    essential.</li>
                <li><Strong>Foundational Learning:</Strong> Our curriculum simplifies complex computing concepts for
                    easy comprehension.</li>
                <li><Strong>Expert Faculty:</Strong> Learn from experienced instructors dedicated to making learning
                    accessible.</li>
                <li><Strong>Practical Focus:</Strong> Bridge theory and practice through hands-on projects and
                    real-world applications.</li>
                <li><Strong>Cutting-Edge Resources:</Strong> Access state-of-the-art labs and technology for hands-on
                    learning.</li>
                <li><Strong>Fostering Creativity:</Strong> Encouraging innovation through hackathons, competitions, and
                    research.</li>
                <li><Strong>Career Preparation:</Strong> Prepare for diverse tech careers in software engineering, data
                    analysis, and more.</li>
            </ul>

        </div>
        <div class="labcontent-sub">
            <img src="./images/Facilities/csLab.jpg" alt="No Source">
        </div>
    </div>

    <div class="labs labsflex">
        <div class="labcontent-sub">
            <img src="./images/Facilities/BIO-TECHNOLOGY-LAB.jpg" alt="No Source">
        </div>
        <div class="labcontent-sub labcontent-2">
            <h1>DEPARTMENT OF COMPUTER SCIENCE</h1>
            <ul>
                <li><Strong>Comprehensive Study:</Strong> Dive into the study of living organisms and their functions.</li>
                <li><Strong>Hands-On Learning:</Strong> Engage in practical experiments and research to deepen understanding.</li>
                <li><Strong>Expert Faculty:</Strong> Learn from experienced instructors dedicated to making learning
                    accessible.</li>
                <li><Strong>Interdisciplinary Impact:</Strong> Connects with various fields like health, environment, and agriculture.</li>
                <li><Strong>21st Century Relevance:</Strong> Recognized as a vital sector driving global progress.</li>
                <li><Strong>Fastest Growing Sector: </Strong> Acknowledged by experts and economists worldwide.</li>
                <li><Strong>Career Opportunities:</Strong> Prepare for a range of careers in research, healthcare, and more.</li>
            </ul>
        </div>
    </div>



    <script src="./headerFooterManager.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>