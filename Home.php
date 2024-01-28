<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="icon" href="VDC-LOGO.svg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <!-- navbar style sheet  -->
    

    <!-- about home css  -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            /* ----colors  */
            --font-hover-color: #ff7454;
            --navigation-background: #f9f9f4;
            --font-color-navigation: #c21c20;
            --nav-hover-backgroung: #bfd0e2;
            --secondary-color: #185c74;
            --black: black;
            --white: white;

        }

        body {
            font-family: Poppins;
            /* font-family: 'Jost', sans-serif; */
            font-weight: 400;
            font-style: normal;
            font-size: 16px;
            background-color: var(--nav-hover-backgroung);

        }


        .About-home-sub h1,
        .About-home-sub h2 {
            font-family: 'Jost', sans-serif;
            color: var(--black);
            margin-top: 0;
            font-style: normal;
        }

        /* .About-home-sub h1:hover, .About-home-sub h2:hover {
        color: var(--font-hover-color);
    } */

        .About-home-container {
            min-width: 100%;
            background-color: var(--nav-hover-backgroung);
            box-sizing: border-box;

        }

        .flex {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .About-home-sub {
            width: 50%;
            height: auto;
            /* border: 2px solid var(--black); */

        }

        .About-image img {
            width: 100%;
            height: auto;
            /* border: 1px solid var(--black); */
        }

        .About-home-content h2 {
            font-size: 0.8rem;
            padding: 10px 10px;
            color: var(--font-hover-color);
            text-decoration: underline;
        }

        .About-home-content h1 {
            font-size: 2rem;
            padding: 10px 10px;
        }

        .About-home-content p {
            font-size: 1rem;
            padding: 10px 10px;
        }

        .btn {
            margin-left: 10px;
            display: flex;
            align-items: center;
            font-family: inherit;
            font-weight: 500;
            font-size: 16px;
            padding: 0.7em 1.4em 0.7em 1.1em;
            color: var(--white);
            /* background: #ad5389;
        background: linear-gradient(0deg, rgba(20, 167, 62, 1) 0%, rgba(102, 247, 113, 1) 100%); */
            background: rgb(242, 212, 170);
            background: linear-gradient(131deg, rgba(242, 212, 170, 1) 0%, rgba(228, 156, 0, 1) 100%);
            border: none;
            box-shadow: 0 0.7em 1.5em -0.5em #14a73e98;
            letter-spacing: 0.05em;
            border-radius: 20em;
            cursor: pointer;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .btn:hover {
            box-shadow: 0 0.5em 1.5em -0.5em #14a73e98;
        }

        .btn:active {
            box-shadow: 0 0.3em 1em -0.5em #14a73e98;
        }


        @media only screen and (max-width: 800px) {
            .flex {
                flex-direction: column;
            }

            .About-home-sub {
                width: 90%;
                height: auto;
                margin: 10px;
                /* border: 2px solid var(--black); */

            }

            .About-home-sub img {
                border: 1px solid var(--black);
            }

        }
    </style>

    <!-- cards home page style sheet  -->
    <style>
        .container {
            padding: 0 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: var(--white);
        }

        .card {
            height: 280px;
            max-width: 350px;
            margin: 0 20px;
            background: white;
            transition: 0.4s;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .card:hover {
            height: 450px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
        }

        .card .img {
            height: 200px;
            width: 100%;
        }

        .card .img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .card .top-text {
            padding: 5px;
        }

        .card .top-text .name {
            font-size: 25px;
            font-weight: 600;
            color: #202020;
        }

        .card .top-text p {
            font-size: 20px;
            font-weight: 600;
            color: #e74c3c;
            line-height: 20px;
        }

        .card .bottom-text {
            padding: 0 20px 10px 20px;
            margin-top: 5px;
            background: white;
            opacity: 0;
            visibility: hidden;
            transition: 0.1s;
        }

        .card:hover .bottom-text {
            opacity: 1;
            visibility: visible;
        }

        .card .bottom-text .text {
            text-align: justify;
        }

        .card .bottom-text .btn1 {
            margin: 10px 0;
            text-align: left;
        }

        .card .bottom-text .btn1 a {
            text-decoration: none;
            background: #e74c3c;
            color: #f2f2f2;
            padding: 5px 8px;
            border-radius: 3px;
            display: inline-flex;
            transition: 0.2s;
        }

        .card .bottom-text .btn1 a:hover {
            transform: scale(0.9);
        }

        @media screen and (max-width: 978px) {
            .container {
                flex-wrap: wrap;
                flex-direction: column;
            }

            .card {
                max-width: 700px;
                margin: 20px 0;
            }
        }
    </style>

    <!-- sticky social bar  -->
    <!-- <style>
        /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        /* Style the icon bar links */
        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        /* Style the social media icons with color, if you want */
        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }

        .twitter {
            background: #55ACEE;
            color: white;
        }

        .google {
            background: #dd4b39;
            color: white;
        }

        .linkedin {
            background: #007bb5;
            color: white;
        }

        .youtube {
            background: #bb0000;
            color: white;
        }
    </style> -->

    <!-- student enquery section home page  -->
    <style>
        .enquery-form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: var(--nav-hover-backgroung);

        }

        .enquiry-sub {
            width: 50%;
            box-sizing: border-box;
        }

        .enquiry-sub img {
            width: 100%;
            height: auto;
        }

        .enquery-heading {
            text-align: center;
            padding: 2.8px;
            text-decoration: underline;
        }

        form {
            background-color: #fff;
            background-color: var(--nav-hover-backgroung);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 90%;
        }

        label {
            display: block;
            /* margin-bottom: 8px; */
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        @media only screen and (max-width: 800px) {
            .flex {
                flex-direction: column;
            }

            .enquiry-sub img {
                margin: 10px 0px;
            }

            .enquiry-sub {
                width: 100%;
                height: auto;
                /* border: 2px solid var(--black); */

            }

        }
    </style>
</head>

<body>

    <specia-header></specia-header>

    <!-- slider home page  -->
    <div class="slideshow-container">
        <div class="mySlides fade">
            
            <img src="./images/courses/1.jpeg" style="width:100%">
            <div class="text"></div>
        </div>
        <div class="mySlides fade">
            
            <img src="./images/courses/2.jpeg" style="width:100%">
            <div class="text"></div>
        </div>
        <div class="mySlides fade">
           
            <img src="./images/courses/1.jpeg" style="width:100%">
            <div class="text"></div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <!-- about us - home page section  -->
    <section>
        <div class="About-home-container flex">
            <div class="About-home-sub">
                <div class="About-image">
                    <img src="./images/Home/home-about-us-image.png" alt="About Image">
                </div>
            </div>
            <div class="About-home-sub About-home-content">
                <h2 class="top-about-heading">About Us</h2>
                <h1 class="middle-about-heading">
                    Vivekananda Degree & PG college
                </h1>
                <p class="paragraph-about">
                    Our College is well known for its academic excellence and overall development of the students. Some
                    other education department public relations contracts total in the hundreds of thousands of dollars.
                </p>
                <button class="btn">
                    Read more
                </button>

            </div>
        </div>
    </section>

    <!-- The social media icon bar -->
    <!-- <specia-Icon-Bar></specia-Icon-Bar> -->
    <special-icon-bar></special-icon-bar>
    <!-- <div class="icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div> -->

    <!-- cards section homepage  -->
    <div class="container">
        <div class="card">
            <div class="img">
                <img src="#">
            </div>
            <div class="top-text">
                <div class="name">
                    Dr. K. Naresh
                </div>
                <p>
                    Secretary & Correspondent
                </p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci
                    reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn1">
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="#">
            </div>
            <div class="top-text">
                <div class="name">
                    Dr. K. Naresh
                </div>
                <p>
                    Secretary & Correspondent
                </p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci
                    reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn1">
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="#">
            </div>
            <div class="top-text">
                <div class="name">
                    Dr. K. Naresh
                </div>
                <p>
                    Secretary & Correspondent
                </p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci
                    reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn1">
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
    </div>
    

    <!-- student enquery section home page  -->
    <section class="enquery-form-home">
        <div class="enquiry-container flex">
            <div class="enquiry-sub enquery-form">
                <form>
                    <h1 class="enquery-heading">
                        Student Inqure Form
                    </h1>
                    <label for="firstname">First Name<span style="color: red;">*</span></label>
                    <input type="text" id="firstname" name="firstname" required>

                    <label for="email">Email<span style="color: red;">*</span></label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Phone No<span style="color: red;">*</span></label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="courses">Select Course</label>
                    <select id="courses" name="courses">
                        <option value="BA">B.A</option>
                        <option value="BBA">BBA</option>
                        <option value="BCA">BCA</option>
                        <option value="BCom">B.Com</option>
                        <option value="BScPhysical">B.Sc(Physical Science)</option>
                        <option value="BScLife">B.Sc(Life Sciences)</option>
                    </select>

                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="enquiry-sub">
                <img src="./images/Home/enquiry-form-img-home.jpg" alt="image">
            </div>
        </div>

    </section>

    <script>
        let nav = document.querySelector("nav");
        window.onscroll = function () {
            if (document.documentElement.scrollTop > 20) {
                nav.classList.add("sticky");
            } else {
                nav.classList.remove("sticky");
            }
        }
    </script>
    <script src="./headerFooterManager.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>