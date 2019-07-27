<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/destination.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/boxslide.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/detail.css')}}">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
    <style>
        .backgrounds {
            width: 100%;
            height: 100vh;
            display: flex;
        }

        .texts {
            width: 35%;
            height: 100vh;

        }

        .options {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .options form {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            padding-top: 10vh;
            align-items: flex-start;
            padding: 6vw 5vw 0;
        }

        .location {
            width: 100%;
            height: auto;
            margin: 10px 0;
        }

        .find {
            width: 30%;
        }

        input:focus {
            outline: none;
        }

        .slideshow-container {

            width: 65%;
            height: 100vh;
            position: relative;
            margin: auto;
            transition: 2s all;
            overflow: hidden;
        }

        .form-head {
            font-size: 22px;
            color: #555555;
            letter-spacing: 2px;
            line-height: 1.7;
            padding-bottom: 15px;
        }

        .locations {
            width: 100%;
            margin: 10px 0;
        }

        .slider {
            -webkit-appearance: none;

            width: 100%;
            height: 5px;
            border-radius: 5px;
            background-color: #f0a184;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
            margin-top: 15px;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: rgb(184, 187, 140);
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            background: rgb(135, 143, 24);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="nav">
        <div class="nav-bar">
            <div class="logo">
                <a href="{{route('index')}}"><img src="{{asset('image/spark.jpg')}}"></a>
            </div>
            <div class="menu-items">
                <ul id="myTopnav">
                    <li class="menu-item"><a href="{{route('blog')}}">Blog</a></li>
                    <li class="menu-item"><a href="{{route('destination')}}">Destination</a></li>
                    <li class="menu-item">Itineary</li>
                    <li class="menu-item"><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

    <footer>
        <div class="footer">
            <div class="about-us">
                <div class="about-title">About Us</div>
                <div class="about-description">
                    Our tour agency is the leading provider of cheap air tickets as well as amazing offers for tourists
                    and people who like to explore the untraveled world paths. We can create the most unforgettable
                    holiday for you, your family, and friends!
                </div>
            </div>
            <div class="contact-information">
                <div class="about-title">Contact Information</div>
                <div class="contact-place">
                    <i class="material-icons">place</i>
                    <span>2130 Fulton Street San Diego</span>
                </div>
                <div class="contact-place">
                    <i class="material-icons">call</i>
                    <span>01-1234567</span>
                </div>
                <div class="contact-place">
                    <i class="material-icons">email</i>
                    <span>info@sparktravel.org</span>
                </div>
            </div>
            <div class="news">
                <div class="about-title">Newsletter</div>
                <div class="about-description">Sign up to our newsletter and be the first to know about the latest news, special offers, events, and discounts.</div>
                <div class="subscribe">
                    <input type="text" placeholder="Email">
                    <i class="material-icons">email</i>
                </div>
            </div>
        </div>
        <div class="footer-logo">
            <div><img src="{{asset('image/spark.jpg')}}"></div>
            <div>© 2019 All Rights Reserved. Privacy Policy</div>
        </div>
    </footer>
</body>
<script src="{{asset('js/slider.js')}}"></script>
<script src="{{asset('js/hour.js')}}"></script>
<!-- bootstrap link -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>