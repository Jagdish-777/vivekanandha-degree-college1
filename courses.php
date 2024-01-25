<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="./css/style.css">
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
    </style>

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
        }

        .courses-cards .ug-courses:hover {
            background-color: var(--nav-hover-backgroung-light);
            border-radius: 15px;
            box-shadow: 7px 7px 5px grey;
            cursor: pointer;
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
            <div class="ug-courses">
                <h1 class="ug-card-heading">B.sc Honors in Computer Science</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat voluptas hic harum consequatur
                    unde, ipsam ad sit labore, alias necessitatibus porro aut, dignissimos aliquid veritatis. Officiis,
                    quae totam. Saepe excepturi illum, dolor sapiente nihil illo! Perspiciatis quisquam porro labore,
                    earum et consequuntur
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">B.A - HEP (History, Economics and Political Science)</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos
                    sequi
                    voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis
                    recusandae sapiente iusto, voluptate in repellendus error alias.
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">B.C.A</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos
                    sequi
                    voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis
                    recusandae sapiente iusto, voluptate in repellendus error alias.
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">BBA (Bachelor of Business Administration)</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos
                    sequi
                    voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis
                    recusandae sapiente iusto, voluptate in repellendus error alias.
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
        </div>
        <h1 class="ug-course-heading" >B.Com</h1>
        <div class="course-flex">
            <div class="ug-courses">
                <h1 class="ug-card-heading">B.Com GENERAL</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat voluptas hic harum consequatur
                    unde, ipsam ad sit labore, alias necessitatibus porro aut, dignissimos aliquid veritatis. Officiis,
                    quae totam. Saepe excepturi illum, dolor sapiente nihil illo! Perspiciatis quisquam porro labore,
                    earum et consequuntur
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">COMPUTER APPLICATIONS</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos
                    sequi
                    voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis
                    recusandae sapiente iusto, voluptate in repellendus error alias.
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">Business Analytics</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos
                    sequi
                    voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis
                    recusandae sapiente iusto, voluptate in repellendus error alias.
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
        </div>
        <h1 class="ug-course-heading" >B.Sc. (Physical Sciences)</h1>
        <div class="course-flex">
            <div class="ug-courses">
                <h1 class="ug-card-heading">M.C.Cs</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat voluptas hic harum consequatur
                    unde, ipsam ad sit labore, alias necessitatibus porro aut, dignissimos aliquid veritatis. Officiis,
                    quae totam. Saepe excepturi illum, dolor sapiente nihil illo! Perspiciatis quisquam porro labore,
                    earum et consequuntur
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">M.P.Cs</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat voluptas hic harum consequatur
                    unde, ipsam ad sit labore, alias necessitatibus porro aut, dignissimos aliquid veritatis. Officiis,
                    quae totam. Saepe excepturi illum, dolor sapiente nihil illo! Perspiciatis quisquam porro labore,
                    earum et consequuntur
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">M.S.Cs</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos
                    sequi
                    voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis
                    recusandae sapiente iusto, voluptate in repellendus error alias.
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">M.S.Ds (Data Science)</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos
                    sequi
                    voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis
                    recusandae sapiente iusto, voluptate in repellendus error alias.
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
        </div>
        <h1 class="ug-course-heading" >B.Sc. (life Sciences)</h1>
        <div class="course-flex">
            <div class="ug-courses">
                <h1 class="ug-card-heading">MB.C.BT</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat voluptas hic harum consequatur
                    unde, ipsam ad sit labore, alias necessitatibus porro aut, dignissimos aliquid veritatis. Officiis,
                    quae totam. Saepe excepturi illum, dolor sapiente nihil illo! Perspiciatis quisquam porro labore,
                    earum et consequuntur
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">BC.C.BT</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos
                    sequi
                    voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis
                    recusandae sapiente iusto, voluptate in repellendus error alias.
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
        </div>
    </div>

    <h1 class="ug-course-heading" id="P.G Courses">P.G Courses</h1>
    <div class="courses-cards">

        <!-- <h1 class="ug-course-heading" id="U.G Courses">B.Com</h1> -->
        <div class="course-flex">
            <div class="ug-courses">
                <h1 class="ug-card-heading">M.Com.</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat voluptas hic harum consequatur
                    unde, ipsam ad sit labore, alias necessitatibus porro aut, dignissimos aliquid veritatis. Officiis,
                    quae totam. Saepe excepturi illum, dolor sapiente nihil illo! Perspiciatis quisquam porro labore,
                    earum et consequuntur
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
            <div class="ug-courses">
                <h1 class="ug-card-heading">M.Sc. (Computer Science)</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias maiores, magni dicta explicabo quos
                    sequi
                    voluptas iste. Voluptatibus illum dicta, similique facere aspernatur ratione, accusantium nobis
                    recusandae sapiente iusto, voluptate in repellendus error alias.
                </p>
                <button class="btn-courses">Learn More...</button>

            </div>
        </div>
    </div>

    <script src="./headerFooterManager.js"></script>

</body>

</html>