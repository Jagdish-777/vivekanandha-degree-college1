<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-size: 16px;
            background-color: #f2e8cb;
            background-color: white;
        }

        .menu-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;

            width: 95%;
            height: 50px;
            background-color: #F6924F;
            background-color: black;
            color: white;
            border-radius: 10px;
            box-shadow: 0px 10px 5px -5px rgba(0, 0, 0, 0.71);
            /* margin-bottom: 10px auto; */
            margin: 5px auto;
            padding: 0px 10px;

            font-size: 1.5rem;
        }

        .menu-heading i {
            padding: 10px;
            width: 10px;
        }

        #main-container {
            display: flex;

        }


        .side-nav-bar {
            margin-top: 20px;
            margin-left: 10px;
            max-width: 250px;
            /* width:30%; */
            background-color: gray;
            /* background-color: #F6924F; */
            border: 1px solid black;
            border-radius: 10px;
            height: 100vh;

            display: none;
            /*display: flex;*/
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;

            box-shadow: 5px 5px 5px black;

            /* opacity: 0;
            visibility: hidden; */
            transition: all 1s ease-in-out;
        }

        .visible {
            display: block;
            opacity: 1;
            visibility: visible;

        }

        #side-nav-bar ul {
            list-style-type: none;
            width: 100%;
            width: 240px;
            /* width:30%; */
        }

        #side-nav-bar ul li {
            width: 100%;
            /* width: 240px; */
            /* text-align: center; */
            font-size: 1.2rem;
            padding-top: 10px;
            padding-left: 20px;
            margin-bottom: 10px;
            /* box-shadow: 1px 1px 5px 5px rgba(0,0,0,0.71); */
            border-radius: 5px;
            color: black;
            transition: all 0.4s ease-in-out;
            gap: 20px;
        }

        #side-nav-bar ul li a {
            color: black;
            text-decoration: none;
            /* border: 1px solid black; */
            width: 100%;
            padding: 10px;
            text-align: center;
        }

        #side-nav-bar ul li:hover {
            color: white !important;
            border-radius: 10px;
        }

        #side-nav-bar ul li a:hover {
            color: white;
        }

        .sub-menu-1 {
            background-color: grey;
            border-radius: 10px;
            height: 0;


            /* display: none;
            */
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .visible-1 {
            /* display: flex !important;
            */
            padding: 10px !important;
            opacity: 1 !important;
            visibility: visible !important;
            height: auto;
        }

        .rotate {
            transform: rotate(180deg);
            transition: transform 0.3s ease;
            /* Add transition for smooth rotation */
        }

        #main-container .right-content-container {
            margin: 20px;
            padding: 10px;
            border: 10px;
            /* min-width: 70%;
            max-width: 100%; */
            width: 100%;
            border: 1px solid black;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="menu-heading">
        <i class="fa-solid fa-bars" id="burger-icon"></i>
        <div class="mid-main-heading-section">
            Dashboard
        </div>
        <div class="right-main-heading-section">
            Username
        </div>
    </div>

    <div id="main-container">
        <nav id="side-nav-bar" class="side-nav-bar">
            <ul>
                <li onclick="dropdown1(event)"><a href="sidebar.php?courses">Home</a><i
                        class="fa-solid fa-chevron-down" id="sub-drop-down"></i>
                    <div class="sub-menu-1">
                        <ul>
                            <li><i class="fa-solid fa-plus"></i> <a href="#">View Home</a></li>
                            <li><i class="fa-solid fa-bars-staggered"></i> <a href="Edit Home">Edit Home</a>
                            <li>
                        </ul>
                    </div>
                </li>
                <li onclick="dropdown1(event)"><a href="!">About Us</a><i class="fa-solid fa-chevron-down"
                        id="sub-drop-down"></i>
                    <div class="sub-menu-1">
                        <ul>
                            <li><i class="fa-solid fa-plus"></i> <a href="#">View About Us</a></li>
                            <li><i class="fa-solid fa-bars-staggered"></i> <a href="Edit Home">Edit About Us</a>
                            <li>
                        </ul>
                    </div>
                </li>
                <li onclick="dropdown1(event)"><a href="!">Courses</a><i class="fa-solid fa-chevron-down"
                        id="sub-drop-down"></i>
                    <div class="sub-menu-1">
                        <ul>
                            <li><i class="fa-solid fa-plus"></i> <a href="#">View Courses</a></li>
                            <li><i class="fa-solid fa-bars-staggered"></i> <a href="Edit Home">Edit Courses</a>
                            <li>
                        </ul>
                    </div>
                </li>
                <li onclick="dropdown1(event)"><a href="!">Gallery</a><i class="fa-solid fa-chevron-down"
                        id="sub-drop-down"></i>
                    <div class="sub-menu-1">
                        <ul>
                            <li><i class="fa-solid fa-plus"></i> <a href="#">View Gallery</a></li>
                            <li><i class="fa-solid fa-bars-staggered"></i> <a href="Edit Home">Edit Gallery</a>
                            <li>
                        </ul>
                    </div>
                </li>
                <li onclick="dropdown1(event)"><a href="!">Career</a><i class="fa-solid fa-chevron-down"
                        id="sub-drop-down"></i>
                    <div class="sub-menu-1">
                        <ul>
                            <li><i class="fa-solid fa-plus"></i> <a href="#">View Career</a></li>
                        </ul>
                    </div>
                </li>
                <li onclick="dropdown1(event)"><a href="!">Contact</a><i class="fa-solid fa-chevron-down"
                        id="sub-drop-down"></i>
                    <div class="sub-menu-1">
                        <ul>
                            <li><i class="fa-solid fa-plus"></i> <a href="#">View Contact</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="right-content-container">
            <?php
            include('./includes/connect.php');
            if(isset($_GET['courses'])){
                include('courses.php');
            }else{
                echo "<h1>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam facere vero eius, quas
                    accusamus eligendi atque libero dignissimos, dolore at sapiente inventore voluptas consectetur.</h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde molestiae dicta officia totam, eos expedita
                    recusandae veniam incidunt praesentium quaerat architecto, ullam quis? Sapiente nostrum excepturi
                    praesentium vitae. Nostrum culpa mollitia tenetur autem minus.</p>";
            }


            ?>
            <!--<h1>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam facere vero eius, quas
                accusamus eligendi atque libero dignissimos, dolore at sapiente inventore voluptas consectetur.</h1>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde molestiae dicta officia totam, eos expedita
                recusandae veniam incidunt praesentium quaerat architecto, ullam quis? Sapiente nostrum excepturi
                praesentium vitae. Nostrum culpa mollitia tenetur autem minus.</p> -->
        </div>
    </div>


    <script>
        //accessing the elements
        let burgerIcon = document.getElementById('burger-icon');
        let sideMenu = document.getElementById('side-nav-bar');

        burgerIcon.addEventListener('click', () => {
            sideMenu.classList.toggle('visible');
            // Toggle the 'fa-bars' class
            burgerIcon.classList.toggle('fa-bars');
            // Toggle the 'fa-xmark' class
            burgerIcon.classList.toggle('fa-xmark');
        });

        let downarrow = document.getElementById('sub-drop-down');
        let sideDropMenu = document.querySelector('.sub-menu-1');

        function dropdown1(event) {
            let listItem = event.currentTarget;

            let subMenu = listItem.querySelector('.sub-menu-1');

            // Toggle visibility of the submenu
            subMenu.classList.toggle('visible-1');

            // Toggle the rotation class for the chevron icon inside the clicked list item
            let downArrow = listItem.querySelector('.fa-chevron-down');
            downArrow.classList.toggle('rotate');
        }

    </script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- CKEditor Script -->
    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedlist', 'outdent', 'indent', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>