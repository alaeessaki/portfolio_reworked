<?php
require "../../admin/Database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link rel="stylesheet" href="../../lib/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--Main-->
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="../../node_modules/sal.js/dist/sal.css">
    <link rel="stylesheet" href="css/portfolio-media.css">
    <link rel="stylesheet" href="../../dist/css/loader.css">

    <title>Portfolio</title>
</head>

<body>
<header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" data-sal="slide-down" data-sal-delay="300" data-sal-easing="ease-out-bounce" data-sal-duration="800">
            <a class="navbar-brand" href="../../index.php">AE</a>
            <span class="li-spec" onclick="menuToggle()"><i class="fas fa-bars"></i></span>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item mr-4">
                        <a class="nav-link hov" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link hov" href="../../pages/about/about.html">About</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link hov" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link spec" href="../../pages/contact/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="plash" onclick="menuClose()"></div>
            <div id="togglemenu">
                <div class="container">
                    <ul>
                        <li>
                            <a href="../../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../about/about.html">About</a>
                        </li>
                        <li>
                            <a href="../portfolio/portfolio.php">Portfolio</a>
                        </li>
                        <li>
                            <a href="../contact/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="portfolio-main">
        <div class="categories">
            <ul class="navs-list d-flex flex-row flex-wrap justify-content-center text-uppercase align-items-center">
                <li class="navs-item cat mr-5 mt-5 active" data-target="all">All</li>
                <li class="navs-item cat mr-5 mt-5" data-target="website">Website</li>
                <li class="navs-item cat mr-5 mt-5" data-target="mobileapp">Mobile app</li>
                <li class="navs-item cat mr-5 mt-5" data-target="webapp">Web-app</li>
                <li class="navs-item cat mr-5 mt-5" data-target="game">Game</li>
                <li class="navs-item cat mr-5 mt-5" data-target="others">Others</li>
            </ul>
        </div>

        <section class="projects-section">
            <div id="all">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects";
                $stmt = $db->query($sql);
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="../../assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="website" class="non-active">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='website'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="../../assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="mobileapp" class="non-active">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='mobileapp'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="../../assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="webapp" class="non-active">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='webapp'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="../../assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="game" class="non-active">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='game'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="../../assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="others" class="non-active">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='others'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="../../assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['technologies'] ?>','<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
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
        </section>
    </main>


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
    <script src="../../lib/jQuery-3-4-1/jquery-3.4.1.min.js"></script>
    <script src="../../lib/popper/popper.min.js"></script>
    <script src="../../lib/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <!--Main Js-->
    <script src="../../node_modules/sal.js/dist/sal.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="../../dist/js/loader.js"></script>

    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

</body>

</html>