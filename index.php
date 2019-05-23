<?php
require "admin/database.php";

$db = Database::connect();
$sql = "SELECT * FROM projects WHERE favorite=1";
$stmt = $db->query($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
Database::disconnect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="favicon.ico?v=2" type="image/x-icon">
    <!--Bootstrap-->
    <link rel="stylesheet" href="lib/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!--Main-->
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="dist/css/home-media.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/sal.js/dist/sal.css">

    <title>Portfolio</title>
</head>

<body>
    <!-- Header section -->
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php" data-sal="fade" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">AE</a>
            <span class="li-spec" onclick="menuToggle()"><i class="fas fa-bars"></i></span>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" data-sal="slide-down" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item mr-4">
                        <a class="nav-link hov" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link hov" href="pages/about/about.html">About</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link hov" href="pages/portfolio/portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link spec" href="pages/contact/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="plash" onclick="menuClose()"></div>
            <div id="togglemenu">
                <div class="container">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="pages/about/about.html">About</a>
                        </li>
                        <li>
                            <a href="pages/portfolio/portfolio.php">Portfolio</a>
                        </li>
                        <li>
                            <a href="pages/contact/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- First section -->
        <div class="first-section d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row">
            <div class="hero">

            </div>
            <div class="pres" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                <h4 data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">HELLO MY NAME IS ALAE, I’M 22 YEARS
                    <br data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">OLD AND I’M A FULLSTACK DEVELOPER</h4>
                <div class="d-flex justify-content-center">
                    <a class="p-4" href="https://drive.google.com/file/d/1egZS-PLDdvIgSE_qYnr_E36zxs4oG0e3/view" data-sal="slide-right" data-sal-delay="400" data-sal-easing="ease-out-bounce" data-sal-duration="800">GET CV</a>
                    <a class="p-4" href="#" data-sal="slide-left" data-sal-delay="400" data-sal-easing="ease-out-bounce" data-sal-duration="800">HIRE ME</a>
                </div>
            </div>
        </div>


        <!-- right brand -->
        <div class="right-brand d-flex justify-content-center">
            <p>ALAE PORTFOLIO</p>
            <hr>
            <img src="assets/imgs/mouse.png">
        </div>
    </header>

    <!-- second section -->
    <section class="decription-section mt-5 mt-sm-5 mt-md-0 mt-lg-0 mt-xl-0">
        <div class="single-row" data-sal="fade" data-sal-delay="50" data-sal-easing="ease-out-bounce" data-sal-duration="800">
            <h4>WHO AM I ?</h4>
            <p>I'm a full stack web developer passionate about producing high quality responsive websites and exceptional user experience.You can check my GitHub to see my projects, and if you want to know more about me you can visite About section.</p>
            <a href="pages/about/about.html" data-sal="slide-left" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">See more about Alae</a>
        </div>
    </section>

    <!-- cards section -->
    <section class="cards-container">
        <div class="single-row text-center">
            <div class="single-sec">
                <h3 class="title-right" data-sal="slide-left" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">Front-end</h3>
                <hr>
                <p class="right" data-sal="slide-left" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                    - HTML5<br>
                    - SCSS/CSS3<br>
                    - JAVASCRIPT<br>
                    - TYPESCRIPT<br>
                    - JQUERY<br>
                    - AJAX<br>
                    - BOOTSTRAP<br>
                    - ANGULAR<br>
                </p>
            </div>
            <div class="single-sec">
                <h3 class="title-left" data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">Back-end</h3>
                <hr>
                <p class="left text-right" data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                    Conception:<br>
                    UML -<br>
                    MERISE -<br>
                    MS PROJECT -<br>
                    PROGRAMING LANGUAGES/<br>TECHNOLOGIES:<br>
                    PHP 5,7 -<br>
                    SQL -<br>
                </p>
            </div>
            <div class="single-sec">
                <h3 class="title-right t-spec" data-sal="slide-left" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">Design</h3>
                <hr class="hrspec">
                <p class="right p-spec" data-sal="slide-left" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                    Thus, not only I have coded their back-end and front-end code, but often I also had to care about other things needed in a successful web application:

                    good planning of UI and thinking how it affects the UX;
                    consistency in design and typography;
                    tools i use:

                    Wireframesketcher,
                    Adobe XD,
                    inVision Studio;
                    Adobe Illustrator.
                </p>
            </div>
            <div class="single-sec">
                <h3 class="title-left tl-spec" data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">Other technologies</h3>
                <hr>
                <p class="left text-right text-uppercase" data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                    GIT(Github/gitlab) -<br>
                    gulp/grant -<br>
                    other libraries:<br>
                    Sal js/laxxx js/AOS js -<br>
                    other programing languages:<br>
                    C -<br>
                    Python3 -<br>
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio section -->
    <section class="recent-work mt-5 mb-5">
        <div class="single-row">
            <div class="title text-center mb-5">
                <h4>MY RECENT WORK</h4>
            </div>

            <!-- cards -->
            <div class="work-cont d-flex justify-content-center flex-row flex-wrap position-relative">
                <?php foreach ($rows as $row) : ?>
                    <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 18rem;" data-sal="slide-down" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                        <img class="card-img-top" src="assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getrow('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')">
                        <p class="vplus position-absolute" data-toggle="modal" data-target="#exampleModal" onclick="getrow('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')">See More</p>
                        <a class="text-decoration-none p-1 d-flex align-items-center justify-content-center" href="<?= $row['github'] ?>">
                            <p class="m-0">github source <i class="fab fa-github-square"></i> </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="body">
                            <h3 class="text-center mb-5" id="mtitle"></h3>
                            <img class="mb-5" src="#" id="mimg">
                            <p class="mb-5" id="mdesc"></p>
                            <h5>technologies used :</h5>
                            <h6 id="mtech"></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                            <a href="" id="mlink">
                                <button type="button" class="btn">Go to github page<i class="fab fa-github-square" style="padding-left: .6rem;"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Error Modal -->

            <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body d-flex justify-content-center align-items-center flex-column" id="body">
                            <h3 class="errortitle">Sorry but this project is not linked yet</h3>
                            <img class="errorImg" src="assets/imgs/error.png" style="width:60%">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border:none">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- See more button -->
            <div class="af-suite text-center mb-5 mt-5">
                <a href="pages/portfolio/portfolio.php">See More</a>
            </div>
        </div>
    </section>

    <!-- What i can do section -->
    <section class="what-i-can-do-sec">
        <div class="single-row">

            <div class="red-sec d-flex flex-column justify-content-center align-items-center p-5">
                <h5 class="text-center mb-md-5 mb-lg-5 mb-xl-5" data-sal="slide-down" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="800">WHAT I CAN DO?</h5>
                <ul data-sal="slide-right" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                    <li>Create responsive websites that work on a wide range of devices</li>
                    <li>Assist with production of clean and functional design</li>
                    <li>Bridge communication gap between designers and developers</li>
                    <li>I’m a full-stack developer which means I can bring your project from concept to completion.</li>
                </ul>
                <div class="button">
                    <a href="#">Contact me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->

    <footer>
        <div class="single-row d-flex justify-content-center align-items-center flex-column">
            <div class="logo">
                <a href="#">AE</a>
            </div>
            <div class="redaction mt-4">
                <p class="text-center">email : alaeessaki@gmail.com<br>Num : +2126 93 43 80 16</p>
            </div>

            <div class="reseaux d-flex flex-row flex-sm-wrap flex-md-wrap mt-4">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-github-square"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

            <!-- Copyright -->
            <div class="copyrights mt-5">
                <p>copyrights &copy; 2019: <a href="#">Alae ES-SAKI</a></p>
            </div>
        </div>
    </footer>


    <!--other Libraries-->
    <script src="lib/jQuery-3-4-1/jquery-3.4.1.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <!--Main Js-->

    <script src="node_modules/sal.js/dist/sal.js"></script>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/menu.js"></script>


</body>

</html>