<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Patient Care</title>
    <link rel="icon" href="frontendmem/img/2.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontendmem/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="frontendmem/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="frontendmem/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="frontendmem/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="frontendmem/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="frontendmem/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="frontendmem/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="frontendmem/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="frontendmem/css/style.css">
</head>

<body>
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="frontend/img/PatientCare.png" alt="logo" class="w-100"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/"><h4>Home</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about"><h4>About</h4></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#contactus"><h4>Contact</h4></a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h4>Registered Parties</h4>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="Memdoc"><p align="center"><strong>Doctors</strong></p></a>
                                        <a class="dropdown-item" href="Memhos"><p align="center"><strong>Hospitals</strong></p></a>
                                        <a class="dropdown-item" href="Memlabs"><p align="center"><strong>Laboratories</strong></p></a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        @if (Route::has('login'))
                    @auth
                        <a class="btn_2 d-none d-lg-block" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn_2 d-none d-lg-block mr-3" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn_2 d-none d-lg-block" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            @endif
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <center><img src="frontendmem/img/rlab.png" alt="" height="200" width="300"></center>
                            <h1 style="color:white;font-size:50px;"align="center">Registered Laboratories</h1>

                            
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- Search bar start-->
    <section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
        </script>
        
<br>
        
</section>
        
        <!-- Search bar end-->
    
        <!-- table start-->
        <div class="container d-flex  justify-content-center align-items-center mr-5">
    @foreach ($labs as $row)
    <center>
        <div class="row">
            <div class="col-10">
            <div class="card">
                <div class="card-header"><strong>{{$row->name}}</strong></div>
                <div class="card-body">
                    <img src="storage\<?php echo $row->image; ?>" class="w-50"><br>
                    <strong>{{$row->name}}</strong><br>
                    <strong>Email : </strong>{{$row->email}}<br>
                    <strong>Contact : </strong>{{$row->contact}}<br>
                    <strong>Address : </strong>{{$row->address}}<br>
                    <strong>Reg No : </strong>{{$row->regno}}<br>
                </div>
            </div>
            <br>
        </div>
    </div>
    </center>
    @endforeach
</div>
{{ $labs->links() }}
    <!-- table end-->

    
    <!-- footer part start-->
    <footer class="footer-area" id="contactus">
        <div class="footer section" style="padding:5%;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"><img src="frontendmem/img/PatientCare.png" alt="logo" height="60" width="500"></a><br>


                        <div class="social_logo" align="center">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>

                    </div>

                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4 align="center">Quick Links</h4>
                        <ul align="center">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Registered Parties</a></li>
                        </ul>
                    </div>

                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4 align="center">Our Partners</h4>

                        <ul align="center">

                            <a href="http://www.health.gov.lk/moh_final/english/hospital_government.php?spid=24"><i><img src="frontendmem/img/ministry.png" height="55" width="40"></i><br></a><p style="text-align:center">Ministry of Health</p> <br>
                            <a href="https://www.srilankamedicalcouncil.org/index.php"><i><img src="frontendmem/img/slmc.jpg" height="40" width="70"></i><br></a><p style="text-align:center"> Sri Lanka Medical Council</p> <br>
                        </ul>

                    </div>


                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4 align="center">Contact Us</h4>
                        <ul>
                            <a href="#"><i><img src="frontendmem/img/phone.png" height="40" width="40"></i></a> +94 11 7279279 <br>
                            <a href="mailto:patientcarelk@gmail.com"><i><img src="frontendmem/img/email.png" height="40" width="40"></i></a> Email Us <br>
                            <a href="#"><i><img src="frontendmem/img/fax.png" height="40" width="40"></i></a> +94 11 1473496 <br>
                            <a href="https://goo.gl/maps/ZPE8P5wjRXuKLzu3A"><i><img src="frontendmem/img/location.png" height="40" width="40"></i></a> Our Location <br>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text" align="center">

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PatientCare</i>

</p>

                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="frontendmem/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="frontendmem/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="frontendmem/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="frontendmem/js/owl.carousel.min.js"></script>
    <script src="frontendmem/js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="frontendmem/js/jquery.ajaxchimp.min.js"></script>
    <script src="frontendmem/js/jquery.form.js"></script>
    <script src="frontendmem/js/jquery.validate.min.js"></script>
    <script src="frontendmem/js/mail-script.js"></script>
    <script src="frontendmem/js/contact.js"></script>
    <!-- custom js -->
    <script src="frontendmem/js/custom.js"></script>
</body>

</html>
