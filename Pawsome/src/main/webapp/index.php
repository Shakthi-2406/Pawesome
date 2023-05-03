<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pawesome</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Pawesome</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Pawesome</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="varities.php" class="nav-item nav-link" >Varieties</a>
                                <a href="posting.php" class="nav-item nav-link">Post a pet</a>
                                <a href="testimonial.php" class="nav-item nav-link">Testimonials</a>
                                <a href="room.php" class="nav-item nav-link">Pets</a>
                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                                <a href="donation.php" class="nav-item nav-link">Donate</a>
                                <a href="http://localhost:8081/Pawsome/myServlet" class="nav-item nav-link">Session</a>
                            </div>
                            <?php
                                if(isset($_COOKIE["uname"]) && $_COOKIE['uname'] != 'no')
                                        echo '<a href="http://localhost:8081/Pawsome/logout.jsp" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Log Out<i class="fa fa-arrow-right ms-3"></i></a>';
                                else
                                    echo '<a href="http://localhost:8081/Pawsome/login.jsp" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Sign In / Log In<i class="fa fa-arrow-right ms-3"></i></a>';
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">It's Pawesome</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">A dog will come into your life if you are lucky</h1>
                                <a href="room.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">See pets</a>
                                <a href="posting.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Post your pet</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Meowing</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Post your pet and let others have them</h1>
                                <a href="room.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">See pets</a>
                                <a href="posting.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Post your pet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->





        <!-- About Start -->
        <?php
                include('database_connection.php');
                $query = "SELECT * FROM admin WHERE id=1";
                $statement = $connect->prepare($query);
                $statement->execute();
                $row = $statement->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Pawesome</span></h1>
                        <p class="mb-4">Welcome to our pet shop website! We sell a variety of pets and also provide a platform for pet lovers to donate to support animal shelters and share their pets. Join our community and find your new furry friend while making a difference in the lives of other pets in need.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-dog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">
                                        <?php echo $row["pets"]; ?>
                                        </h2>
                                        <p class="mb-0">Pets sold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-dollar-sign fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">
                                        <?php echo $row["amount"]; ?>
                                        </h2>
                                        <p class="mb-0">Donations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">
                                        <?php echo $row["clients"]; ?>
                                        </h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpeg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpeg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpeg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Meow Meow</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Cuties 🐇</span></h1>
                </div>
                <a  href="room.php">
                    <div class="row g-4" id="txtHint">
                        <?php
                            include("postGet3.php");
                        ?>
                    </div>
                </a>
            </div>
        </div>
        <!-- Room End -->



        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Types</h6>
                    <br>
                    <a href="varities.php"><button class="btn bg-white w-30" id="loadbtn">Explore our breeds</button></a>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Types</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="varities.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dog fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Dogs</h5>
                            <h6 class="mb-3 text-muted">Count - 100</h6>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="varities.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-cat fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Cats</h5>
                            <h6 class="mb-3 text-muted">Count - 500</h6>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>                   
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="varities.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Rabbits</h5>
                            <h6 class="mb-3 text-muted">Count - 70</h6>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Testimonial Start -->
        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <?php
                        include('reviews.php')
                    ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Donations Start -->
        <div class="container-xxl py-5" id="donations">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Blessings 💫</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Top Donators 💰</span></h1>
                </div>
                <div class="row g-4">
                    <?php
                        include("donationGet4.php");
                    ?>
                </div>
            </div>
        </div>
        <!-- Donations End -->

        <?php
            include("footer.php");
        ?>

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>