<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side bar</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-size: 16px;
            background-color: rgb(228, 228, 228);
        }
        #side-nav-bar{
            margin-top: 20px;
            margin-left: 10px;
            max-width: 250px;
            background-color: gray;
            border: 1px solid black;
            border-radius: 10px;
            height: 90vh;

            display: flex;
            
        }
        #side-nav-bar .menu-heading{
            width: 100%;
            align-items: center;
        }
        
    </style>
</head>
<body>

    <nav id="side-nav-bar">
        <div class="menu-heading">
            Dashboard
        </div>
        <ul>
            <li><a href="!">Home</a></li>
            <li><a href="!">About Us</a></li>
            <li><a href="!">Courses</a></li>
            <li><a href="!">Gallery</a></li>
            <li><a href="!">Career</a></li>
            <li><a href="!">Contact</a></li>
        </ul>


    </nav>
    
</body>
</html>