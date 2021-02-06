<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $meta_title ?></title>
    <meta name="description" content="IAESTE Ghana is an initiative to help continuous students mainly in STEM field. IAESTE focuses on providing the most efficient environment or atmosphere as the place to explore. We help students build up concepts in different working environments or countries that include Germany, Poland, UK, Spain, Switzerland, Serbia, Iran, Nigeria, Brazil, Tanzania and many more.">
    <meta name="keywords" content="IAESTE Ghana, iaesteghana">
    <meta name="author" content="Charity Darko">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="public/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="public/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="public/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="public/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="public/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="public/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="public/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="public/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/home.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/students.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/contact.css" />
    <!-- <link rel="stylesheet" type="text/css" href="public/assets/css/about.css" />
    
    <link rel="stylesheet" type="text/css" href="public/assets/css/employers.css" />
     -->
</head>
<body>
    <header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light hbg shadow fixed-top">
        <div class="container">
        <a class="navbar-brand" href="home">
            <img src="public/assets/images/logo-iaeste.png" width="70%" height="70%" alt="iaeste-ghana-logo">
        </a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="students">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="employers">Employers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="contact">Contact</a>
            </li>
            <li class="nav-item search-bar">
                <div class="input-group">
                <input type="text" class="form-control search-input">
                <div class="input-group-append">
                    <button class="btn btn-secondary search-button" type="button">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
            </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    </header>

    <div class="main">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">IAESTE Ghana is an initiative to help continuous students mainly 
                in STEM field. IAESTE focuses on providing the most efficient environment or atmosphere 
                as the place to explore. We help students build up concepts in different working environments 
                or countries that include Germany, Poland, UK, Spain, Switzerland, Serbia, Iran, Nigeria, 
                Brazil, Tanzania and many more.</p>
            </div>
    
            <div class="col-xs-6 col-md-3">
            <h6>Location</h6>
            <ul class="footer-links">
                <li>Room 19</li>
                <li>Student Affairs and Finance Office</li>
                <li>Dean of Students, Commercial Area</li>
                <li>KNUST, Kumasi Campus</li>
                <li>Kumasi, Ghana</li>
            </ul>
            </div>
    
            <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
                <li><a routerLink="/about">About Us</a></li>
                <li><a routerLink="/contact">Contact Us</a></li>
                <li><a routerLink="/students">Students</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
            </div>
        </div>
        <hr>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
        <a href="http://afyacy.herokuapp.com/" target="_blank">Afyacy</a>.
            </p>
            </div>
    
            <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
                <li><a class="facebook" href="#" ><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="https://instagram.com/iaeste._knust?igshid=14b44m5pdpc1c" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
            </div>
        </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="public/assets/js/collapsible.js"></script>
    </body>
</html>