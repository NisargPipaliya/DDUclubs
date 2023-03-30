<?php
include 'authcheck.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/lg.ico" type="image/x-icon">
    <link rel="stylesheet" href="clubs/style.css">
    <title>SHUTTERBUGS</title>
</head>

<body>
    <header>

    </header>

    <main>
        <div class="slider">
            <div class="slides">
                <!-- radio button start -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <!-- radio button end -->

                <!-- image start -->
                <div class="slide first">
                    <img src="slider/shu1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="slider/shu2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="slider/shu3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="slider/shu4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="slider/shu5.jpg" alt="">
                </div>
                <!-- image end -->

                <!-- automatic navigation sart -->
                <div class="navigation-auto">
                    <div class="auto-btn-1"></div>
                    <div class="auto-btn-2"></div>
                    <div class="auto-btn-3"></div>
                    <div class="auto-btn-4"></div>
                    <div class="auto-btn-5"></div>
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
            </div>
            <!-- manual navigation close -->
        </div>

    </main>
    <section>
        <div class="information">
            <p>Shutterbugs DDU,<br>

Shutterbugs is the only photography club of DDU,nadiad which aims to enhance and showcase the creative photography skills of the students. We believe in capturing the best moments of life through the lens of camera. 

We organize online photo contests, exhibitions, photography trips, workshops, seminars and photowalks. In short, We love moving out and capture the beauty of the world.</p>
        </div>
    </section>

    <section class="recent">
        <div class="display-event">
            <h3>Recent events:</h3>
        </div>
        <div class="event">
            <div>
                <div>
                    <div>
                        <h4>STILL LIFE PHOTOGRAPHY</h4>
                    </div>
                    <div class="event-info">
                        <p>Shutterbugs brings to you an another interesting photography contest based on 'Still Life Photography.'<br><br>

Capture a bowl of fruits or a vase of flowers. Bring the focus on inanimate commonplace objects and turn them into interesting works of art!</p>
                        <div class="recent-event-dl">
                            <ul>
                                <li><a href="">Click here </a> to Register</li>
                                <li>Contact info : 999-8999-888</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="past">
        <div class="display-event">
            <h3>Past events:</h3>
        </div>
        <div class="event">
            <div>
                <div>
                    <div>
                        <h4>KLICKSTART 3.0</h4>
                    </div>
                    <div class="event-info">
                        <p> This Event was organised to make the students learn about few basics about photography and working of DSLR.
                            <br><br>The big reveal was the membership program that was launched on 21st Dec and continued till 24th Dec.
                           </p>
                        <div class="past-event-dl">
                            <ul>
                                <li>Registered student : 120</li>
                                <li>student attended : 100</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="requirements">
        <div>
            <div class="display-event">
                <h3>Recruitment : </h3>
            </div>
            <div class="event">
                <div>
                    Hello enthusiasts🙋🏻‍♂️,
                </div>
                <div class="event-info">
                    <div>Shutterbugs, <br>
                    A club of DDU which is a camera/photography oriented club. Join-us to learn and polish your photography skills to another level.
                    <br>
                    Hurry up the recruitment form closes soon!!
                    </div>
                    <hr>
                    <div>
                        <p>Vacancy for :</p>
                        <div class="past-event-dl">
                            <ul>
                                <li>Photography Team(core team)</li>
                                <li>Management Team</li>
                                <li>Web Development Team </li>
                                <li>Social Media Team</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <ul>
                            <li><p>Contact info : 999-8885-858</p></li>
                            <li><p><a href="">Click here</a> to Register</p></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="contect">
            <div class="container">
                <div>
                    <img src="img/phone.png" alt="" width="70px">
                </div>
                <div>
                    <h4>Contact no: 998-9899-999</h4>
                </div>
            </div>
            <div class="container">
                <div>
                    <img src="img/web.png" alt="" width="70px">
                </div>
                <div>
                    <h4><a href="#">Website.naihai.com</a></h4>
                </div>
            </div>
            <div class="container">
                <div>
                    <img src="img/whatsapp.png" alt="" width="70px">
                </div>
                <div>
                    <h4><a href="">Click here </a> to join whatsapp group</h4>
                </div>
            </div>
            <div class="container">
                <div>
                    <img src="img/instagram.png" alt="" width="70px">
                </div>
                <div>
                    <h4><a href="https://www.instagram.com/shutterbugs_ddu/">Click here </a> to visit instagram profile</h4>
                </div>
            </div>
        </div>
    </section>

    <footer>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="clubs/index.js"></script>

 <script>
        $("header").load("header.php");
        $("footer").load("footer.php");
    </script>
</body>
</html>