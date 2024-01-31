class SpecialHeader extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `
        <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
                <img src="VDC-LOGO.svg" alt="VDC">
            </div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

        <div class="nav-links">
            <a href="./Home.php">Home</a>
            <a href="./vdcAboutus.php">About Us</a>
            <a href="./courses.php">Courses</a>
            <a href="./facilities.php">Facilities</a>
            <a href="./vdcgallery.php">Gallery</a>
            <a href="./vdc-career.php">Career</a>
            <a href="./vdc-contact.php">Contact</a>
        </div>
    </div>
        `
    }
}
customElements.define('specia-header',SpecialHeader)

class SpecialIconBar extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `
        <div class="icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
        `
    }
}

customElements.define('special-icon-bar', SpecialIconBar);

class SpecialFooter extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `<footer class="new_footer_area bg_color">

        <div class="footer_container">
            <div class=" footer-1 footerlogo">
                <img src="VDC-LOGO.svg" alt="">
            </div>
            <div class="footer-1 adderss">
                <h4 class="footerheading">Address</h4>
                <p class="footer-address"><b>Lane Opp. B.J.P. Office & Kukatpally Busstop, Kukatpally, Hyderabad -
                        500072</b></p><br>

                <a class="footercontent" href="tel:9394068321" class="footertext"><b>93940 68321</b></a><br>
                <a class="footercontent" href="tel:040-40116098" class="footertext"><b>040-4011 6098</b></a><br>
                <a class="footercontent" href="#" class="footertext"><b>vdckukatpally@gmail.com</b></a>
            </div>

            <div class="footer-1 products">
                <h4 class="footerheading">Quick Links</h4>
                <a class="footercontent" href="#" class="footertext"><b>&gt; Courses</b> </a><br>
                <a class="footercontent" href="#" class="footertext"><b>&gt; Facilities</b></a><br>
                <a class="footercontent" href="#" class="footertext"><b>&gt; Gallery</b></a>
            </div>


            <div class="footer-1 about">
                <h4 class="footerheading">Courses</h4>
                <p class="clickable-element" onclick="toggleList1()"><b>&gt; U.G Courses</b> </p>
                <ul class="hidden-list" id="myList1">
                    <li><a class="footercontent" href="">B.A</a></li>
                    <li><a class="footercontent" href="">B.B.A</a></li>
                    <li><a class="footercontent" href="">B.Com</a></li>
                    <li><a class="footercontent" href="">B.Sc</a></li>
                </ul>

                <p class="clickable-element" onclick="toggleList2()"><b>&gt; P.G Courses</b> </p>
                <ul class="hidden-list" id="myList2">
                    <li><a class="footercontent" href="">M.Com</a></li>
                    <li><a class="footercontent" href="">M.Sc</a></li>
                    <li><a class="footercontent" href="">M.Sc</a></li>
                </ul>
            </div>
            <div class="footer-1 gmaps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d243553.4722390783!2d78.413125!3d17.48253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91a4e8e98e37%3A0x6e51dc8fd01e7f2a!2sVivekananda%20Degree%20College!5e0!3m2!1sen!2sin!4v1705918805307!5m2!1sen!2sin"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>


    </footer>

        `
    }
}

customElements.define('special-footer', SpecialFooter);