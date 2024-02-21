<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portal - SDI Kabupaten Semarang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="portal/img/bitmap22.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="portal/lib/animate/animate.min.css" rel="stylesheet">
    <link href="portal/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="portal/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="portal/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="portal/css/style.css" rel="stylesheet">

    <!-- CSS Added -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <style>
        
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">

                    <h4 class="text-primary m-0"><img src="portal/img/logo3.png" alt="Logo"> Kabupaten Semarang</h4>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#searchModal" class="nav-item nav-link toggle-icon" aria-current="page"><i class="fa fa-search"></i></a>
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="https://data.semarangkab.go.id/ckan" target="_blank" class="nav-item nav-link" aria-current="page">Open Data</a>
                        <a href="https://statistikkominfo.semarangkab.go.id/" target="_blank" class="nav-item nav-link">Statistik Sektoral</a>
                        <a href="http://gis.semarangkab.go.id/" target="_blank" class="nav-item nav-link">Data Spasial</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> -->
                        <!-- <a href="contact.html" class="nav-item nav-link">Publikasi</a> -->
                    </div>
                    <a href="#publikasi" class="btn btn-primary py-2 px-4">Infografis</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-7  text-lg-start">
                            <h2 class="text-white m-0" style="text-decoration: underline;
                            text-decoration-color: red"> Portal</h2>
                            <h1 class=" display-2 text-white animated slideInLeft"> Satu Data</h1>
                            <h3 class="text-white animated slideInLeft">Kabupaten Semarang</h3>
                            <br>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Satu Data Kabupaten Semarang merupakan kebijakan tata kelola data pemerintah yang bertujuan untuk menciptakan data berkualitas mudah diakses, dan dapat dibagipakaikan antar semua perangkat daerah di Kabupaten Semarang dan Pemerintah Pusat. Satu Data Kabupaten Semarang merupakan amanat Peraturan Presiden Nomor 39 Tahun 2019 Tentang Satu Data Indonesia.
                                <br>Melalui Satu Data Kabupaten Semarang, seluruh data Pemerintah Daerah Kabupaten Semarang dan data instansi lain yang terkait dapat bermuara di Portal Satu Data indonesia. Melalaui Portal Satu Data Kabupaten Semarang kami berupaya penuh untuk memperbaiki tata kelola data demi terwujudnya transparansi dan akuntabilitas pemerintah, serta mendukung pembangunan nasional
                            </p>
                            <a href="#tentangkami" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Pelajari Lebih Lanjut</a>
                            <a href="https://data.semarangkab.go.id/dashboard" target="_blank" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Dashboard</a>
                        </div>
                        <div class="col-lg-5 text-center text-lg-end overflow-hidden" style="position: relative; display: inline; ">
                            <img class="img-fluid" src="portal/img/background92.png" alt="" style="width: 200%;">
                            <!-- <a href="#">Image by GarryKillian</a> on Freepik -->
                            <img class="img-fluid" src="portal/img/maskott.png" alt="" style="animation: none !important; position: absolute; bottom: 0; right: 20px; height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Tautan Terkait</h5>
                    <h1 class="mb-5">Satu Data Kabupaten Semarang</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="https://data.semarangkab.go.id/satupeta/petadua" target="_blank"><img class="img-fluid" src="portal/img/satupeta.png" alt=""></a>
                            </div>
                            <h5 class="mb-0">Satu Peta</h5>
                            <small>Kabupaten Semarang</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="http://gis.semarangkab.go.id/" target="_blank"><img class="img-fluid" src="portal/img/big.png" alt=""></a>
                            </div>
                            <h5 class="mb-0">Geoportal</h5>
                            <small>Kabupaten Semarang</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="https://statistikkominfo.semarangkab.go.id/" target="_blank"><img class="img-fluid" src="portal/img/logobulat.png" alt=""></a>
                            </div>
                            <h5 class="mb-0">Statistik Sektoral</h5>
                            <small>Kabupaten Semarang</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="https://data.semarangkab.go.id/bps" target="_blank"><img class="img-fluid" src="portal/img/bps.png" alt=""></a>
                            </div>
                            <h5 class="mb-0">BPS</h5>
                            <small>Kabupaten Semarang</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        
        <!-- Testimonial Start -->
        <div id="publikasi" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Publikasi</h5>
                    <h1 class="mb-5">INFOGRAFIS</h1>
                     <ul id="filter">
                        <li><span class="" data-filter=".1, .2, .3, .4, .5, .6, .7, .8, .9, .10, .11, .12, .13">ALL</span></li>
                        <?php foreach ($infografi_categories as $infografi_category) : ?>
                        <li><span class="filter" data-filter="<?= $infografi_category['id'] ?>"><?= $infografi_category['name'] ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <hr>
                <div class="owl-carousel testimonial-carousel carousel slide" id="carouselExampleControls" data-bs-ride="carousel">
                <?php foreach ($infografis as $infografi) : ?>
                    <div class="testimonial-item bg-transparent border rounded p-4 img-item" data-cat="<?= $infografi['infograficategory_id'] ?>">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="<?= $infografi['image'] ?>" style="width: 300px; height: 400px;">
                            <div class="label">
                                <div class="label-bg"></div>
                            </div>
                        </div>
                        <p class="text-center">Sumber: BPS Kab.Semarang</p>
                    </div>
                <?php endforeach; ?>
                   
                   
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- EKSPERIMEN ANIMASI -->
    <div class="container">
        <ul id="filters" class="clearfix">
        <li><span class="filter active" data-filter=".1, .2, .3, .4, .5, .6, .7, .8, .9, .10, .11, .12, .13">All</span></li>
        <?php foreach ($infografi_categories as $infografi_category) : ?>
        <li><span class="filter" data-filter=".<?= $infografi_category['id'] ?>"><?= $infografi_category['name'] ?></span></li>
        <?php endforeach; ?>
        </ul>
      
      
      <div id="portfoliolist"> <!-- portofolios -->
      <?php foreach ($infografis as $infografi) : ?>  
        <div class="portfolio <?= $infografi['infograficategory_id'] ?>" data-cat="<?= $infografi['infograficategory_id'] ?>"> 	<!-- <div class="col-md-4 col-sm-6 portfolio web-design"> -->
            <div class="portfolio-wrapper">  <!-- <figure class="portfolio-image"> -->
            <img src="<?= $infografi['image'] ?>" alt="" style="width: 300px; height: 300px;"> <!-- <img src="images/work/work-1.jpg" alt="" class="img-responsive"> -->
                <div class="label"> <!-- <figcaption class="caption text-center"> -->
                    <div class="label-text"> <!-- <div class="caption-content"> -->
                    <a class="text-title"><?= $infografi['title'] ?></a> 	
                    <!-- <ul class="portfolio-link">
						<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
					</ul> -->
                    </div>
                    <!-- <div class="label-bg"></div> -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
      </div>
    </div>


		
			
			
				
				
					
				</div>
			</figcaption>
		</figure>
	</div>
        <!-- EKSEPRIMEN ANIMASI END -->





        <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="portal/img/jumlah_pedagang.png" class="d-block w-100" alt="..." style="width: 300px; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="portal/img/jumlah_pedagang.png" class="d-block w-100" alt="..." style="width: 300px; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="portal/img/jumlah_pedagang.png" class="d-block w-100" alt="..." style="width: 300px; height: 400px;">
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
</div> -->
		
		<!-- Publikasi Buku Start -->
		 <div id="publikasi" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Publikasi</h5>
                    <h1 class="mb-5">BUKU STATISTIK</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    
					<div class="testimonial-item bg-transparent border rounded p-4 pdf-item"  data-pdf="portal/img/BukuStatistik23.pdf">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="portal/img/St23.png" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="portal/img/Buku4th23.pdf" >
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="portal/img/Buku4th23.jpg" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="portal/img/Buku1th23.pdf">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="portal/img/Buku1th23.jpg" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>
            
                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="portal/img/Buku2th23.pdf">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="portal/img/Buku2th23.jpg" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="portal/img/Buku3th23.pdf">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="portal/img/Buku3th23.jpg" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="portal/img/Buku5th23.pdf">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="portal/img/Buku5th23.jpg" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>
                
                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="portal/img/BukuStatistikTh22.pdf">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="portal/img/BukuStatistikTh22.jpg" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="portal/img/BUKU-METADATA-STATISTIK-SEKTORAL.pdf">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="portal/img/METADATA-STATISTIK-SEKTORAL.png" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>    

					
                   
                </div>
            </div>
        </div>

        <!-- Publikasi Buku End -->

        <!-- Service Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Service End -->


        <!-- About Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="portal/img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="portal/img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="portal/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="portal/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- About End -->


        <!-- Menu Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-5.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-6.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-7.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-8.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-5.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-6.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-7.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-8.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-5.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-6.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-7.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="portal/img/menu-8.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Menu End -->


        <!-- Reservation Start -->
        <!-- <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/LZYu6D4XOE0" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1">
                                          <option value="1">People 1</option>
                                          <option value="2">People 2</option>
                                          <option value="3">People 3</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- \\16:9 aspect ratio -->
        <!-- <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Reservation Start -->
        <!-- About Start -->
        <div class="container-xxl py-1">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="portal/img/satudanu.png">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="portal/img/rawapening.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="portal/img/gedongsongo.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="portal/img/semilir.png">
                            </div>
                        </div>
                    </div>
                    <div id="tentangkami" class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami</h5>
                        <h1 class="mb-4">Selamat Datang di Satu Data Kabupaten Semarang</h1>
                        <p class="mb-4"> Satu Data Indonesia (SDI) Tingkat Kabupaten Semarang merupakan kebijakan tata kelola data pemerintah yang bertujuan untuk menciptakan data berkualitas, mudah diakses, dan dapat dibagipakaikan antar Instansi Pusat serta Kabupaten Semarang. Kebijakan ini tertuang dalam Peraturan Presiden no. 39 tahun 2019 tentang Satu Data Indonesia. Melalu SDI, seluruh data pemerintah dan data instansi lain yang terkait dapat bermuara di Portal Satu Data Indonesia (data.go.id). </p>

                        <p class="mb-4"></p>Pemerintah Kabupaten Semarang telah mendukung penerapan Satu Data Indonesia dengan merumuskan Peraturan Bupati Semarang Nomor Nomor 66 Tahun 2020 Tentang Penyelenggaraan Satu Data Indonesia Di Kabupaten Semarang, untuk mewujudkan data yang terpadu akurat dan dapat dibagi pakai kemanfaatan bagi pemerintah dan masyarakat.</p>

                        <p class="mb-4">Portal Satu Data Indonesia Tingkat Kabupaten Semarang merupakan portal resmi data terbuka Kabupaten Semarang yang dikelola oleh Dinas Komunikasi dan Informatika. Melalui Portal Satu Data Indonesia Tingkat kabupaten Semarang, kami berupaya penuh untuk memperbaiki tata kelola data demi terwujudnya transparansi dan akuntabilitas pemerintah Kabupaten Semarang, serta mendukung pembangunan nasional.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"><?= $data['visitor']; ?></h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Total Pengunjung</p>
                                        <h6 class="text-uppercase mb-0">Portal</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"></h1>
                                    <div class="ps-4">
                                        <p class="mb-0"></p>
                                        <h6 class="text-uppercase mb-0">Pengunjung</h6>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- About End -->



        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Penyelenggara Satu Data</h4>
                        <a class="btn btn-link" href="">Koordinator/Bapperida</a>
                        <a class="btn btn-link" href="">Pembina Data Statistik/BPS Kab. Semarang</a>
                        <a class="btn btn-link" href="">Pembina Data Spasila/DPU Kab. Semarang</a>
                        <a class="btn btn-link" href="">Walidata/Diskominfo Kab. Semarang</a>
                        <a class="btn btn-link" href="">Produsen Data</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Alamat</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Diponegoro No.mor 14, Sembungan, Ungaran, Kec. Ungaran Bar., Kabupaten Semarang, Jawa Tengah 50511</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(024) 76901553</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>(024) 76901553</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">BERDIKARI</h4>
                        <h5 class="text-light fw-normal">Bersatu, Berkepribadian, Sejahtera dan Mandiri </h5>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Mystery Code</a> | Dinas Kominfo Kab. Semarang.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- Creates the bootstrap modal where the image will appear -->
    <div class="modal fade" id="imagemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a download type="button" id="imagelink" class="btn btn-primary btn-sm" href="#"><span class="fa fa-download"></span> Unduh</a>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" aria-label="Close"><span class="fa fa-times"></span> Tutup</button>
                </div>
                <div class="modal-body">
                    <img src="" id="imagepreview" style="width: 100%;">
                </div>
                <div class="modal-footer">
                    <!-- <h3 style="text-align: left;">contoh 1</h3> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal while user select search engine in navbar -->
