<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <!-- top bar css  -->
    <style>
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

        .top-bar-section {
            position: relative;
            left: 0;
            width: 100%;

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
    </style>

    <!-- course card css  -->
    <style>
        .courses-cards{
            margin: 10px;
            width: 100%;
            border: 1px solid black;
            
        }
        .pg-course-heading{
            text-align: center;
            margin: 10px;
            text-decoration: underline;

        }
        .courses-cards{
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        .courses-cards .pg-courses{
            border: 1px solid black;
            width: 30%;
            margin: 10px;
            padding: 10px;
        }
        .courses-cards .pg-courses:hover{
            background-color: var(--nav-hover-backgroung-light);
            border-radius: 10px;
            box-shadow: 5px 5px 5px grey;
        }
    </style>
    

</head>

<body>
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

    <h1 class="pg-course-heading">U.G Courses</h1>
    <div class="courses-cards">
        <div class="pg-courses">
            <h1 class="pg-card-heading">BBA Retail Operations</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos sequi voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis recusandae sapiente iusto, voluptate in repellendus error alias.
            </p>
            <button class="btn">Learn More...</button>

        </div>
        <div class="pg-courses">
            <h1 class="pg-card-heading">BBA Retail Operations</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos sequi voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis recusandae sapiente iusto, voluptate in repellendus error alias.
            </p>
            <button class="btn">Learn More...</button>

        </div>
        <div class="pg-courses">
            <h1 class="pg-card-heading">BBA Retail Operations</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos sequi voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis recusandae sapiente iusto, voluptate in repellendus error alias.
            </p>
            <button class="btn">Learn More...</button>

        </div>

    </div>

</body>

</html>