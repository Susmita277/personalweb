<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Site</title>
    <script src="https://kit.fontawesome.com/04158e9780.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Frontend/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="mainnav-section container">
        <div class ="mainnav adjust-width">
            <div class="logo"><img src="{{ asset('Frontend/images/Vista Logos/logo_pweb_inPixio.png') }}"
                    alt="Logo"></div>
            <div class="socialmedia-links">
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">/ Instragram</a></li>
                    <li><a href="#">/ Github</a></li>
                </ul>
            </div>
        </div>
    </div>
    @yield('content')
    <div class="footer-section container">
        <div class ="footer adjust-width">
            <div id="copyright">&copy;
            </div>
            <div class="socialmedia-links-icon">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
     @yield('script')
    <script src="{{ asset('Frontend/script.js') }}"></script>

</body>
