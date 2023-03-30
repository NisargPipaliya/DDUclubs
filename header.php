<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header/style.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap');
        *{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div>
            <button class="navbar-collapse" onclick="showNavbar()"><img class="collapse-icon" src="img/nav-collapse.png" alt=""></button>
            <img class="mainlogo" src="img/logo.jpg" alt="">

            <?php if(!isset($_COOKIE['loggedin'])) 
            { 
                ?>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="header/header.js"></script>
</body>

</html>