<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vdc-contact.css">
    <title>Contact Us</title>
</head>
<body>
<specia-header></specia-header>
<!-- top section  -->
<div class="top-bar-section">
        <img src="./images/Courses/background-courses.png" alt="No Image">
        <h1 class="top-bar-heading">
            Contact Us
        </h1>
    </div>

    <section class="sect1">
        <div class="part1"><!----flex------>
            <div class="col1-part1"><!------flex------>
                <div class="heading">
                    <h1>Contact</h1>
                    <p>We value your feedback and strive to provide the best possible support to our students, parents, and community members. Your input is invaluable to us.</p>
                </div>
                <!------division of icons ------>
                <div class="social-media-flex-3"><!---flex-->
                    <div class="contact-container">
                        <div class="phone-icon-container">
                          <i class="fa-solid fa-phone"></i>
                        </div>
                
                        <div class="contact-info">
                            <h6>Call us</h6>
                            <p>040 40116098</p>
                        </div>
                    </div>
                    <div class="gmail-container">
                        <div class="gmail-icon-container">
                          <i class="fa-solid fa-envelope"></i>
                        </div>
                
                        <div class="contact-info">
                          <h6>Email us</h6>
                          <p>vdckukatpally@gmail.com</p>
                        </div>
                    </div>
                    <div class="social-container">
                      <div class="follow-icon-container">
                        <i class="fa-solid fa-plus"></i>
                      </div>
                      <div class="contact-info">
                        <h6>Follow us</h6>
                        <div class="icons-row-flex">
                          <div class="flex-icon">
                            <a href="https://www.facebook.com/nareshkoradalaofficial/" target="_blank"><i class="fa-brands fa-facebook"></i></a> <!-- Facebook -->
                          </div>
                          <div class="flex-icon">
                            <a href="https://www.instagram.com/naresh_koradala/" target="_blank"><i class="fa-brands fa-instagram"></i></a> <!-- Instagram -->
                          </div>
                          <div class="flex-icon">
                            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fnareshkoradala1" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a> <!-- Twitter -->
                          </div>
                          <div class="flex-icon">
                            <a href="https://www.youtube.com/@NareshKoradala" target="_blank"><i class="fa-brands fa-youtube"></i></a> <!-- YouTube -->
                          </div>
                        </div>
                      </div>
                    </div>                
                </div>
            </div>
            <div class="col2-part1 "><!----flex---->
                <div class="heading2">
                    <h2>Student Inquire Form</h2>
                    <div class="contact-form">
                        <form action="submit_form.php" method="post">
                            <label for="name" class="required">Name:</label>
                            <input type="text" id="name" name="name" required>
            
                            <label for="email" class="required">Email:</label>
                            <input type="email" id="email" name="email" required>
            
                            <label for="subject" class="required">Subject:</label>
                            <input type="text" id="subject" name="subject" required>
            
                            <label for="message" class="required">Message:</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                        </form>
                    </div>
                    <div class="submit-button">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect2">
        <div class="maps"><!-----flex------>
            <div class="maps-window"><!---flex---->
              <div class="maps-window2"><!----flex---->
                    <div class="header-of-map">
                        <h2>Our Location</h2>
                    </div>
                    <div class="address-map-location">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d121776.73611953916!2d78.413125!3d17.48253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91a4e8e98e37%3A0x6e51dc8fd01e7f2a!2sVivekananda%20Degree%20College!5e0!3m2!1sen!2sus!4v1706162296350!5m2!1sen!2sus" 
                      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
                    </div>
              </div>
            </div>
        </div>
    </section>

    <special-footer></special-footer>
    <!-- <section class="sect3">
        <div class="footer">
            <h4>@Copyright 2024 — Vivekanand Degree College. All rights reserved.</h4>
        </div>
    </section> -->

    <script src="./headerFooterManager.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>