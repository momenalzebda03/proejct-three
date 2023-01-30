<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap4/css4/all.min.css">
    <link rel="stylesheet" href="bootstrap4/css4/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap4/css4/indx.css">
    <title>project three</title>
</head>

<body>
    <!-- start header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container div_header_left">
            <div>
                <a class="navbar-brand" href="#"><span>momen</span></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse div_header" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class=""></div>
                        <a class="nav-link" href="#article">articles</a>
                    </li>
                    <li class="nav-item">
                        <div class=""></div>
                        <a class="nav-link actve" href="#callery">callery</a>
                    </li>
                    <li class="nav-item">
                        <div class=""></div>
                        <a class="nav-link" href="#features">features</a>
                    </li>
                    <li class="nav-item">
                        <div class=""></div>
                        <a class="nav-link link" href="#" id="link">otherlinks</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="div_none" id="div_none">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <img src="image4/megamenu.png" alt="">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 div_right">
                    <div class="div_flex">
                        <div class="div_br">
                            <div class="div_flex1">
                                <i class="far fa-comments icon"></i>
                                <a href="#testimonials">testimonials</a>
                                <div class="div_hr1"></div>
                            </div>
                            <br>
                            <div class="div_flex1">
                                <i class="fas fa-user icon"></i>
                                <a href="#team">teammembers</a>
                                <div class="div_hr1"></div>
                            </div>
                            <br>
                            <div class="div_flex1">
                                <i class="fas fa-hotel icon"></i>
                                <a href="#services">sarvices</a>
                                <div class="div_hr1"></div>
                            </div>
                            <br>
                            <div class="div_flex1">
                                <i class="fas fa-check-circle icon"></i>
                                <a href="#skills">our skills</a>
                                <div class="div_hr1"></div>
                            </div>
                            <br>
                            <div class="div_flex1">
                                <i class="far fa-clipboard icon"></i>
                                <a href="#works">howitworks</a>
                                <div class="div_hr1"></div>
                            </div>
                        </div>
                        <br>
                        <div class="div_br">
                            <div class="div_flex1">
                                <i class="far fa-clipboard icon"></i>
                                <a href="#latest">events</a>
                                <div class="div_hr1"></div>
                            </div>
                            <br>
                            <div class="div_flex1">
                                <i class="fa-solid fa-bars icon"></i>
                                <a href="#pricing" style="font-size: 13px;">pricingplans</a>
                                <div class="div_hr1"></div>
                            </div>
                            <br>
                            <div class="div_flex1">
                                <i class="fa-solid fa-play icon"></i>
                                <a href="#video">topvideos</a>
                                <div class="div_hr1"></div>
                            </div>
                            <br>
                            <div class="div_flex1">
                                <i class="fa-solid fa-signal icon"></i>
                                <a href="#our">stats</a>
                                <div class="div_hr1"></div>
                            </div>
                            <br>
                            <div class="div_flex1">
                                <i class="fa-solid fa-percent icon"></i>
                                <a href="#form" style="font-size: 10px;">requestadiscount</a>
                                <div class="div_hr1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="div_color">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-7 div_left">
                    <h2>weclome, to momen world</h2>
                    <p>here iam gonna share everything about my life.<br>good iam Programming, games iam playing,
                        stories and<br>events</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 div_center">
                    <img src="image4/landing-image.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start articles -->
    <div class="div_box">
        <div class="div_posat" id="article">
            <a href="#" class="my_icon"><i class="fas fa-angle-double-down"></i></a>
            <div class="div_border">
                <h2 class="my_h2">ARTICLE</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card my_card">
                        <img src="image4/cat-01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">test title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium,
                            </p>
                            <hr>
                            <div class="div_flex">
                                <?php

                                $data = new mysqli("localhost", "root", "", "data_project_three");

                                $table = $data->query("select * from table_string where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='article_read.php?id1=" . $row["id"] . "'>read more</a>";
                                    }
                                }
                                ?>
                                <i class="fas fa-arrow-right icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card my_card">
                        <img src="image4/cat-02.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">test title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium,
                            </p>
                            <hr>
                            <div class="div_flex">
                                <?php

                                $table = $data->query("select * from table_string where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='article_read.php?id1=" . $row["id"] . "'>read more</a>";
                                    }
                                }
                                ?>
                                <i class="fas fa-arrow-right icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card my_card">
                        <img src="image4/cat-03.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">test title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium,
                            </p>
                            <hr>
                            <div class="div_flex">
                                <?php

                                $table = $data->query("select * from table_string where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='article_read.php?id1=" . $row["id"] . "'>read more</a>";
                                    }
                                }
                                ?>
                                <i class="fas fa-arrow-right icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card my_card">
                        <img src="image4/cat-04.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">test title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium,
                            </p>
                            <hr>
                            <div class="div_flex">
                                <?php

                                $table = $data->query("select * from table_string where id = 4");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='article_read.php?id1=" . $row["id"] . "'>read more</a>";
                                    }
                                }
                                ?>
                                <i class="fas fa-arrow-right icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card my_card">
                        <img src="image4/cat-05.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">test title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium,
                            </p>
                            <hr>
                            <div class="div_flex">
                                <?php

                                $table = $data->query("select * from table_string where id = 5");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='article_read.php?id1=" . $row["id"] . "'>read more</a>";
                                    }
                                }
                                ?>
                                <i class="fas fa-arrow-right icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card my_card">
                        <img src="image4/cat-06.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">test title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium,
                            </p>
                            <hr>
                            <div class="div_flex">
                                <?php

                                $table = $data->query("select * from table_string where id = 6");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='article_read.php?id1=" . $row["id"] . "'>read more</a>";
                                    }
                                }
                                ?>
                                <i class="fas fa-arrow-right icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card my_card">
                        <img src="image4/cat-07.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">test title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium,
                            </p>
                            <hr>
                            <div class="div_flex">
                                <?php

                                $table = $data->query("select * from table_string where id = 7");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='article_read.php?id1=" . $row["id"] . "'>read more</a>";
                                    }
                                }
                                ?>
                                <i class="fas fa-arrow-right icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card my_card">
                        <img src="image4/cat-08.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">test title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium,
                            </p>
                            <hr>
                            <div class="div_flex">
                                <?php

                                $table = $data->query("select * from table_string where id = 8");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='article_read.php?id1=" . $row["id"] . "'>read more</a>";
                                    }
                                }
                                ?>
                                <i class="fas fa-arrow-right icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end articles -->
        <!-- start callery -->
        <div class="div_triangle"></div>
        <div class="div_callery" id="callery">
            <div class="div_border">
                <h2 class="my_h2">CALLERY</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="image">
                                <img src="image4/gallery-01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="image">
                                <img src="image4/gallery-02.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="image">
                                <img src="image4/gallery-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="image">
                                <img src="image4/gallery-04.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="image">
                                <img src="image4/gallery-05.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="image">
                                <img src="image4/gallery-06.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end callery -->
        <!-- start features -->
        <div class="div_features" id="features">
            <div class="div_border">
                <h2 class="my_h2">features</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="card">
                            <div class="div_card1 crad1"></div>
                            <img src="image4/features-01.jpg" class="card-img-top" alt="...">
                            <div class="div_triangle1"></div>
                            <div class="card-body">
                                <h1 class="card-title">quality</h1>
                                <div class="div_hr2 h2_color1"></div>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias
                                    maxime magnam, cumque delectus debitis nisi magni ipsum
                                </p>
                            </div>
                            <div class="div_button">
                                <?php

                                $table = $data->query("select * from table_string where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='features_read.php?id2=" . $row["id"] . "'><button class='btn btn1'>More</button></a>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="card">
                            <div class="div_card1 crad2"></div>
                            <img src="image4/features-02.jpg" class="card-img-top" alt="...">
                            <div class="div_triangle1"></div>
                            <div class="card-body">
                                <h1 class="card-title">Time</h1>
                                <div class="div_hr2 h2_color2"></div>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias
                                    maxime magnam, cumque delectus debitis nisi magni ipsum
                                </p>
                            </div>
                            <div class="div_button">
                                <?php

                                $table = $data->query("select * from table_string where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='features_read.php?id2=" . $row["id"] . "'><button class='btn btn2'>More</button></a>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="card">
                            <div class="div_card1 crad3"></div>
                            <img src="image4/features-03.jpg" class="card-img-top" alt="...">
                            <div class="div_triangle1"></div>
                            <div class="card-body">
                                <h1 class="card-title">passion</h1>
                                <div class="div_hr2 h2_color3"></div>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias
                                    maxime magnam, cumque delectus debitis nisi magni ipsum
                                </p>
                            </div>
                            <div class="div_button">
                                <?php

                                $table = $data->query("select * from table_string where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='features_read.php?id2=" . $row["id"] . "'><button class='btn btn3'>More</button></a>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end features -->
        <!-- start testimonials -->
        <div class="div_testimonials" id="testimonials">
            <div class="div_border">
                <h2 class="my_h2">TESTIMONILAS</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="my_flex">
                                <h5>mohamed farag</h5>
                                <img src="image4/avatar-01.png" alt="">
                            </div>
                            <p>full stack developer</p>
                            <div class="d-flex">
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur
                                debitis cum sequi
                                veritatis eligendi itaque dolore dicta nlumquam est
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_image">
                        <div class="div_image">
                            <div class="my_flex">
                                <h5>mohamed ibrahaim</h5>
                                <img src="image4/avatar-02.png" alt="">
                            </div>
                            <p>full stack developer</p>
                            <div class="d-flex">
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur
                                debitis cum sequi
                                veritatis eligendi itaque dolore dicta nlumquam est
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_image">
                        <div class="div_image">
                            <div class="my_flex">
                                <h5>shady nabil</h5>
                                <img src="image4/avatar-03.png" alt="">
                            </div>
                            <p>full stack developer</p>
                            <div class="d-flex">
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur
                                debitis cum sequi
                                veritatis eligendi itaque dolore dicta nlumquam est
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="my_flex">
                                <h5>amr hendawy</h5>
                                <img src="image4/avatar-04.png" alt="">
                            </div>
                            <p>full stack developer</p>
                            <div class="d-flex">
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                            </div>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur
                                debitis cum sequi
                                veritatis eligendi itaque dolore dicta nlumquam est
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_image">
                        <div class="div_image">
                            <div class="my_flex">
                                <h5>sherief ashraf</h5>
                                <img src="image4/avatar-05.png" alt="">
                            </div>
                            <p>full stack developer</p>
                            <div class="d-flex">
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur
                                debitis cum sequi
                                veritatis eligendi itaque dolore dicta nlumquam est
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_image">
                        <div class="div_image">
                            <div class="my_flex">
                                <h5>osama mohamed</h5>
                                <img src="image4/avatar-06.png" alt="">
                            </div>
                            <p>full stack developer</p>
                            <div class="d-flex">
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur
                                debitis cum sequi
                                veritatis eligendi itaque dolore dicta nlumquam est
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end testimonials -->
        <!-- start team members -->
        <div class="div_team" id="team">
            <div class="div_border">
                <h2 class="my_h2">TEAMMEMBERS</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="my_image">
                                <img src="image4/team-01.jpg" alt="">
                            </div>
                            <div class="div_icon">
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-facebook-f icon"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-twitter icon"></i></a>
                                <a href="momen07996@gmail.com" target="_blank"><i class="fab fa-google-plus-g icon"></i></a>
                                <a href="https://www.youtube.com/channel/UCUQZ1CpDjyzT4N8taQlA32A" target="_blank"><i class="fab fa-youtube icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="my_image">
                                <img src="image4/team-02.jpg" alt="">
                            </div>
                            <div class="div_icon">
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-facebook-f icon"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-twitter icon"></i></a>
                                <a href="momen07996@gmail.com" target="_blank"><i class="fab fa-google-plus-g icon"></i></a>
                                <a href="https://www.youtube.com/channel/UCUQZ1CpDjyzT4N8taQlA32A" target="_blank"><i class="fab fa-youtube icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="my_image">
                                <img src="image4/team-03.jpg" alt="">
                            </div>
                            <div class="div_icon">
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-facebook-f icon"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-twitter icon"></i></a>
                                <a href="momen07996@gmail.com" target="_blank"><i class="fab fa-google-plus-g icon"></i></a>
                                <a href="https://www.youtube.com/channel/UCUQZ1CpDjyzT4N8taQlA32A" target="_blank"><i class="fab fa-youtube icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="my_image">
                                <img src="image4/team-04.jpg" alt="">
                            </div>
                            <div class="div_icon">
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-facebook-f icon"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-twitter icon"></i></a>
                                <a href="momen07996@gmail.com" target="_blank"><i class="fab fa-google-plus-g icon"></i></a>
                                <a href="https://www.youtube.com/channel/UCUQZ1CpDjyzT4N8taQlA32A" target="_blank"><i class="fab fa-youtube icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_image">
                            <div class="my_image">
                                <img src="image4/team-05.png" alt="">
                            </div>
                            <div class="div_icon">
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-facebook-f icon"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-twitter icon"></i></a>
                                <a href="momen07996@gmail.com" target="_blank"><i class="fab fa-google-plus-g icon"></i></a>
                                <a href="https://www.youtube.com/channel/UCUQZ1CpDjyzT4N8taQlA32A" target="_blank"><i class="fab fa-youtube icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end team members -->
        <!-- start services -->
        <div class="div_triangle"></div>
        <div class="div_callery" id="services">
            <div class="div_border">
                <h2 class="my_h2">SERVICES</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_white">
                            <i class="fas fa-shield-alt icon"></i>
                            <br>
                            <br>
                            <h3>security</h3>
                            <div class="div_flex">
                                <div class="div_before">
                                    <h1>01</h1>
                                </div>
                                <div class="">
                                    <p>detalis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_white">
                            <i class="fas fa-tools icon"></i>
                            <br>
                            <br>
                            <h3>fixing lssues</h3>
                            <div class="div_flex">
                                <div class="div_before">
                                    <h1>02</h1>
                                </div>
                                <div class="">
                                    <p>detalis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_white">
                            <i class="fas fa-map icon"></i>
                            <br>
                            <br>
                            <h3>location</h3>
                            <div class="div_flex">
                                <div class="div_before">
                                    <h1>03</h1>
                                </div>
                                <div class="">
                                    <p>detalis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_white">
                            <i class="fas fa-laptop-code icon"></i>
                            <br>
                            <br>
                            <h3>coding</h3>
                            <div class="div_flex">
                                <div class="div_before">
                                    <h1>04</h1>
                                </div>
                                <div class="">
                                    <p>detalis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_white">
                            <i class="fas fa-palette icon"></i>
                            <br>
                            <br>
                            <h3>security</h3>
                            <div class="div_flex">
                                <div class="div_before">
                                    <h1>05</h1>
                                </div>
                                <div class="">
                                    <p>detalis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="div_white">
                            <i class="fas fa-bullhorn icon"></i>
                            <br>
                            <br>
                            <h3>marketing</h3>
                            <div class="div_flex">
                                <div class="div_before">
                                    <h1>06</h1>
                                </div>
                                <div class="">
                                    <p>detalis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services -->
        <!-- start skills -->
        <div class="div_skills" id="skills">
            <div class="div_border">
                <h2 class="my_h2">OUR SKILLS</h2>
            </div>
            <div class="div_flex">
                <div class="div_image">
                    <img src="image4/skills.png" alt="">
                </div>
                <div class="div_input">
                    <p>HTML</p>
                    <div class="div_html">
                        <span style="width: 400px;"></span>
                        <span class="span">80%</span>
                    </div>
                    <br>
                    <p>CSS</p>
                    <div class="div_html">
                        <span style="width: 80%;"></span>
                        <span class="span">85%</span>
                    </div>
                    <br>
                    <p>javascript</p>
                    <div class="div_html">
                        <span style="width: 70%;"></span>
                        <span class="span">70%</span>
                    </div>
                    <br>
                    <p>php</p>
                    <div class="div_html">
                        <span style="width: 80%;"></span>
                        <span class="span">80%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end skills -->
        <!-- start works -->
        <div class="div_works" id="works">
            <div class="div_border">
                <h2 class="my_h2">HOWITWORKS?</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 image_laptop">
                        <img src="image4/work-steps.png" alt="">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="div_flex">
                            <div class="div_image">
                                <img src="image4/work-steps-1.png" alt="">
                            </div>
                            <div class="div_h1_p">
                                <h5>business analysis</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae nostrum quod
                                    perspiciatis itaque, unde similique suscipit sapiente aliquid libero.</p>
                            </div>
                        </div>
                        <div class="div_flex">
                            <div class="div_image">
                                <img src="image4/work-steps-2.png" alt="">
                            </div>
                            <div class="div_h1_p">
                                <h5>business analysis</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae nostrum quod
                                    perspiciatis itaque, unde similique suscipit sapiente aliquid libero.</p>
                            </div>
                        </div>
                        <div class="div_flex">
                            <div class="div_image">
                                <img src="image4/work-steps-3.png" alt="">
                            </div>
                            <div class="div_h1_p">
                                <h5>business analysis</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae nostrum quod
                                    perspiciatis itaque, unde similique suscipit sapiente aliquid libero.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end works -->
        <!-- start latest -->
        <div class="div_latest" id="latest">
            <div class="div_border">
                <h2 class="my_h2">lATESTEVENTS</h2>
            </div>
            <div class="div_image">
                <img src="image4/dots.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 div_image1">
                        <img src="image4/events.png" alt="">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-5 col-lg-3">
                                    <h1>0-8</h1>
                                    <hr>
                                    <p>days</p>
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-3">
                                    <h1>0-2</h1>
                                    <hr>
                                    <p>hours</p>
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-2">
                                    <h1>0-39</h1>
                                    <hr>
                                    <p>minutes</p>
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-3">
                                    <h1>0-9</h1>
                                    <hr>
                                    <p>seconds</p>
                                </div>
                            </div>
                            <br>
                            <div class="div_center">
                                <h3>tech masters event 2023</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, aliquid excepturi minus tempore
                                    magnam sed ut id quaerat laborum nam velit iure debitis minima laudantium quos rerum totam in
                                    tenetur?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div_image2">
                <img src="image4/dots.png" alt="">
            </div>
            <br>
            <div class="div_mycenter">
                <form action="" method="">
                    <input type="text" class="input1" placeholder="Enter Your Email">
                    <input type="submit" value="subscribe" class="input2">
                </form>
            </div>
        </div>
        <!-- end latest -->
        <!-- start pricing -->
        <div class="div_pricing" id="pricing">
            <div class="div_border">
                <h2 class="my_h2">PRICING PLANS</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="my_col">
                            <h4>basic</h4>
                            <br>
                            <i class="fas fa-book icon"></i>
                            <?php

                            $table = $data->query("select * from table_products where id = 1");

                            if ($table->num_rows > 0) {
                                while ($row = $table->fetch_assoc()) {
                                    print "<h1>" . $row["salary"] . "</h1>";
                                }
                            }
                            ?>
                            <p>pre month</p>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["item"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["address"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["support"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["my_database"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["buss"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["address1"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["support1"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["my_database1"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <?php

                            $table = $data->query("select * from table_products where id = 1");

                            if ($table->num_rows > 0) {
                                while ($row = $table->fetch_assoc()) {
                                    print "<a href='update_products.php?id3=" . $row["id"] . "'><button type='button' class='btn btn-outline-primary my_button'>choose plan</button></a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="margin-top: 0%;">
                        <div class="my_col">
                            <h4>advanced</h4>
                            <br>
                            <i class="fas fa-network-wired icon"></i>
                            <?php

                            $table = $data->query("select * from table_products where id = 2");

                            if ($table->num_rows > 0) {
                                while ($row = $table->fetch_assoc()) {
                                    print "<h1>" . $row["salary"] . "</h1>";
                                }
                            }
                            ?>
                            <p>pre month</p>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["item"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["address"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["support"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["my_database"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["buss"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["address1"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["support1"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["my_database1"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <?php

                            $table = $data->query("select * from table_products where id = 2");

                            if ($table->num_rows > 0) {
                                while ($row = $table->fetch_assoc()) {
                                    print "<a href='update_products.php?id3=" . $row["id"] . "'><button type='button' class='btn btn-outline-primary my_button'>choose plan</button></a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="my_col">
                            <h4>professional</h4>
                            <br>
                            <i class="fas fa-book icon"></i>
                            <?php

                            $table = $data->query("select * from table_products where id = 3");

                            if ($table->num_rows > 0) {
                                while ($row = $table->fetch_assoc()) {
                                    print "<h1>" . $row["salary"] . "</h1>";
                                }
                            }
                            ?>
                            <p>pre month</p>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["item"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["address"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["support"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["my_database"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["buss"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["address1"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["support1"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="d_flex">
                                <i class="fas fa-check my_icon"></i>
                                <?php

                                $table = $data->query("select * from table_products where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<p>" . $row["my_database1"] . "</p>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <?php

                            $table = $data->query("select * from table_products where id = 3");

                            if ($table->num_rows > 0) {
                                while ($row = $table->fetch_assoc()) {
                                    print "<a href='update_products.php?id3=" . $row["id"] . "'><button type='button' class='btn btn-outline-primary my_button'>choose plan</button></a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end pricing -->
        <!-- start video -->
        <div class="div_video" id="video">
            <div class="div_border">
                <h2 class="my_h2">TOP VIDEOS</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-3 my_color">
                        <div class="my_flex">
                            <p>top videos</p>
                            <i class="fas fa-play"></i>
                        </div>
                        <hr>
                        <?php

                        $table = $data->query("select * from movies where id = 1");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<a href='movie.php?id4=" . $row["id"] . "' style='color: black; text-decoration: none;'>";
                            }
                        }
                        ?>
                        <div class="div_p">
                            <p>how to create sub domain</p>
                            <p class="p_time">05:18</p>
                        </div>
                        </a>
                        <hr>
                        <?php

                        $table = $data->query("select * from movies where id = 2");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<a href='movie.php?id4=" . $row["id"] . "' style='color: black; text-decoration: none;'>";
                            }
                        }
                        ?>
                        <div class="div_p">
                            <p>playing with the dNS</p>
                            <p class="p_time">03:18</p>
                        </div>
                        </a>
                        <hr>
                        <?php

                        $table = $data->query("select * from movies where id = 3");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<a href='movie.php?id4=" . $row["id"] . "' style='color: black; text-decoration: none;'>";
                            }
                        }
                        ?>
                        <div class="div_p">
                            <p>everything about the virtual hosts</p>
                            <p class="p_time">05:25</p>
                        </div>
                        </a>
                        <hr>
                        <?php

                        $table = $data->query("select * from movies where id = 4");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<a href='movie.php?id4=" . $row["id"] . "' style='color: black; text-decoration: none;'>";
                            }
                        }
                        ?>
                        <div class="div_p">
                            <p>how to monitor your website</p>
                            <p class="p_time">04:16</p>
                        </div>
                        </a>
                        <hr>
                        <?php

                        $table = $data->query("select * from movies where id = 5");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<a href='movie.php?id4=" . $row["id"] . "' style='color: black; text-decoration: none;'>";
                            }
                        }
                        ?>
                        <div class="div_p">
                            <p>uncharted beating the last boss</p>
                            <p class="p_time">07:48</p>
                        </div>
                        </a>
                        <hr>
                        <?php

                        $table = $data->query("select * from movies where id = 6");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<a href='movie.php?id4=" . $row["id"] . "' style='color: black; text-decoration: none;'>";
                            }
                        }
                        ?>
                        <div class="div_p">
                            <p>ys oath in felghana overview</p>
                            <p class="p_time">03:12</p>
                        </div>
                        </a>
                        <hr>
                        <?php

                        $table = $data->query("select * from movies where id = 7");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<a href='movie.php?id4=" . $row["id"] . "' style='color: black; text-decoration: none;'>";
                            }
                        }
                        ?>
                        <div class="div_p">
                            <p>ys series all games ending</p>
                            <p class="p_time">08:10</p>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-12 col-lg-9 div_image">
                        <img src="image4/video-preview.jpg" alt="">
                        <p class="p_padding">everything about the virtual hosts</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end video -->
        <!-- start stats -->
        <div class="div_stats" id="our">
            <h1>our awesome stats</h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="louk_color">
                            <i class="fas fa-user my_icon"></i>
                            <h1>150</h1>
                            <p>clients</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="louk_color">
                            <i class="fa-solid fa-code my_icon"></i>
                            <h1>135</h1>
                            <p>projects</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="louk_color">
                            <i class="fas fa-globe-americas my_icon"></i>
                            <h1>50</h1>
                            <p>countries</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="louk_color">
                            <i class="fas fa-money-bill my_icon"></i>
                            <h1>500</h1>
                            <p>money</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end stats -->
        <!-- start form -->
        <div class="div_form" id="form">
            <div class="mydiv_flex">
                <div class="louk_image">
                    <h1>we have a discount</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit exercitationem cum placeat enim
                        maxime nam! Minus est cumque veniam ab labore quo animi laudantium, assumenda, explicabo, nam
                        velit provident voluptates.</p>
                    <img src="image4/discount.png" alt="">
                </div>
                <div class="louk_form">
                    <h1>request a discount</h1>
                    <br>
                    <br>
                    <?php

                    if (isset($_GET["button"])) {

                        $my_name = $_GET["name"];
                        $my_email = $_GET["email"];
                        $my_phone = $_GET["phone"];
                        $my_masseg = $_GET["masseg"];

                        $table = $data->query("UPDATE `communication` SET `name`='$my_name',`email`='$my_email',`phone`='$my_phone',`masseg`='$my_masseg' WHERE email = '$my_email'");

                        if ($table > 0) {
                            print "تم ارسال الرسالة بنجاح";
                        } else {
                            print "يوجد خطا";
                        }
                    }
                    ?>
                    <form action="" method="GET">
                        <input type="text" placeholder="your name" name="name" require>
                        <br>
                        <br>
                        <input type="text" placeholder="your email" name="email" require>
                        <br>
                        <br>
                        <input type="text" placeholder="your phone" name="phone" require>
                        <br>
                        <br>
                        <textarea placeholder="tell us about your needs" name="masseg" require></textarea>
                        <br>
                        <br>
                        <input type="submit" class="my_btn" value="send" name="button">
                    </form>
                </div>
            </div>
        </div>
        <!-- end form -->
        <!-- start footer -->
        <div class="div_footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <h1>elzero</h1>
                        <a href="https://www.facebook.com/profile.php?id=100004618546632"><i class="fab fa-facebook-f icon"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100004618546632"><i class="fab fa-twitter icon"></i></a>
                        <a href="https://www.youtube.com/channel/UCUQZ1CpDjyzT4N8taQlA32A"><i class="fab fa-youtube icon"></i></a>
                        <br>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo rerum id saepe ipsum ducimus
                            hic. Assumenda corrupti nesciunt ut</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="div_hr">
                            <div class="div_flex">
                                <i class="fas fa-arrow-right my_icon"></i>
                                <p>important link 1</p>
                            </div>
                            <hr style="color: white;">
                        </div>
                        <div class="div_hr">
                            <div class="div_flex">
                                <i class="fas fa-arrow-right my_icon"></i>
                                <p>important link 2</p>
                            </div>
                            <hr style="color: white;">
                        </div>
                        <div class="div_hr">
                            <div class="div_flex">
                                <i class="fas fa-arrow-right my_icon"></i>
                                <p>important link 3</p>
                            </div>
                            <div class="div_hr">
                            </div>
                            <hr style="color: white;">
                            <div class="div_flex">
                                <i class="fas fa-arrow-right my_icon"></i>
                                <p>important link 4</p>
                            </div>
                        </div>
                        <div class="div_hr">
                            <hr style="color: white;">
                            <div class="div_flex">
                                <i class="fas fa-arrow-right my_icon"></i>
                                <p>important link 5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="div_flex">
                            <i class="fas fa-map-marker-alt icon_tiem"></i>
                            <p>egypt, giza, inside the sphinx,<br>room number 220</p>
                        </div>
                        <div class="div_flex">
                            <i class="fas fa-clock icon_tiem"></i>
                            <p>business hours:from 10:00 to<br>18:00</p>
                        </div>
                        <div class="div_flex">
                            <i class="fas fa-phone-volume icon_tiem"></i>
                            <p>+20123456789<br>+20198765432</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="div_flex">
                            <img src="image4/gallery-01 (1).png" alt="">
                            <img src="image4/gallery-02 (1).png" alt="">
                            <img src="image4/gallery-03 (1).jpg" alt="">
                        </div>
                        <div class="div_flex">
                            <img src="image4/gallery-04 (1).png" alt="">
                            <img src="image4/gallery-05 (1).jpg" alt="">
                            <img src="image4/gallery-06 (1).png" alt="">
                        </div>
                    </div>
                </div>
                <hr>
                <p class="footer_p">made with <3 by elzero</p>
            </div>
        </div>
        <!-- end footer -->
    </div>
</body>
<script src="bootstrap4/js4/all.min.js"></script>
<script src="bootstrap4/js4/bootstrap.bundle.min.js"></script>
<script src="bootstrap4/js4/indx.js"></script>

</html>