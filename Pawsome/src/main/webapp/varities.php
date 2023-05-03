<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PAWESOME</title>
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
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="varities.php" class="nav-item nav-link active" >Varieties</a>
                                <a href="posting.php" class="nav-item nav-link">Post a pet</a>
                                <a href="testimonial.php" class="nav-item nav-link">Testimonials</a>
                                <a href="room.php" class="nav-item nav-link">Pets</a>

                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                                <a href="donation.php" class="nav-item nav-link">Donate</a>

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


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpeg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Our Breeds</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                <form action="reviewAdd.php" method="post"> 
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <div class="date" data-target-input="nearest">
                                        <input type="text" name="review" class="form-control datetimepicker-input"
                                            placeholder="Give your live review!!! 🤗🐇"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Variety Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Breeds</h6>
                    <br>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Varieties</span></h1>
                    <button onclick="loadDoc()" class="btn btn-success w-30" id="loadbtn">Load breeds from XML</button>
                    <br>
                </div>

                <div class="row g-4" id="target">

                </div>
            </div>
        </div>
        <!-- Variety End -->



        <!-- Review Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Give Us Your Live <span class="text-primary text-uppercase">Review 🔥</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 650px;">
                                <form action="reviewAdd.php" method="post"> 
                                    <input class="form-control w-200 h-100 py-3 ps-4 pe-5" type="text" name="review" placeholder="Type your review">
                                    <button type="submit" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Review End -->
        

        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.php"><h1 class="text-white text-uppercase mb-3">Pawesome</h1></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>No.12, Main Road, Chennai</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>shakthisri504@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


    </div>

    <script>
        function loadDoc() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              myFunction(this);
            }
          };
          xhttp.open("GET", "varities.xml", true);
          xhttp.send();
        }
        function myFunction(xml) {
          var i;
          var xmlDoc = xml.responseXML;
          var content = "";
          var x = xmlDoc.getElementsByTagName("VARIETY");
          for (i = 0; i <x.length; i++) { 
            content +=  ' <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.' + (i+1) + 's"> ' +
                       '    <a class="service-item rounded" href=""> ' +
                                '<div class="service-icon bg-transparent border rounded p-1">' +
                                    '<div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">' +
                                        '<i class="fa fa-' + x[i].getElementsByTagName("ICON")[0].childNodes[0].nodeValue + ' fa-2x text-primary"></i>' +
                                    '</div>' +
                                '</div>' +
                                '<h6 class="mb-3 text-muted">Count - ' + x[i].getElementsByTagName("COUNT")[0].childNodes[0].nodeValue + '</h6>' +
                                '<h5 class="mb-3">' + x[i].getElementsByTagName("BREED")[0].childNodes[0].nodeValue + '</h5>' +
                                '<h6 class="mb-3">' + x[i].getElementsByTagName("TYPE")[0].childNodes[0].nodeValue + ' - <i class="fa fa-dollar-sign text-primary"></i> ' + x[i].getElementsByTagName("AVGPRICE")[0].childNodes[0].nodeValue + '</h6>' +

                                '<p class="text-body mb-0">' + x[i].getElementsByTagName("DESC")[0].childNodes[0].nodeValue + '</p>' +
                            '</a>' +
                        '</div>';
          }
          document.getElementById("target").innerHTML = content;
          document.getElementById("loadbtn").style.display = "none";
        }
    </script>

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






<!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dog fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Dogs</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div> -->