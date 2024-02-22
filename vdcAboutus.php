<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VDC Aboutus</title>
    <link rel="icon" href="VDC-LOGO.svg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="vdcAboutus.css">
    <style>
        .Principal_info{
            margin-left: 15px;
        }
    </style>
</head>

<body>
    
<specia-header></specia-header>
<!-- top section  -->
    <div class="top-bar-section">
        <img src="./images/Courses/background-courses.png" alt="No Image">
        <h1 class="top-bar-heading">
            About Us
        </h1>
    </div>
    <!-- Origin of the college -->

    <div class="vdcabout">
        <h1>THE ORIGIN OF THE COLLEGE</h1>
        <P>Vivekananda Degree & P.G. College was established in 2005 to promote quality, modern and technical education
            attend to the needs
            of changing times under the esteemed management of the Noble Group of Modern Institutions. The college
            strives to provide
            opportunities to students to realize their potential in curricular and extra curricular activities and
            actualize their
            aspirations in life. Our College is named after a great ascetic Swami Vivekananda, who rocked entire world
            with his
            austerity and over inspiring sayings which still echo in the deep corners of the hearts of the people.</P>

    </div>

    <!-- school misson and vision tagline -->

    <div class="school_tagline">
        <div class="school_vision_tagline">
            <h2>“Your Vision of the future, is our Mission today.”</h2>
        </div>
    </div>

    <!-- school misson and vision  -->
    <?php
    include("./admin/connections/dbconnect.php");

    $about_query = "SELECT * FROM `aboutus` WHERE `id` = 1";
    $about_res = mysqli_query($con,$about_query);

    foreach($about_res as $row => $header){

    ?>

    <div class="school_misson">
        <div class="misson_pic">
            <img src="./images/about/<?= $header['mission_image']?>" alt="">
        </div>
        <div class="misson_content">
            <h1>Our Mission</h1>
            <p><?= $header['our_mission']?></p>
            <!-- <p>At Vivekananda Degree and P.G. College, our mission is to empower minds, nurture brilliance, and
                cultivate leaders of tomorrow. We are committed to
                providing quality education, fostering holistic development, and instilling values that inspire
                excellence. Through innovative teaching and a vibrant learning environment,
                we aim to shape individuals who contribute meaningfully to society and make a positive impact on the
                world.</p> -->
        </div>
    </div>

    <div class="school_vision">
        <div class="vision_content">
            <h1>Our Vision</h1>
            <p><?= $header['our_vision']?></p>
            <!-- <p>Our Vision at Vivekananda Degree and P.G. College is to empower students with holistic education,
                fostering intellectual growth,
                ethical values, and leadership skills. We aspire to create a dynamic learning environment that nurtures
                curiosity, innovation,
                and global perspectives. Committed to excellence, we aim to shape individuals who contribute
                meaningfully to society,
                embodying Swami Vivekananda's ideals of knowledge, compassion, and service.</p> -->
        </div>
        <div class="vision_pic">
            <img src="./images/about/<?= $header['vision_image']?>" alt="">
        </div>
    </div>

    <special-icon-bar></special-icon-bar>

    <!-- Principal Details -->
    <div class=" Principal_Details">

        <div class="principal" id="chairman-msg">
            <div class="Principal_info">
                <div>
                    <h2>CHAIRMAN'S MESSAGE</h2>
                    <p><?= $header['chairman_message']?></p>
                    <!-- <p>In the twilight Zone of life's National average, if iam asked "what is my drive to be centenarian
                        batsman" My answer is,
                        "In the inning I have played so far, I was bowled, caught behind LBW, Run out and all that, yet
                        I played the game for my living, the drive was not
                        survival but seeking 'Knowledge, for myself, for my society and for my nation. <br>

                        On medium which I understood for acquisition and distribution of knowledge is GRADUATION. Our
                        nation needs graduation of value,
                        today more than any other time in history. The graduation Education has its price, it is
                        inevitable but it should be based on value too.
                        We at Vivekananda Degree & P.G. College affiliated to Osmania University are creating a blend of
                        the two and offering it at an affordable prices to the students.</p> -->
                    <p class="names"> <b>Dr. K. Naresh </b> <sub>M.A, Ph.D</sub></p>
                </div>
            </div>


            <div class="Practice_img">
                <img src="./images/about/<?= $header['chairman_image']?>" alt="">
            </div>
        </div>


        <div class="principal principal2" id="correspondent-msg">

            <div class="Principal_info">
                <div>
                    <h2>CORRESPONDENT'S MESSAGE</h2>
                    <p><?= $header['correspondent_message']?>
                        <br> <br>
                        <i> "Making A student Is Making A Society Implies World"</i>
                    </p>
                    <p class="names"> <b>Smt. Lavanya Naresh </b> <sub>M.Sc(Bio-Tech)</sub></p>
                </div>
            </div>
            <div class="Practice_img">
                <img src="./images/about/<?= $header['correspondent_image']?>" alt="">
            </div>

        </div>
        <?php } ?>
    </div>


    <special-footer></special-footer>

    <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
        integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script src="vdcaboutus.js"></script>
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

        arrow.addEventListener('click', () => {
            anchorAll1.classList.toggle('block');
            anchorAll2.classList.toggle('block');
            anchorAll3.classList.toggle('block');
            anchorAll4.classList.toggle('block');
            anchorAll5.classList.toggle('block');

        })

    </script>
    

    <script src="./headerFooterManager.js"></script>
</body>

</html>