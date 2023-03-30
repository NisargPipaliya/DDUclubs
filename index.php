<?php
include("config.php");
include("signin.php");
include("signup.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">

    <link rel="shortcut icon" href="img/lg.ico" type="image/x-icon">
    <link rel="stylesheet" href="header/style.css">
    <!-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap');
    </style>
    <title>DDUCLUBS-Home</title>
</head>

<body>

    <header>
    <div class="navbar">
        <div>
            <button class="navbar-collapse" onclick="showNavbar()"><img class="collapse-icon" src="img/nav-collapse.png" alt=""></button>
            <img class="mainlogo" src="img/logo.jpg" alt="">

            <?php 
            if(!isset($_COOKIE['loggedin'])) {?>
            <a href="#" class="myButton button-heading-pos button-collapse" onclick="login()">Sign In</a>
            <?php }?>

            <?php 
                if(isset($_COOKIE['loggedin'])){
                ?>

            <a href="logout.php" class="myButton button-heading-pos button-collapse" onclick="">Sign Out</a>

            <?php } ?>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>

                <li class="nav-item"><a href="contact.php"><i class="fa fa-fw fa-user"></i>Contact</a></li>

                <li class="nav-item"><a href="">About</a></li>

                <li class="nav-item drop-menu"><a class="abc" onclick="showMenu()">Clubs▼</a> </li>

                <ul class="dropdown">
                    <li><a class="dropdown-item" href="gdsc.php" value="GSDC">GDSC DDU</a></li>
                    <li><a class="dropdown-item" href="connect.php">DDU Connect</a></li>
                    <li><a class="dropdown-item" href="csi.php">CSI DDU</a></li>
                    <li><a class="dropdown-item" href="trc.php">TRC DDU</a></li>
                    <li><a class="dropdown-item" href="shuterbugs.php">Shutterbugs DDU</a></li>
                </ul>
            </ul>
        </div>
    </div>

    </header>

    <form class="signin-form" action="index.php" method="POST">
        <div>
            <div>
                <p onclick="loginClose()" class="login-popup-close"><i class="fa fa-fw fa-close"></i></p>
            </div>
            <hr class="none">
            <div class="input-box">
                <img class="fi" src="img/user.png" alt="">
                <input type="text" name="username" id="username" placeholder="Enter username">
            </div>
            <hr class="none">
            <div class="input-box">
                <img class="fi" src="img/lock.png" alt="">
                <input class="login-password" type="password" name="password" placeholder="Enter Password">
            </div>
            <hr class="none">
            <div align="center">
                <div class="signin">
                    <button class="myButton" name="signin">Sign In</button>
                </div>
                <div class="signup">
                    <p>If don't have an account <a class="signup-link" onclick="signup()">signup</a></p>
                </div>
            </div>
        </div>
    </form>

    <!------------------- SIGN UP FORM ---------------------->
    <section>
        <form action="index.php" method=POST>
            <div class="signup-form" style="height: 570px;">
                <div class="register">
                    <p onclick="signupClose()" class="signup-popup-close">Sign-up Form </p>
                    <i onclick="signupClose()" class="fa fa-fw fa-close signup-close"></i>
                </div>
                <div>
                    <div class="fname-input">
                        <input id="First-Name" type="FirstName" name="fname" placeholder="First Name">
                    </div>
                    <div class="lname-input">
                        <input id="Last-Name" name="lname" type="LastName" placeholder="Last Name">
                    </div>

                    <div class="signup-input-container">
                        <img class="fi" src="img/number.png" alt="">
                        <input class="signup-input" type="tel" id="mobile-number" name="phone" pattern="[0-9]{10}" placeholder="Enter mobile number">
                    </div>
                    <div class="signup-input-container">
                        <img class="fi" src="img/email.png" alt="">
                        <input class="signup-input" type="email" name="email" id="email" placeholder="Enter Email Id">
                    </div>
                    <div class="signup-input-container">
                        <img class="fi" src="img/user.png" alt="">
                        <input class="signup-input" type="text" id="" name="uname" placeholder="Enter User name">
                    </div>
                    <div class="signup-input-container">
                        <img class="fi" src="img/lock.png" alt="">
                        <input class="signup-input" type="password" name="password" id="password" placeholder="Enter password">
                    </div>

                    <div class="signup-input-container">
                        <img class="fi" src="img/lock.png" alt="">
                        <input class="signup-input" type="password" name="cpassword" id="password" placeholder="Confirm password">
                    </div>

                    <div class="signup-input-container">
                        <p class="dob">Date of Birth :</p>
                        <input type="date" name="dob" id="dob">
                    </div>
                    <div class="signup-input-container gender-input">
                        <p class="gender">Gender : </p>
                        <input type="radio" name="gender" id="1" value="1"><label class="male" for="male">Male</label>
                        <input type="radio" name="gender" id="0" value="0"><label class="female" for="female">Female</label>
                    </div>
                    <div align="center">
                        <button class="myButton signup-button" name="sigup">Sign-up</button>
                    </div>
                    <div align="center">
                        <p class="signin">already have account. <a class="signup-link" onclick="login()">signin</a> </p>
                    </div>
                </div>
            </div>
        </form>
    </section>

    


    <main id="blur">
        <section>
            <div class="container">
                <a href="gdsc.php">
                    <h3>GDSC DDU</h3>
                    <img class="logo" src="img/gdsc-logo.png" alt="logo of gdsc club">
                </a>
                <p>The Google Developer Student Clubs (GDSC) program is a grassroots channel through which we provide development skills for students, towards employability. </p>

            </div>
        </section>
        <section>
            <div class="container">
                <a href="connect.php">
                    &nbsp;
                    <h3>DDU Connect</h3>
                    <img class="logo" src="img/connect-logo.png" alt="logo of ddu connect club">
                </a>
                <p>DDU CONNECT, it is a club from DHARMSINH DESAI UNIVERSITY. where an individual's thinking is presented in form of arts and words.
                </p>
            </div>
        </section>
        <section>
            <div class="container">
                <a href="csi.php">
                    <h3>CSI DDU </h3>
                    <img class="logo-csi" src="img/csi-logo.png" alt="logo of CSI DDU club">
                </a>
                <p>We are a student chapter of Computer Society of India, which is the first and largest body of Computer professionals.</p>
            </div>
        </section>
        <section>
            <div class="container">
                <a href="trc.php">
                    <h3>TRC DDU</h3>
                    <img class="logo" src="img/trc-logo.png" alt="logo of trc club">
                </a>
                <p>The Readers' Community.We are an active committee with our aphorism to share and spread the importance of reading through book talks, podcasts, etc. </p>
            </div>
        </section>
        <section>
            <div class="container">
                &nbsp;
                <a href="shuterbugs.php">
                    <h3>Shutterbugs DDU</h3>
                    <img class="logo" src="img/shuterbucs-logo1.jpg" alt="logo of ddu connect club">
                </a>
                <p>Shutterbugs is the only photography club of DDU,nadiad which aims to enhance and showcase the creative photography skills of the students. We believe in capturing the best moments of life through the lens of camera.
                </p>
            </div>
        </section>

        <section class="main-slider">
            <div class="slider">
                <div class="slides">
                    <!-- radio button start -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <input type="radio" name="radio-btn" id="radio6">
                    <input type="radio" name="radio-btn" id="radio7">
                    <input type="radio" name="radio-btn" id="radio8">
                    <input type="radio" name="radio-btn" id="radio9">
                    <input type="radio" name="radio-btn" id="radio10">
                    <!-- radio button end -->

                    <!-- image start -->
                    <div class="slide first">
                        <img src="slider/logo.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/csi1.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/trc5.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/shu4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/dsc4.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/con4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/shu5.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/dsc1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/trc4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/csi5.png" alt="">
                    </div>
                    <!-- image end -->

                    <!-- automatic navigation sart -->
                    <div class="navigation-auto">
                        <div class="auto-btn-1"></div>
                        <div class="auto-btn-2"></div>
                        <div class="auto-btn-3"></div>
                        <div class="auto-btn-4"></div>
                        <div class="auto-btn-5"></div>
                        <div class="auto-btn-6"></div>
                        <div class="auto-btn-7"></div>
                        <div class="auto-btn-8"></div>
                        <div class="auto-btn-9"></div>
                        <div class="auto-btn-10"></div>
                    </div>
                    <div class="lr-change">
                        <img src="img/left-arrow.png" alt="" class="left-change" height="50px" onclick="leftchange()">
                        <img src="img/right-arrow.png" alt="" class="right-change" height="50px" onclick="rightchange()">
                    </div>
                    <!-- automatic navigation close -->
                </div>
                    <!-- manual navigation start -->
                    <div class="manual-navigation">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                        <label for="radio5" class="manual-btn"></label>
                        <label for="radio6" class="manual-btn"></label>
                        <label for="radio7" class="manual-btn"></label>
                        <label for="radio8" class="manual-btn"></label>
                        <label for="radio9" class="manual-btn"></label>
                        <label for="radio10" class="manual-btn"></label>
                    </div>
                </div>

                <!-- manual navigation close -->
        </section>

        
    </main>

    <script src="js/slider.js"></script>

    <footer>

    </footer>

    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="header/header.js"></script>
    <script>
        // $("header").load("header.php");
        $("footer").load("footer.php");
    </script>

</body>

</html>