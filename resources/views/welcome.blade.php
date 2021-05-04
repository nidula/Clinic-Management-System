<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>eClinic</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="">eClinic</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#department-section" class="nav-link"><span>Department</span></a></li>
	          <!-- <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Doctors</span></a></li> -->
	          <!-- <li class="nav-item"><a href="#" class="nav-link"><span>Blog</span></a></li> -->
			  <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
			  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><span>Login</span></a></li>
              <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"><span>Register</span></a></li>
	          <!-- <li class="nav-item cta mr-md-2"><a href="appointment.html" class="nav-link">Appointment</a></li> -->
	        </ul>
	      </div>
	    </div>
        <!-- @if (Route::has('login'))
                    @auth
                        <a class="nav-item" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-item" href="{{ route('login') }}">Login</a>
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><span>Login</span></a></li>

                        @if (Route::has('register'))
                            <a class="nav-item" href="{{ route('register') }}">Register</a>
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"><span>Register</span></a></li>
                        @endif
                    @endauth
            @endif -->
	  </nav>
    <!-- ::header part start::
    <header class="main_menu home_menu">
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
    </header> -->
    <!-- Header part end-->

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bac1.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		<span class="subheading">Welcome to eClinic</span>
	            <h1 class="mb-4">We are here <br>for your Care</h1>
	            <p class="mb-4" style="text-align: justify;">Vaccines are the most cost-effective health care interventions there are. A dollar spent on a childhood vaccination not only helps save a life, but greatly reduces spending on future healthcare.</p>
	            <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Make an appointment</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">We Are <span>eClinic</span> keeps your medical details at your finger tip. </h2>
			            <p style="text-align: justify;">“eClinic” is a platform which helps patients to maintain their medical records.
                            It helps to store medical records and allow to view and update those medical records of a
                           specific a person to authorized parties.<br><br>
                           Patients, doctors, hospitals, and laboratories will be interacting with our website. Sri Lankan Medical Council and 
                           the Ministry of health will help us to verify the registered Doctors, Hospitals and Laboratories</p>
			            <p><a href="#contact-section" class="btn btn-secondary py-3 px-4">Contact us</a></p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
			<div class="container">
        <div class="row d-flex">
	        <div class="col-md-12 py-5">
	        	<div class="py-lg-5">
		        	<div class="row justify-content-center pb-5">
			          <div class="col-md-12 heading-section ftco-animate">
			            <h2 class="mb-3">Our Services</h2>
			          </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Services</h3>
			                <p>Providing comprehensive consultation and drug dispensary services</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Quality Medical Service</h3>
			                <p>Retrieving and maintaining patient history</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Digitalization</h3>
			                <p>Digitizing patient management and clinical care</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-24-hours"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">24 Hours Service</h3>
			                <p>Application resources are available at any time, as and when needed, 24 hours a day, 7 days a week.</p>
			              </div>
			            </div>      
			          </div>
			        </div>
			      </div>
		      </div>
		     
	        </div>
		    </div>
			</div>
		</section>

    <section class="ftco-intro img" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Your Closest hospital</h2>
						<!-- <p>We can manage your dream building A small river named Duden flows by their place</p> -->
						<p class="mb-0"><a href="https://www.google.com/search?safe=active&biw=1536&bih=722&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=ALeKk03A-vjgXJnE8vgCPufg5dN2N4EqyA:1610251480962&q=hospitals+in+sri+lanka&rflfq=1&num=10&ved=2ahUKEwiS7JWcvpDuAhXZQ30KHeVvC5oQtgN6BAgCEAc#rlfi=hd:;si:;mv:[[7.006203813118316,80.16571920803833],[6.809203805545446,79.78257101467895],null,[6.907714066862877,79.97414511135864],12]" class="btn btn-white px-4 py-3" target="_blank">Search Places</a></p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(images/dept-1.jpg);"></div>
    			</div>

    			<div class="col-md-8">
    				<div class="row no-gutters">
    					<div class="col-md-4">
							<a href="/nurology">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="/nurology">Neurology</a></h3>
    								
    							</div>
    						</div>
							</a>
							<a href="surgical">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="surgical">Surgical</a></h3>  								
    							</div>
    						</div>
							</a>
							<a href="dental">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="dental">Dental</a></h3>   								
    							</div>
    						</div>
							</a>
    					</div>
						<a href="opthalmology">
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="opthalmology">Opthalmology</a></h3>  								
    							</div>
    						</div>
							</a>
							<a href="cardiology">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="cardiology">Cardiology</a></h3> 								
    							</div>
    						</div>
							</a>
							<a href="traumatology">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="traumatology">Traumatology</a></h3>								
    							</div>
    						</div>
							</a>
    					</div>
						<a href="rheumatology">
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="rheumatology">Rheumatology</a></h3> 								
    							</div>
    						</div>
							</a>
							<a href="xray">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="xray">X-ray</a></h3>
    							</div>
    						</div>
							</a>
							<a href="dermatology">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="dermatology">Dermatology</a></h3>	
    							</div>
    						</div>
							</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Qualified Doctors</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-1.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. Naduni Erathna</h3>
								<span class="position mb-2">Neurologist</span>
								<div class="faded">
									<p>Care and dedication is the driving force behind our work.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/naduni.erathna" target="_blank"><span class="icon-facebook"></span></a></li>
		                <!-- <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li> -->
		                <li class="ftco-animate"><a href="https://www.instagram.com/nadunierathna/" target="_blank"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <!--<p><a href="#" class="btn btn-primary">Book now</a></p>-->
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. Nidula Chithwara</h3>
								<span class="position mb-2">Ophthalmologist</span>
								<div class="faded">
									<p>Total care, each day each minute, each second even every moment.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/nidula.chithwara/" target="_blank"><span class="icon-facebook"></span></a></li>
		                <!-- <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li> -->
		                <li class="ftco-animate"><a href="https://www.instagram.com/__nidda__99/" target="_blank"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <!--<p><a href="#" class="btn btn-primary">Book now</a></p>-->
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-3.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. Nipunika Nagahawatta</h3>
								<span class="position mb-2">Dentist</span>
								<div class="faded">
									<p>Our mission is to provide good health for everybody.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/nipunika.nagahawatta" target="_blank"><span class="icon-facebook"></span></a></li>
		                <!-- <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li> -->
		                <li class="ftco-animate"><a href="https://www.instagram.com/nipunikan_99/" target="_blank"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <!--<p><a href="#" class="btn btn-primary">Book now</a></p>-->
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-4.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. Supipi Roshanka</h3>
								<span class="position mb-2">Pediatrician</span>
								<div class="faded">
									<p>Your health must your priority otherwise it will be a hindrance in your path.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/supipi.roshanka" target="_blank"><span class="icon-facebook"></span></a></li>
		                <!-- <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li> -->
		                <li class="ftco-animate"><a href="https://www.instagram.com/roshu_._/" target="_blank"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <!--<p><a href="#" class="btn btn-primary">Book now</a></p>-->
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section testimony-section img" style="background-image: url(images/bg_3.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Read testimonials</span>
            <h2 class="mb-4">Our Patient Says</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">They may forget your name, but they will never forget how you made them feel.</p>
                    <p class="name">Ashen Palihakkara</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">You treat a disease, you win, you lose. You treat a person, I guarantee you, you’ll win, no matter what the outcome.</p>
                    <p class="name">Pasan Erathna</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">It doesn’t take an instant more, or cost a penny more, to be empathetic than it does to be indifferent.</p>
                    <p class="name">Dasuni Hansana</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">Kind words can be short and easy to speak, but their echos are truly endless.</p>
                    <p class="name">Dilitha Ranjuna</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">Good customer service costs less than bad customer service.</p>
                    <p class="name">Lohan Dewasurendra</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Us</h2>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p style=color:#000;>1D F3 U8, Ariyana Apartments, Annasiwatta Road, Athurugiriya.</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://+94 71 1323 563">+94 71 1323 563</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>	
	            <p><a href="https://mail.google.com/mail/u/0/?tab=rm#inbox?compose=CllgCJZWPrddRlTjdsPxBJxrCtkQslgDwQFGDxKpfTMwjpMWNWpMfkzzLkFKNgFBgNDSQjQRfPL" target=_blank>hchithwara@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">www.eClinic.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row no-gutters block-9">
          
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section img" style="background-image: url(images/footer-bg.jpg);">
    	<div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mediplus</h2>
              <p>The art of medicine consists of amusing the patient while nature cures the disease.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/chithwara" target="_blank"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/nidula.chithwara/" target="_blank"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/__nidda__99/" target="_blank"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Departments</h2>
              <ul class="list-unstyled">
                <li><a href="nurology"><span class="icon-long-arrow-right mr-2"></span>Neurology</a></li>
                <li><a href="opthalmology"><span class="icon-long-arrow-right mr-2"></span>Opthalmology</a></li>
                <li><a href="rheumatology"><span class="icon-long-arrow-right mr-2"></span>Rheumatology</a></li>
                <li><a href="surgical"><span class="icon-long-arrow-right mr-2"></span>Surgical</a></li>
                <li><a href="cardiology"><span class="icon-long-arrow-right mr-2"></span>Cardiology</a></li>
                <li><a href="dental"><span class="icon-long-arrow-right mr-2"></span>Dental</a></li>
				<li><a href="xray"><span class="icon-long-arrow-right mr-2"></span>X-Ray</a></li>
				<li><a href="traumatology"><span class="icon-long-arrow-right mr-2"></span>Traumatology</a></li>
				<li><a href="dermatology"><span class="icon-long-arrow-right mr-2"></span>Dermatology</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#department-section"><span class="icon-long-arrow-right mr-2"></span>Departments</a></li>
                <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li style=color:#217dff;><span class="icon-long-arrow-right mr-2"></span>Emergency Services</li>
                <li style=color:#217dff;><span class="icon-long-arrow-right mr-2"></span>Qualified Doctors</li>
                <li style=color:#217dff;><span class="icon-long-arrow-right mr-2"></span>Outdoors Checkup</li>
                <li style=color:#217dff;><span class="icon-long-arrow-right mr-2"></span>24 Hours Services</li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">1D F3 U8, Ariyana Apartments, Annasiwatta Road, Athurugiriya.</span></li>
	                <li><a href="tel://+94 71 1323 563"><span class="icon icon-phone"></span><span class="text">+94 71 1323 563</span></a></li>
	                <li><a href="https://mail.google.com/mail/u/0/?tab=rm#inbox?compose=CllgCJZWPrddRlTjdsPxBJxrCtkQslgDwQFGDxKpfTMwjpMWNWpMfkzzLkFKNgFBgNDSQjQRfPL" target="_blank"	><span class="icon icon-envelope pr-4"></span><span class="text">hchithwara@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
       
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</body>

</html>
