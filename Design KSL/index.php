<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelompok Studi Linux |  Universitas Budi Luhur</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
</head>

<body id="particles-js">
    
        
    <ul class="nav p-2 bg-light rounded">

        <li class="nav-item">
            <a target="__blank" class="nav-link text-dark" href="https://www.budiluhur.ac.id/" rel="nofollow">Web Budiluhur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#">Contant us</a>
        </li>

    </ul>
    <div class="jumbotron jumbotron-fluid bg-info text-white rounded">
        <div class="container d-flex">
            <img src="assets/img/logo.png" alt="logo KSL" title="Logo KSL" width="80" height="80" class="mr-2" />
            <h1 class="display-1">KSL Budiluhur</h1>
        </div>
    </div>
    <?php include_once "navbar.php"; ?>
    
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-2">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-uppercase info-title">
                            <span class="font-weight-bold">Kelompok Studi Linux</span> |
                            <span class="text-muted">Universitas Budi Luhur</span>
                        </div>

                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://dummyimage.com/1100x500/000/fff" alt="Los Angeles"
                                        class="img-fluid" />
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1100x500/000/fff" alt="Chicago"
                                        class="img-fluid" />
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1100x500/000/fff" alt="New York"
                                        class="img-fluid" />
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>

                        <div class="another-post">
                            <div class="row">

                               <?php include_once "bagan_home_artikel.php"; ?>

                                <ul class="pagination pagination-md mx-auto mt-5">
                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>

                                <!-- </row -->
                            </div>

                            <!-- </another-post -->
                        </div>

                        <!-- </card-body -->
                    </div>

                    <!-- </card -->
                </div>

                <!-- </col-md-8 -->
            </div>
            <div class="col-md-2"></div>

            <!-- </row -->
        </div>

        <!-- </container-fluid -->
    </div>

    <div class="jumbotron d-flex bg-dark text-white container-fluid" style="margin-bottom:0">
        © ? - 2019 KSL Universitas Budi Luhur

        <div class="sosmed ml-auto">
            <a href="" rel="nofollow" class="text-white ml-2"><i class="fab fa-2x fa-facebook-square"></i></a>
            <a href="" rel="nofollow" class="text-white ml-2"><i class="fab fa-2x fa-twitter"></i></a>
            <a href="" rel="nofollow" class="text-white ml-2"><i class="fab fa-2x fa-instagram"></i></a>
            <a href="" rel="nofollow" class="text-white ml-2"><i class="fab fa-2x fa-youtube"></i></a>
        </div>
    </div>

    <button id="topBtn" class="btn btn-info"><i class="fas fa-arrow-up"></i></button>



    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/style.js"></script>
    <script src="assets/I-Miss-You/jquery.iMissYou.js"></script>
    
    <script>
        AOS.init();
        $.iMissYou({
            title: "I Miss you !"
            // favicon: {
            //     enabled: true,
            //     src:'assets/I-Miss-You/iMissYouFavicon.ico'
            // }
        });
    </script>

</body>

</html>
