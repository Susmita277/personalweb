<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Site</title>
    <script src="https://kit.fontawesome.com/04158e9780.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="top-header">
            <div class="logo">Logo</div>
            <div class="links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">My Bookings</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="profiles">
                <i class="fas fa-bars"></i>
                <i class="far fa-user"></i>
            </div>
        </div>
         <div class="second-header">
            <div class="icons-center">

            </div>
            <div class="search-bar"></div>
         </div>
    </header>
</body>

</html>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Open Sans', sans-serif;
    }

    .top-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;g
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
        color: #98FF98;

    }

    .links ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    .links ul li {
        margin-right: 20px;
    }

    .links ul li:last-child {
        margin-right: 0;
    }

    .links ul li a {
        text-decoration: none;
        /* color: #fff; */
        transition: color 0.3s ease;
    }

    .links ul li a:hover {
        color: #98FF98;
    }



    .profiles {
        font-size: 20px;
        display: flex;
        align-items: center;
        background-color: #98FF98;
        /* color: white; */
        padding: 8px;
        margin-right: 10px;
        border-radius: 30px;
        width: 80px;
        justify-content: space-between;
    }

    .profiles i {
        margin: 0 10px;
    }
</style>
