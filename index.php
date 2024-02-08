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
    <style>
        .container-1 {
            padding: 0 40px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            overflow: hidden;
            background-color: var(--navigation-background);
            /* margin-bottom: 30px; */
        }

        .container-1 {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        @media (max-width:800px){
            .container-1{
                flex-direction: column;
            }
        }

        section.enquery-form-home {
            padding: 20px 0px;
        }

        .enquery-form {
            background-color: var(--navigation-background);
        }
        #container-card-heading{
            background-color: var(--navigation-background);
        }
        .About-home-container{
            background-color: var(--navigation-background);
        }
        .home-logos-slider{
            padding: 10px;
        }
        .btn a{
            color: white;
            text-decoration: none;
        }
        .icon-bar a{
            display: none;
        }
        .icon-bar .block{
            display: block;
        }
        .arrow{
            color: white;
            background-color: #e30505;
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;

        }
    </style>


</head>

<body>

    <specia-header></specia-header>
    <div class="scroll-admission-section">
        <a href="./admissions.php">
            <h1>Admissions are in progress - <span class="auto-type"></span></h1>
        </a>
    </div>

    <!-- slider home page  -->
    <div class="slideshow-container">
        <div class="mySlides fade">

            <img src="./images/Home/slider/slider1.jpg" style="width:100%">
            <div class="text"></div>
        </div>
        <div class="mySlides fade">

            <img src="./images/Home/slider/slider2.jpg" style="width:100%">
            <div class="text"></div>
        </div>
        <div class="mySlides fade">

            <img src="./images/Home/slider/slider3.jpg" style="width:100%">
            <div class="text"></div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <!-- <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> -->

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
                    Vivekananda Degree College has carved a niche for itself over a period of two decades. Our
                    relentless effort in imparting quality education through participatory teaching methodologies and
                    pedagogical tools helped in chiseling personality of students.
                </p>
                <button class="btn">
                    <a href="./vdcAboutus.php">Read More</a>
                </button>

            </div>
        </div>
    </section>

    <!-- The social media icon bar -->
    <!-- <specia-Icon-Bar></specia-Icon-Bar> -->
    <!-- <special-icon-bar></special-icon-bar> -->
    <div class="icon-bar">
        <i class="fa fa-arrow-right arrow" aria-hidden="true"></i>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
    <!-- <div class="icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div> -->

    <!-- cards section homepage  -->
    <h1 id="container-card-heading">Our Key People:</h1>
    <div class="container-1">
        <div class="card">
            <div class="img">
                <img src="./images/about/knImage.jpeg">
            </div>
            <div class="top-text">
                <div class="name">
                    Dr. K. Naresh
                </div>
                <p>
                    Chairman's Message
                </p>
            </div>
            <div class="bottom-text">
                <!-- <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci
                    reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div> -->
                <div class="btn1">
                    <a href="./vdcAboutus.php#chairman-msg">Read more</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="./images/about/knwifeimage.jpeg">
            </div>
            <div class="top-text">
                <div class="name">
                    Smt. Lavanya Naresh
                </div>
                <p>
                    Correspondent's Message
                </p>
            </div>
            <div class="bottom-text">
                <!-- <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci
                    reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div> -->
                <div class="btn1">
                    <a href="./vdcAboutus.php#correspondent-msg">Read more</a>
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

    <div class="home-logos-slider">
        <h1>Our Key Recuruting Companies:</h1>
        <div class="logo-slide">
            <img src="./images/company-logo/amazon-logo.png" alt="No Source">
            <img src="./images/company-logo/capgemini-logo-2017.svg" alt="No Source">
            <img src="./images/company-logo/cognizant.svg" alt="No Source">
            <img src="./images/company-logo/cytel.svg" alt="No Source">
            <img src="./images/company-logo/deloitte.svg" alt="No Source">
            <!-- <img src="./images/company-logo/hdfc-bank-logo.svg" alt="No Source"> -->
            <img src="./images/company-logo/ibm.svg" alt="No Source">
            <img src="./images/company-logo/itc-infotech.svg" alt="No Source">
            <img src="./images/company-logo/tcs-seeklogo.svg" alt="No Source">
            <img src="./images/company-logo/wells-fargo.svg" alt="No Source">
        </div>
        <div class="logo-slide">
            <img src="./images/company-logo/amazon-logo.png" alt="No Source">
            <img src="./images/company-logo/capgemini-logo-2017.svg" alt="No Source">
            <img src="./images/company-logo/cognizant.svg" alt="No Source">
            <img src="./images/company-logo/cytel.svg" alt="No Source">
            <img src="./images/company-logo/deloitte.svg" alt="No Source">
            <!-- <img src="./images/company-logo/hdfc-bank-logo.svg" alt="No Source"> -->
            <img src="./images/company-logo/ibm.svg" alt="No Source">
            <img src="./images/company-logo/itc-infotech.svg" alt="No Source">
            <img src="./images/company-logo/tcs-seeklogo.svg" alt="No Source">
            <img src="./images/company-logo/wells-fargo.svg" alt="No Source">
        </div>
    </div>

    <special-footer></special-footer>

    <!-- <script>
        let nav = document.querySelector("nav");
        window.onscroll = function () {
            if (document.documentElement.scrollTop > 20) {
                nav.classList.add("sticky");
            } else {
                nav.classList.remove("sticky");
            }
        }
    </script> -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".auto-type", {
            strings: ["Enquire Now (DOST College Code: 11250)"],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        })
        let arrow = document.querySelector('.arrow');
        let anchorAll1 = document.querySelector('.facebook');
        let anchorAll2 = document.querySelector('.twitter');
        let anchorAll3 = document.querySelector('.google');
        let anchorAll4 = document.querySelector('.linkedin');
        let anchorAll5 = document.querySelector('.youtube');

        arrow.addEventListener('click', ()=>{
            anchorAll1.classList.toggle('block');
            anchorAll2.classList.toggle('block');
            anchorAll3.classList.toggle('block');
            anchorAll4.classList.toggle('block');
            anchorAll5.classList.toggle('block');

        })

    </script>
    <script src="./headerFooterManager.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>