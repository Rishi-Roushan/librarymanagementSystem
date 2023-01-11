<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>

    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("backgroundimage.jpg");

        min-height: 735px;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: -1;
        /* Needed to position the navbar */
        position: relative;
    }

    * {
        box-sizing: border-box;
    }


    /* Position the navbar container inside the image */
    .container {
        position: absolute;
        margin: 20px;
        width: 1470px;
    }

    /* The navbar */
    .topnav {
        overflow: hidden;
        background-color: lightgreen;
    }

    /* Navbar links */
    .topnav a {
        float: left;
        color: seagreen;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 350px;
        height: 200px;

        margin-left: 40px;
    }

    img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
    </style>
</head>

<body>

    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <a href="#home">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
                <a href="#contact">Books</a>

            </div>
        </div>
    </div>
    <div>
        <img src="book1.jpg" style="width:250px; margin-top: 120px;">
        <img src="book2.jpg" style="width:250px; margin-top: 120px; ">
        <img src="book3.jpg" style="width:250px; margin-top: 120px;">
        <img src="book4.jpg" style="width:250px; margin-top: 120px;">
        <img src="book5.jpg" style="width:250px; margin-top: 120px;">
    </div>
    <div>
        <img src="book6.jpg" style="width:250px; margin-top: 120px;">
        <img src="book7.jpg" style="width:250px; margin-top: 120px;">
        <img src="book8.jpg" style="width:250px; margin-top: 120px;">
        <img src="book9.jpg" style="width:250px; margin-top: 120px;">
        <img src="book10.jpg" style="width:250px; margin-top: 120px;">
    </div>
    <footer>
        <h5>the website belongs to a private company</h5>
        <p>Copyright &copy; Rishi Roushan</p>
    </footer>
</body>

</html>