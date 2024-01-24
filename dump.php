<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .top-section{
            background-color: rgb(185, 184, 184);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .top-section .logo img{
            width: 100px;
            height: auto;
            margin-left: 10px;
        }
        .top-section .navigation-menu ul{
            display: flex;
            text-decoration: none;
            list-style-type: none;
        }
        .top-section .navigation-menu ul li{
            text-align: center;
            padding: 10px;
            margin: 10px;
            font-size: 16px;
        }
        .top-section .navigation-menu ul li:hover{
            background-color: white;
            font-size: 24px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px grey;
        }

    </style>
</head>
<body>
    <header class="top-section">
        <div class="logo">
            <img src="VDC-LOGO.svg" alt="LOGO">
        </div>
        <div class="navigation-menu">
            <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Courses</li>
                <li>Careers</li>
                <li>Contact Us</li>
            </ul>
        </div>
    </header>
    
</body>
</html>