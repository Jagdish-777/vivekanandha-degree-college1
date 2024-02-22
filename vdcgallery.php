<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="icon" href="VDC-LOGO.svg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="vdcgallery.css">
    <style>
        .container-gallery {
            padding: 40px 0px;
        }
    </style>
</head>
<body>

<specia-header></specia-header>
<!-- top section  -->
<div class="top-bar-section">
        <img src="./images/Courses/background-courses.png" alt="No Image">
        <h1 class="top-bar-heading">
            Gallery
        </h1>
    </div>

    <input type="radio" name="photos" id="check1" checked>
    <input type="radio" name="photos" id="check2" >
    <input type="radio" name="photos" id="check3" >
    <input type="radio" name="photos" id="check4" >

    <div class="container-gallery">
        <h1>OUR PHOTO GALLERY</h1>
        <div class="top-content">
            <h3>Photo Gallery</h3>
            <label for="check1">All Photos</label>
            <label for="check2">Events</label>
            <label for="check3">Workshops</label>
            <label for="check4">Annual day</label>

        </div>

        <div class="photo-gallery">
        <?php
            include("./admin/connections/dbconnect.php");

            $gallery_query = "SELECT * FROM `gallery` WHERE `name` = 'Events'";
            $gallery_res = mysqli_query($con,$gallery_query);

            foreach($gallery_res as $row => $header){

            ?>
            <div class="pic Events">
                <img src="./images/gallery/<?=  $header['image']   ?>" alt="">
            </div>
            <!-- <div class="pic Events">
                <img src="./images/gallery/slider2.jpg" alt="">
            </div>
            <div class="pic Events">
                <img src="./images/gallery/slider3.jpg" alt="">
            </div>
            <div class="pic Events">
                <img src="./images/gallery/slider4.jpg" alt="">
            </div>
            <div class="pic Events">
                <img src="./images/gallery/slider5.jpg" alt="">
            </div> -->
            <?php } ?>
            <?php

            $gallery_query = "SELECT * FROM `gallery` WHERE `name` = 'Workshops'";
            $gallery_res = mysqli_query($con,$gallery_query);

            foreach($gallery_res as $row => $header){

            ?>
            <div class="pic Workshops">
                <img src="./images/gallery/<?=  $header['image']   ?>" alt="">
            </div>
            <!-- <div class="pic Workshops">
                <img src="./images/gallery/slider7.jpg" alt="">
            </div>
            <div class="pic Workshops">
                <img src="./images/gallery/slider8.jpg" alt="">
            </div>
            <div class="pic Workshops">
                <img src="./images/gallery/slider9.jpg" alt="">
            </div>
            <div class="pic Workshops">
                <img src="./images/gallery/slider10.jpg" alt="">
            </div> -->

            <?php } ?>
            <?php

            $gallery_query = "SELECT * FROM `gallery` WHERE `name` = 'Annual'";
            $gallery_res = mysqli_query($con,$gallery_query);

            foreach($gallery_res as $row => $header){

            ?>
            <div class="pic Annual">
                <img src="./images/gallery/<?=  $header['image']   ?>" alt="">
            </div>
            <!-- <div class="pic Annual">
                <img src="./images/gallery/slider12.jpg" alt="">
            </div>
            <div class="pic Annual">
                <img src="./images/gallery/slider13.jpg" alt="">
            </div>
            <div class="pic Annual">
                <img src="./images/gallery/slider14.jpg" alt="">
            </div>
            <div class="pic Annual">
                <img src="./images/gallery/slider15.jpg" alt="">
            </div>
            <div class="pic Annual">
                <img src="./images/gallery/slider16.jpg" alt="">
            </div> -->
            <?php } ?>
        </div>

    </div>
    <special-icon-bar></special-icon-bar>
    <special-footer></special-footer>
    <script src="./headerFooterManager.js"></script>
    <script src="./js/app.js"></script>

</body>
</html>