<div class="modal fade text-left" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content bg-transparent">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pencarian Data</h5>
                <button type="button" class="close bg-transparent" style="border: none;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
            <br>
            <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="search-input" placeholder="masukkan pencarian"/>
                <button class="btn btn-dark" type="button" id="search-button"><i class="fa fa-search"></i></button>
          </div>
            </form>
        </div>
    </div>
</div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="portal/lib/wow/wow.min.js"></script>
    <script src="portal/lib/easing/easing.min.js"></script>
    <script src="portal/lib/waypoints/waypoints.min.js"></script>
    <script src="portal/lib/counterup/counterup.min.js"></script>
    <script src="portal/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="portal/lib/tempusdominus/js/moment.min.js"></script>
    <script src="portal/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="portal/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- <script src="script.js"></script> -->

    <!-- <script src="visitor-counter.js"></script> -->
    <!-- Template Javascript -->
    <script src="portal/js/main.js"></script>

    <script>
        // // Get the modal
        // var modal = document.getElementById("myModal");

        // // Get the image and set it in the modal
        // var img = document.getElementsByClassName("img-fluid");
        // var modalImg = document.getElementById("modalImage");

        // img.onclick = function(){
        //   modal.style.display = "block";
        //   modalImg.src = this.src;
        // }

        // // Close the modal when the "x" is clicked
        // var closeBtn = document.getElementsByClassName("close")[0];
        // closeBtn.onclick = function() {
        //   modal.style.display = "none";
        // }

        // // Close the modal when clicking outside the modal
        // window.onload= function(event) {
        //   if (event.target == modal) {
        //     modal.style.display = "none";
        //   }
        // }

        $(".img-item").on("click", function() {
            $('#imagepreview').attr('src', $(this).find(".img-fluid").attr('src')); // here asign the image to the modal when the user click the enlarge link
            $('#imagelink').attr('href', $(this).find(".img-fluid").attr('src')); // here asign the image to the modal when the user click the enlarge link
            $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
        });
		
		$(".pdf-item").on("click", function() {
            $('#imagepreview').attr('src', $(this).find(".img-fluid").attr('src')); // here asign the image to the modal when the user click the enlarge link
            $('#imagelink').attr('href', $(this).data('pdf')); // here asign the image to the modal when the user click the enlarge link
            $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
        });

        // JavaScript to handle the toggle action
        document.getElementById("toggleLink").addEventListener("click", function() {
            // Toggle the target link
            let targetLink = document.getElementById("searchLink");
            if (targetLink.style.display === "none") {
                targetLink.style.display = "block";
            } else {
                targetLink.style.display = "none";
            }
        });
    </script>

    <!-- SCRIPT TAMBAHAN -->
    <script>
        // Fungsi untuk menghandle pencarian
        // function handleSearch() {
        //     const searchTerm = document.getElementById("search-input").value;
        //     const statURL = "https://data.semarangkab.go.id/ckan";

        //     // Membuka halaman pencarian CKAN dalam tab baru
        //     window.open(statURL + "/dataset?q=" + searchTerm);
        // }

        // // Menambahkan event listener untuk menghandle klik pada tombol "SEARCH"
        // document.getElementById("search-button").addEventListener("click", function(event) {
        //     event.preventDefault();
        //     handleSearch();
        // });

        // // Menambahkan event listener untuk menghandle tombol Enter
        // document.getElementById("search-input").addEventListener("keydown", function(event) {

        //     if (event.key === "Enter") {
        //         event.preventDefault();
        //         handleSearch();
        //     }
        // });

        
    </script>

</body>

</html>