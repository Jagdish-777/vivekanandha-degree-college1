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
            <a href="#">About Us</a>
            <a href="./courses.php">Courses</a>
            <a href="./facilities.php">Facilities</a>
            <a href="#">Gallery</a>
            <a href="#">Career</a>
            <a href="#">Contact</a>
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