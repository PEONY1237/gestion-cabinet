<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--responsive meta tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--icon/logo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!--botstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--js-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>


    <!--css-->
    <link rel="stylesheet" href="css/style.css">

    <title>Gestion Cabinet Medical</title>
</head>
<body>
    <!-- php -->
    <?php include "php.php"; ?>

    <div class="main">
        <div class="header">
            <div class="contact">
                <ul>
                    <li>
                        <a href="mailto:doctorshems@gmail.com">
                            <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; doctorshems@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-phone" aria-hidden="true"></i>  +212 7 50 53 82 19
                        </a>
                    </li>
                    <li class="socio">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square"></i></a>
                    </li>
                </ul>
            </div>
            <div class="nav">
                <div class="logo">
                    <p><a href="index.php">Doctor Shems</a></p>
                </div>
                <ul class="topbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#appointment">Appointment</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="log">
                    <li><a href="login.html"> Log in </a></li>
                </div>
            </div>
            <div class="panorama">
                <div id="carouselExampleControlsAutoplay" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/2.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="carousel-item">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/13.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="carousel-item">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/12.mp4" type="video/mp4" />
                        </video>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


        <!-- Section -->
        <section id="appointment" class="appointment section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Make an Appointment</h2>
                </div>
                <form method="post" role="form" class="php-form">
                <div class="row">
                    <div class="col-md-4 my-5 form-group">
                        <label class="label">Full Name</label>
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Your Full Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 my-5 form-group">
                        <label class="label">Birthday</label>
                        <input type="date" name="bd" class="form-control" id="bd" placeholder="Your Birthday" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 my-5 form-group">
                        <label class="label">Phone</label> 
                        <input type="text" name="tel" class="form-control" id="tel" placeholder="Your Phone" data-rule="minlen:" data-msg="Please enter at least 5 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 my-5 form-group">
                        <label class="label">Adress</label> 
                        <input type="text" class="form-control" name="adrs" id="adrs" placeholder="Your Adress" data-rule="minlen:18" data-msg="Please enter at least 8 chars" required> 
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 my-5 form-group">
                        <label class="label">Email</label> 
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 my-5 form-group">
                        <label class="label">Appointment</label> 
                        <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                </div>    
                    <div class="text-center"><button type="submit" id="btn" onclick="valide_date()">Make an Appointment</button></div>   
                </form>
            </div>
        </section>

        <!-- About  -->
        <div id="about" class="page-section pb-0">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                  <h1>Welcome to Your Health <br> Center</h1>
                  <p class="text-grey mb-4">I Am Doctor Shems ... Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae corporis possimus nobis perspiciatis facilis quis dolorum labore odit delectus error soluta voluptas, autem sunt mollitia, esse odio minima pariatur? <br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
                  <a href="#about" class="btn btn-active">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="img/19.jpg" alt="">
                    </div>
                </div>
              </div>
            </div>
        </div>

        <!-- gallery -->
        <div id="gallery" class="gallery">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/16.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/5.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/21.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/26.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/19.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/27.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/23.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/18.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/22.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/17.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/25.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="col-4">
                        <video class="img-fluid" autoplay loop muted>
                            <source src="video/28.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact" class="footer">
            <div class="footer-content">
                <h3>OFPPT DIGITAL DEVLOPPEMENT TRAINEE</h3>
                <p>The Site Is Made By SALMA KHARFI</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus asperiores atque nobis, beatae, rerum natus fugit at consequuntur laborum magni, provident eos ipsa sed debitis ullam soluta labore error veritatis.</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
                <ul class="Adress">
                    <a href="#">
                        <i class="fa fa-map-marker"></i>&nbsp;&nbsp; angle boulevard bir anzarane et rue al achetar résidence ribh, porte A, 3e étage، Casablanca 20000
                    </a>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Copyright © 2022 Designed By SALMA KHARFI</p>
            </div>
        </div>

    </div> <!-- end main -->
</body>
</html>
