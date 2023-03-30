<?php
include 'config.php' ;
// echo"done after";
if($_COOKIE['loggedin']==true)
echo "Hello".$_COOKIE['na'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/lg.ico" type="image/x-icon">
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

    </header>

    <!-- <form class="signin-form"  action="index.php" method=POST >
        <div>
            <div>
                <p onclick="loginClose()" class="login-popup-close"><i class="fa fa-fw fa-close"></i></p>
            </div>
            <hr class="none">
            <div class="input-box">
                <img class="fi" src="img/user.png" alt="">
                <input type="email" name="email" placeholder="Enter Email">
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

    <section>
    <form action="index.php" method=POST>
        <div class="signup-form">
            <div class="register">
                <p onclick="signupClose()" class="signup-popup-close">Regiter Form </p>
                <i onclick="signupClose()" class="fa fa-fw fa-close signup-close"></i>
            </div>
            <div>
                <div class="fname-input">
                    <input id="First-Name" type="FirstName" placeholder="First Name">
                </div>
                <div class="lname-input">
                    <input id="Last-Name" type="LastName" placeholder="Last Name">
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
                    <img class="fi" src="img/lock.png" alt="">
                    <input class="signup-input" type="password" name="password" id="password" placeholder="Enter password">
                </div>
                <div class="signup-input-container">
                    <p class="dob">Date of Birth :</p>
                    <input type="date" name="birth-date" id="dob">
                </div>
                <div class="signup-input-container gender-input">
                    <p class="gender">Gender : </p>
                    <input type="radio" name="gender" id="1" value="male"><label class="male" for="male">Male</label>
                    <input type="radio" name="gender" id="0" value="female"><label class="female" for="female">Female</label>
                </div>
                <div align="center">
                    <button class="myButton signup-button">Signup/Register</button>
                </div>
                <div align="center">
                    <p class="signin">already have account. <a class="signup-link" onclick="login()">signin</a> </p>
                </div>
            </div>
        </div>
    </form>
</section>
 -->

    <main id="blur">
        <section>
            <div class="container">
                <a href="gdsc.html">
                    <h3>GDSC DDU</h3>
                    <img class="logo" src="img/gdsc-logo.png" alt="logo of gdsc club">
                </a>
                    <p>The Google Developer Student Clubs (GDSC) program is a grassroots channel through which we provide development skills for students, towards employability. </p>
                
            </div>
        </section>
        <section>
            <div class="container">
                <a href="connect.html">
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
                <a href="csi.html">
                    <h3>CSI DDU </h3>
                    <img class="logo-csi" src="img/csi-logo.png" alt="logo of CSI DDU club">
                </a>
                    <p>We are a student chapter of Computer Society of India, which is the first and largest body of Computer professionals.</p>
            </div>
        </section>
        <section>
            <div class="container">
                <a href="trc.html">
                    <h3>TRC DDU</h3>
                    <img class="logo" src="img/trc-logo.png" alt="logo of trc club">
                </a>
                    <p>The Readers' Community.We are an active committee with our aphorism to share and spread the importance of reading through book talks, podcasts, etc. </p>
            </div>
        </section>
        <section>
            <div class="container">
                    &nbsp;
                <a href="shuterbugs.html">
                    <h3>Shutterbugs DDU</h3>
                    <img class="logo" src="img/shuterbucs-logo1.jpg" alt="logo of ddu connect club">
                </a>
                    <p>Shutterbugs is the only photography club of DDU,nadiad which aims to enhance and showcase the creative photography skills of the students. We believe in capturing the best moments of life through the lens of camera. 
</p>
            </div>
        </section>
    </main>

    <footer>
        
    </footer>

    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("header").load("header.php");
        $("footer").load("footer.php");
    </script>

</body>

</html>