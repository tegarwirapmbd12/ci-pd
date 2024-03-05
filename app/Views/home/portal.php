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
        /* CSS TEDI MUSANG KING */
.modal-dialog .input-group #search-input {
    border-radius: 20px 0 0 20px;
    border: none;
    } 
    .modal-dialog .input-group #search-button {
    border-radius: 0 20px 20px 0;
    background-color: #FEA116;
    border: none;
    } 
    ul {
        list-style-type: none;
        padding: 0;
        text-align: center; /* Center the text in the <ul> */
    }

    /* Style for each list item */
    li {
        display: inline-block;
        padding: 10px; 
    }
    li:hover{
        color:#FEA116;
        cursor: pointer;
        margin-bottom: 1px solid #FEA116;
    }

    
    /* .container {
        position: relative;
        width: 960px;
        margin: 0 auto;
        transition: all 1s ease;
      } */
      
      #filters {
        margin: 1%;
        padding: 0;
        list-style: none;
      }
      
      #filters li {
        float: left;
      }
      
      #filters li span {
        display: block;
        padding: 5px 20px;
        text-decoration: none;
        color: #666;
        cursor: pointer;
        transition: color 300ms ease-in-out;
      }
      
      #filters li span:hover {
        color: #FEA116;
      }
      
      #filters li span.active {
        background: #ededed;
        color: #FEA116;
      }
      
      #portfoliolist .portfolio {
        width: 23%;
        margin: 1%;
        display: none;
        float: left;
        overflow: hidden;
      }
      
      .portfolio-wrapper {
        overflow: hidden;
        position: relative !important;
        cursor: pointer;
      }

      .portfolio-wrapper img{
        width: 100%;
        height: 100%;
        transform : scale(1);
        -webkit-transition : all 0.5s ease;
        transition : all 0.5s ease;
        position: relative;
    }

    .portfolio-wrapper:hover img{
        transform : scale(1.2);
        cursor: pointer;
    }
    .portfolio-wrapper::after{
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0px;
        left: 0px;
    }
      
      /* .portfolio img {
        max-width: 100%;
        position: relative;
        top: 0;
        -webkit-transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
      } */
      
      .portfolio .label{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        cursor: pointer;
        opacity: 0;
        transform : scale(1.2);
        -webkit-transition : all 0.5s ease;
        transition : all 0.5s ease;
        padding: 10px;
        z-index: 999;
    }
      
      .portfolio .label-bg {
        background: #222;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
      }
      
      .label-text{
        width: 100%;
        height: 100%;
        position: relative;
    }
    .portfolio-wrapper:hover .label{
        opacity: 1;
        transform : scale(1);
    }
    .label-text{
        width: 100%;
        height: 100%;
        text-align: center;
        /*background-color : rgba(0,204,204,0.8);*/
        position: relative;
    }
    .portfolio-link{
        display: inline-block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%);
    }
    .portfolio-link li{
        float: left;
        margin-right: 5px;
    }
    .portfolio-link li a i{
        font-size: 25px;
        border-radius: 2px;
        -webkit-transition : all 0.3s linear;
        transition : all 0.3s linear;
    }
    .portfolio-link li a i.fa-link{
        padding: 10px 15px;
    }
    .portfolio-link li a i.fa-plus{
        padding: 10px 17px;
    }
    .text-title{
        width: 90%;
        /* height: 20%; */
        overflow: hidden;
        font-size: 18px;
           position: absolute;
        left: 50%;
        top: 25%;
        transform: translateX(-50%);
    }
    .text-title:after{
        position: absolute;
        bottom: 0;
        left: 35%;
        content: '';
        width: 30%;
        height: 2px;
    }
    
    .footer-bottom p{
        text-align: center;
    }
    
    /*Xtra Large*/
    @media (min-width: 1200px){}
    /*Medium Device*/
    @media(min-width:992px){}
    /*Small Device*/
    @media(min-width:768px){}
    /*Xtra Small Device*/
    @media(max-width:767px){
    
        .portfolio-controllers .filter-btn{
            margin-bottom: 15px;
            padding: 10px 12px;
            margin-left: 10px;
        }
    }
      
      /* .portfolio:hover .label {
        bottom: 0;
      } */
      
      /* .portfolio:hover img {
        top: -30px;
      } */
      
      
      /* #Tablet (Portrait) */
      
      @media only screen and (min-width: 768px) and (max-width: 959px) {
        .container {
          width: 768px;
        }
      }
      
      
      /*  #Mobile (Portrait) - Note: Design for a width of 320px */
      
      @media only screen and (max-width: 767px) {
        .container {
          width: 95%;
        }
        #portfoliolist .portfolio {
          width: 48%;
          margin: 1%;
        }
        #ads {
          display: none;
        }
      }
      
      
      /* #Mobile (Landscape) - Note: Design for a width of 480px */
      
      @media only screen and (min-width: 480px) and (max-width: 767px) {
        .container {
          width: 70%;
        }
        #ads {
          display: none;
        }
      }
      
      
      /* #Clearing */
      
      
      /* Self Clearing Goodness */
      
      .container:after {
        content: "\0020";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
      }
      
      .clearfix:before,
      .clearfix:after,
      .row:before,
      .row:after {
        content: '\0020';
        display: block;
        overflow: hidden;
        visibility: hidden;
        width: 0;
        height: 0;
      }
      
      .row:after,
      .clearfix:after {
        clear: both;
      }
      
      .row,
      .clearfix {
        zoom: 1;
      }
      
      .clear {
        clear: both;
        display: block;
        overflow: hidden;
        visibility: hidden;
        width: 0;
        height: 0;
      }

/* TAMBAHAN COLOR*/
.more a{
	background-color: #FEA116;
	color: #fff;
}
/*
====================================================
				Work
====================================================
*/
.work{
	background-color: #f9f9f9;
}
.portfolio-controllers .btn-default{
	color: #808080;
}
.portfolio-controllers .filter-btn{
	background-color: transparent;
	color: #222;
	border-color: #FEA116;
}
.portfolio-controllers .filter-btn.active-work{   
    color: #FEA116;
}
.portfolio-link li a i{
	background-color: transparent;
	/*border: 1px solid #00CCCC;*/
	color: #fff;
}
.portfolio-link li a:hover i{
	/*border-color: transparent;*/
}
.portfolio-link li a:hover i.fa-link,
.portfolio-link li a:hover i.fa-plus{
	background-color: #FEA116;
	color: #fff;
}
.text-title{
	color: #fff;
}
.text-title:after{
	background-color: transparent;
}
.label-text{
	background-color: rgba(225, 225, 225, .7);
} 
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
                            <!-- <a href="#tentangkami" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Pelajari Lebih Lanjut</a> -->
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
                     <!-- <ul id="filter">
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
                <?php endforeach; ?> -->
                   
                   
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
                    
					<div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="portal/img/BukuStatistik23.pdf">
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
                        <!-- 16:9 aspect ratio -->
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

    <script>
        // SCRIPT TEDI MUSANG KING

// Animasi Kategori Infografis
$(function() {

var filterList = {

  init: function() {

    // MixItUp plugin
    // http://mixitup.io
    $('#portfoliolist').mixItUp({
      selectors: {
        target: '.portfolio',
        filter: '.filter'
      },
      load: {
        filter: '.1, .2, .3, .4, .5, .6, .7, .8, .9, .10, .11, .12, .13'
      }
    });

  }

};

// Run the show!
filterList.init();

});

! function(a, b) {
"use strict";
a.MixItUp = function() {
  var b = this;
  b._execAction("_constructor", 0), a.extend(b, {
    selectors: {
      target: ".mix",
      filter: ".filter",
      sort: ".sort"
    },
    animation: {
      enable: !0,
      effects: "fade scale",
      duration: 600,
      easing: "ease",
      perspectiveDistance: "3000",
      perspectiveOrigin: "50% 50%",
      queue: !0,
      queueLimit: 1,
      animateChangeLayout: !1,
      animateResizeContainer: !0,
      animateResizeTargets: !1,
      staggerSequence: !1,
      reverseOut: !1
    },
    callbacks: {
      onMixLoad: !1,
      onMixStart: !1,
      onMixBusy: !1,
      onMixEnd: !1,
      onMixFail: !1,
      _user: !1
    },
    controls: {
      enable: !0,
      live: !1,
      toggleFilterButtons: !1,
      toggleLogic: "or",
      activeClass: "active"
    },
    layout: {
      display: "inline-block",
      containerClass: "",
      containerClassFail: "fail"
    },
    load: {
      filter: "all",
      sort: !1
    },
    _$body: null,
    _$container: null,
    _$targets: null,
    _$parent: null,
    _$sortButtons: null,
    _$filterButtons: null,
    _suckMode: !1,
    _mixing: !1,
    _sorting: !1,
    _clicking: !1,
    _loading: !0,
    _changingLayout: !1,
    _changingClass: !1,
    _changingDisplay: !1,
    _origOrder: [],
    _startOrder: [],
    _newOrder: [],
    _activeFilter: null,
    _toggleArray: [],
    _toggleString: "",
    _activeSort: "default:asc",
    _newSort: null,
    _startHeight: null,
    _newHeight: null,
    _incPadding: !0,
    _newDisplay: null,
    _newClass: null,
    _targetsBound: 0,
    _targetsDone: 0,
    _queue: [],
    _$show: a(),
    _$hide: a()
  }), b._execAction("_constructor", 1)
}, a.MixItUp.prototype = {
  constructor: a.MixItUp,
  _instances: {},
  _handled: {
    _filter: {},
    _sort: {}
  },
  _bound: {
    _filter: {},
    _sort: {}
  },
  _actions: {},
  _filters: {},
  extend: function(b) {
    for (var c in b) a.MixItUp.prototype[c] = b[c]
  },
  addAction: function(b, c, d, e) {
    a.MixItUp.prototype._addHook("_actions", b, c, d, e)
  },
  addFilter: function(b, c, d, e) {
    a.MixItUp.prototype._addHook("_filters", b, c, d, e)
  },
  _addHook: function(b, c, d, e, f) {
    var g = a.MixItUp.prototype[b],
      h = {};
    f = 1 === f || "post" === f ? "post" : "pre", h[c] = {}, h[c][f] = {}, h[c][f][d] = e, a.extend(!0, g, h)
  },
  _init: function(b, c) {
    var d = this;
    if (d._execAction("_init", 0, arguments), c && a.extend(!0, d, c), d._$body = a("body"), d._domNode = b, d._$container = a(b), d._$container.addClass(d.layout.containerClass), d._id = b.id, d._platformDetect(), d._brake = d._getPrefixedCSS("transition", "none"), d._refresh(!0), d._$parent = d._$targets.parent().length ? d._$targets.parent() : d._$container, d.load.sort && (d._newSort = d._parseSort(d.load.sort), d._newSortString = d.load.sort, d._activeSort = d.load.sort, d._sort(), d._printSort()), d._activeFilter = "all" === d.load.filter ? d.selectors.target : "none" === d.load.filter ? "" : d.load.filter, d.controls.enable && d._bindHandlers(), d.controls.toggleFilterButtons) {
      d._buildToggleArray();
      for (var e = 0; e < d._toggleArray.length; e++) d._updateControls({
        filter: d._toggleArray[e],
        sort: d._activeSort
      }, !0)
    } else d.controls.enable && d._updateControls({
      filter: d._activeFilter,
      sort: d._activeSort
    });
    d._filter(), d._init = !0, d._$container.data("mixItUp", d), d._execAction("_init", 1, arguments), d._buildState(), d._$targets.css(d._brake), d._goMix(d.animation.enable)
  },
  _platformDetect: function() {
    var a = this,
      c = ["Webkit", "Moz", "O", "ms"],
      d = ["webkit", "moz"],
      e = window.navigator.appVersion.match(/Chrome\/(\d+)\./) || !1,
      f = "undefined" != typeof InstallTrigger,
      g = function(a) {
        for (var b = 0; b < c.length; b++)
          if (c[b] + "Transition" in a.style) return {
            prefix: "-" + c[b].toLowerCase() + "-",
            vendor: c[b]
          };
        return "transition" in a.style ? "" : !1
      },
      h = g(a._domNode);
    a._execAction("_platformDetect", 0), a._chrome = e ? parseInt(e[1], 10) : !1, a._ff = f ? parseInt(window.navigator.userAgent.match(/rv:([^)]+)\)/)[1]) : !1, a._prefix = h.prefix, a._vendor = h.vendor, a._suckMode = window.atob && a._prefix ? !1 : !0, a._suckMode && (a.animation.enable = !1), a._ff && a._ff <= 4 && (a.animation.enable = !1);
    for (var i = 0; i < d.length && !window.requestAnimationFrame; i++) window.requestAnimationFrame = window[d[i] + "RequestAnimationFrame"];
    "function" != typeof Object.getPrototypeOf && ("object" == typeof "test".__proto__ ? Object.getPrototypeOf = function(a) {
      return a.__proto__
    } : Object.getPrototypeOf = function(a) {
      return a.constructor.prototype
    }), a._domNode.nextElementSibling === b && Object.defineProperty(Element.prototype, "nextElementSibling", {
      get: function() {
        for (var a = this.nextSibling; a;) {
          if (1 === a.nodeType) return a;
          a = a.nextSibling
        }
        return null
      }
    }), a._execAction("_platformDetect", 1)
  },
  _refresh: function(a, c) {
    var d = this;
    d._execAction("_refresh", 0, arguments), d._$targets = d._$container.find(d.selectors.target);
    for (var e = 0; e < d._$targets.length; e++) {
      var f = d._$targets[e];
      if (f.dataset === b || c) {
        f.dataset = {};
        for (var g = 0; g < f.attributes.length; g++) {
          var h = f.attributes[g],
            i = h.name,
            j = h.value;
          if (i.indexOf("data-") > -1) {
            var k = d._helpers._camelCase(i.substring(5, i.length));
            f.dataset[k] = j
          }
        }
      }
      f.mixParent === b && (f.mixParent = d._id)
    }
    if (d._$targets.length && a || !d._origOrder.length && d._$targets.length) {
      d._origOrder = [];
      for (var e = 0; e < d._$targets.length; e++) {
        var f = d._$targets[e];
        d._origOrder.push(f)
      }
    }
    d._execAction("_refresh", 1, arguments)
  },
  _bindHandlers: function() {
    var c = this,
      d = a.MixItUp.prototype._bound._filter,
      e = a.MixItUp.prototype._bound._sort;
    c._execAction("_bindHandlers", 0), c.controls.live ? c._$body.on("click.mixItUp." + c._id, c.selectors.sort, function() {
      c._processClick(a(this), "sort")
    }).on("click.mixItUp." + c._id, c.selectors.filter, function() {
      c._processClick(a(this), "filter")
    }) : (c._$sortButtons = a(c.selectors.sort), c._$filterButtons = a(c.selectors.filter), c._$sortButtons.on("click.mixItUp." + c._id, function() {
      c._processClick(a(this), "sort")
    }), c._$filterButtons.on("click.mixItUp." + c._id, function() {
      c._processClick(a(this), "filter")
    })), d[c.selectors.filter] = d[c.selectors.filter] === b ? 1 : d[c.selectors.filter] + 1, e[c.selectors.sort] = e[c.selectors.sort] === b ? 1 : e[c.selectors.sort] + 1, c._execAction("_bindHandlers", 1)
  },
  _processClick: function(c, d) {
    var e = this,
      f = function(c, d, f) {
        var g = a.MixItUp.prototype;
        g._handled["_" + d][e.selectors[d]] = g._handled["_" + d][e.selectors[d]] === b ? 1 : g._handled["_" + d][e.selectors[d]] + 1, g._handled["_" + d][e.selectors[d]] === g._bound["_" + d][e.selectors[d]] && (c[(f ? "remove" : "add") + "Class"](e.controls.activeClass), delete g._handled["_" + d][e.selectors[d]])
      };
    if (e._execAction("_processClick", 0, arguments), !e._mixing || e.animation.queue && e._queue.length < e.animation.queueLimit) {
      if (e._clicking = !0, "sort" === d) {
        var g = c.attr("data-sort");
        (!c.hasClass(e.controls.activeClass) || g.indexOf("random") > -1) && (a(e.selectors.sort).removeClass(e.controls.activeClass), f(c, d), e.sort(g))
      }
      if ("filter" === d) {
        var h, i = c.attr("data-filter"),
          j = "or" === e.controls.toggleLogic ? "," : "";
        e.controls.toggleFilterButtons ? (e._buildToggleArray(), c.hasClass(e.controls.activeClass) ? (f(c, d, !0), h = e._toggleArray.indexOf(i), e._toggleArray.splice(h, 1)) : (f(c, d), e._toggleArray.push(i)), e._toggleArray = a.grep(e._toggleArray, function(a) {
          return a
        }), e._toggleString = e._toggleArray.join(j), e.filter(e._toggleString)) : c.hasClass(e.controls.activeClass) || (a(e.selectors.filter).removeClass(e.controls.activeClass), f(c, d), e.filter(i))
      }
      e._execAction("_processClick", 1, arguments)
    } else "function" == typeof e.callbacks.onMixBusy && e.callbacks.onMixBusy.call(e._domNode, e._state, e), e._execAction("_processClickBusy", 1, arguments)
  },
  _buildToggleArray: function() {
    var a = this,
      b = a._activeFilter.replace(/\s/g, "");
    if (a._execAction("_buildToggleArray", 0, arguments), "or" === a.controls.toggleLogic) a._toggleArray = b.split(",");
    else {
      a._toggleArray = b.split("."), !a._toggleArray[0] && a._toggleArray.shift();
      for (var c, d = 0; c = a._toggleArray[d]; d++) a._toggleArray[d] = "." + c
    }
    a._execAction("_buildToggleArray", 1, arguments)
  },
  _updateControls: function(c, d) {
    var e = this,
      f = {
        filter: c.filter,
        sort: c.sort
      },
      g = function(a, b) {
        try {
          d && "filter" === h && "none" !== f.filter && "" !== f.filter ? a.filter(b).addClass(e.controls.activeClass) : a.removeClass(e.controls.activeClass).filter(b).addClass(e.controls.activeClass)
        } catch (c) {}
      },
      h = "filter",
      i = null;
    e._execAction("_updateControls", 0, arguments), c.filter === b && (f.filter = e._activeFilter), c.sort === b && (f.sort = e._activeSort), f.filter === e.selectors.target && (f.filter = "all");
    for (var j = 0; 2 > j; j++) i = e.controls.live ? a(e.selectors[h]) : e["_$" + h + "Buttons"], i && g(i, "[data-" + h + '="' + f[h] + '"]'), h = "sort";
    e._execAction("_updateControls", 1, arguments)
  },
  _filter: function() {
    var b = this;
    b._execAction("_filter", 0);
    for (var c = 0; c < b._$targets.length; c++) {
      var d = a(b._$targets[c]);
      d.is(b._activeFilter) ? b._$show = b._$show.add(d) : b._$hide = b._$hide.add(d)
    }
    b._execAction("_filter", 1)
  },
  _sort: function() {
    var a = this,
      b = function(a) {
        for (var b = a.slice(), c = b.length, d = c; d--;) {
          var e = parseInt(Math.random() * c),
            f = b[d];
          b[d] = b[e], b[e] = f
        }
        return b
      };
    a._execAction("_sort", 0), a._startOrder = [];
    for (var c = 0; c < a._$targets.length; c++) {
      var d = a._$targets[c];
      a._startOrder.push(d)
    }
    switch (a._newSort[0].sortBy) {
      case "default":
        a._newOrder = a._origOrder;
        break;
      case "random":
        a._newOrder = b(a._startOrder);
        break;
      case "custom":
        a._newOrder = a._newSort[0].order;
        break;
      default:
        a._newOrder = a._startOrder.concat().sort(function(b, c) {
          return a._compare(b, c)
        })
    }
    a._execAction("_sort", 1)
  },
  _compare: function(a, b, c) {
    c = c ? c : 0;
    var d = this,
      e = d._newSort[c].order,
      f = function(a) {
        return a.dataset[d._newSort[c].sortBy] || 0
      },
      g = isNaN(1 * f(a)) ? f(a).toLowerCase() : 1 * f(a),
      h = isNaN(1 * f(b)) ? f(b).toLowerCase() : 1 * f(b);
    return h > g ? "asc" === e ? -1 : 1 : g > h ? "asc" === e ? 1 : -1 : g === h && d._newSort.length > c + 1 ? d._compare(a, b, c + 1) : 0
  },
  _printSort: function(a) {
    var b = this,
      c = a ? b._startOrder : b._newOrder,
      d = b._$parent[0].querySelectorAll(b.selectors.target),
      e = d.length ? d[d.length - 1].nextElementSibling : null,
      f = document.createDocumentFragment();
    b._execAction("_printSort", 0, arguments);
    for (var g = 0; g < d.length; g++) {
      var h = d[g],
        i = h.nextSibling;
      "absolute" !== h.style.position && (i && "#text" === i.nodeName && b._$parent[0].removeChild(i), b._$parent[0].removeChild(h))
    }
    for (var g = 0; g < c.length; g++) {
      var j = c[g];
      if ("default" !== b._newSort[0].sortBy || "desc" !== b._newSort[0].order || a) f.appendChild(j), f.appendChild(document.createTextNode(" "));
      else {
        var k = f.firstChild;
        f.insertBefore(j, k), f.insertBefore(document.createTextNode(" "), j)
      }
    }
    e ? b._$parent[0].insertBefore(f, e) : b._$parent[0].appendChild(f), b._execAction("_printSort", 1, arguments)
  },
  _parseSort: function(a) {
    for (var b = this, c = "string" == typeof a ? a.split(" ") : [a], d = [], e = 0; e < c.length; e++) {
      var f = "string" == typeof a ? c[e].split(":") : ["custom", c[e]],
        g = {
          sortBy: b._helpers._camelCase(f[0]),
          order: f[1] || "asc"
        };
      if (d.push(g), "default" === g.sortBy || "random" === g.sortBy) break
    }
    return b._execFilter("_parseSort", d, arguments)
  },
  _parseEffects: function() {
    var a = this,
      b = {
        opacity: "",
        transformIn: "",
        transformOut: "",
        filter: ""
      },
      c = function(b, c, d) {
        if (a.animation.effects.indexOf(b) > -1) {
          if (c) {
            var e = a.animation.effects.indexOf(b + "(");
            if (e > -1) {
              var f = a.animation.effects.substring(e),
                g = /\(([^)]+)\)/.exec(f),
                h = g[1];
              return {
                val: h
              }
            }
          }
          return !0
        }
        return !1
      },
      d = function(a, b) {
        return b ? "-" === a.charAt(0) ? a.substr(1, a.length) : "-" + a : a
      },
      e = function(a, e) {
        for (var f = [
            ["scale", ".01"],
            ["translateX", "20px"],
            ["translateY", "20px"],
            ["translateZ", "20px"],
            ["rotateX", "90deg"],
            ["rotateY", "90deg"],
            ["rotateZ", "180deg"]
          ], g = 0; g < f.length; g++) {
          var h = f[g][0],
            i = f[g][1],
            j = e && "scale" !== h;
          b[a] += c(h) ? h + "(" + d(c(h, !0).val || i, j) + ") " : ""
        }
      };
    return b.opacity = c("fade") ? c("fade", !0).val || "0" : "1", e("transformIn"), a.animation.reverseOut ? e("transformOut", !0) : b.transformOut = b.transformIn, b.transition = {}, b.transition = a._getPrefixedCSS("transition", "all " + a.animation.duration + "ms " + a.animation.easing + ", opacity " + a.animation.duration + "ms linear"), a.animation.stagger = c("stagger") ? !0 : !1, a.animation.staggerDuration = parseInt(c("stagger") && c("stagger", !0).val ? c("stagger", !0).val : 100), a._execFilter("_parseEffects", b)
  },
  _buildState: function(a) {
    var b = this,
      c = {};
    return b._execAction("_buildState", 0), c = {
      activeFilter: "" === b._activeFilter ? "none" : b._activeFilter,
      activeSort: a && b._newSortString ? b._newSortString : b._activeSort,
      fail: !b._$show.length && "" !== b._activeFilter,
      $targets: b._$targets,
      $show: b._$show,
      $hide: b._$hide,
      totalTargets: b._$targets.length,
      totalShow: b._$show.length,
      totalHide: b._$hide.length,
      display: a && b._newDisplay ? b._newDisplay : b.layout.display
    }, a ? b._execFilter("_buildState", c) : (b._state = c, void b._execAction("_buildState", 1))
  },
  _goMix: function(a) {
    var b = this,
      c = function() {
        b._chrome && 31 === b._chrome && f(b._$parent[0]), b._setInter(), d()
      },
      d = function() {
        var a = window.pageYOffset,
          c = window.pageXOffset;
        document.documentElement.scrollHeight;
        b._getInterMixData(), b._setFinal(), b._getFinalMixData(), window.pageYOffset !== a && window.scrollTo(c, a), b._prepTargets(), window.requestAnimationFrame ? requestAnimationFrame(e) : setTimeout(function() {
          e()
        }, 20)
      },
      e = function() {
        b._animateTargets(), 0 === b._targetsBound && b._cleanUp()
      },
      f = function(a) {
        var b = a.parentElement,
          c = document.createElement("div"),
          d = document.createDocumentFragment();
        b.insertBefore(c, a), d.appendChild(a), b.replaceChild(a, c)
      },
      g = b._buildState(!0);
    b._execAction("_goMix", 0, arguments), !b.animation.duration && (a = !1), b._mixing = !0, b._$container.removeClass(b.layout.containerClassFail), "function" == typeof b.callbacks.onMixStart && b.callbacks.onMixStart.call(b._domNode, b._state, g, b), b._$container.trigger("mixStart", [b._state, g, b]), b._getOrigMixData(), a && !b._suckMode ? window.requestAnimationFrame ? requestAnimationFrame(c) : c() : b._cleanUp(), b._execAction("_goMix", 1, arguments)
  },
  _getTargetData: function(a, b) {
    var c, d = this;
    a.dataset[b + "PosX"] = a.offsetLeft, a.dataset[b + "PosY"] = a.offsetTop, d.animation.animateResizeTargets && (c = d._suckMode ? {
      marginBottom: "",
      marginRight: ""
    } : window.getComputedStyle(a), a.dataset[b + "MarginBottom"] = parseInt(c.marginBottom), a.dataset[b + "MarginRight"] = parseInt(c.marginRight), a.dataset[b + "Width"] = a.offsetWidth, a.dataset[b + "Height"] = a.offsetHeight)
  },
  _getOrigMixData: function() {
    var a = this,
      b = a._suckMode ? {
        boxSizing: ""
      } : window.getComputedStyle(a._$parent[0]),
      c = b.boxSizing || b[a._vendor + "BoxSizing"];
    a._incPadding = "border-box" === c, a._execAction("_getOrigMixData", 0), !a._suckMode && (a.effects = a._parseEffects()), a._$toHide = a._$hide.filter(":visible"), a._$toShow = a._$show.filter(":hidden"), a._$pre = a._$targets.filter(":visible"), a._startHeight = a._incPadding ? a._$parent.outerHeight() : a._$parent.height();
    for (var d = 0; d < a._$pre.length; d++) {
      var e = a._$pre[d];
      a._getTargetData(e, "orig")
    }
    a._execAction("_getOrigMixData", 1)
  },
  _setInter: function() {
    var a = this;
    a._execAction("_setInter", 0), a._changingLayout && a.animation.animateChangeLayout ? (a._$toShow.css("display", a._newDisplay), a._changingClass && a._$container.removeClass(a.layout.containerClass).addClass(a._newClass)) : a._$toShow.css("display", a.layout.display), a._execAction("_setInter", 1)
  },
  _getInterMixData: function() {
    var a = this;
    a._execAction("_getInterMixData", 0);
    for (var b = 0; b < a._$toShow.length; b++) {
      var c = a._$toShow[b];
      a._getTargetData(c, "inter")
    }
    for (var b = 0; b < a._$pre.length; b++) {
      var c = a._$pre[b];
      a._getTargetData(c, "inter")
    }
    a._execAction("_getInterMixData", 1)
  },
  _setFinal: function() {
    var a = this;
    a._execAction("_setFinal", 0), a._sorting && a._printSort(), a._$toHide.removeStyle("display"), a._changingLayout && a.animation.animateChangeLayout && a._$pre.css("display", a._newDisplay), a._execAction("_setFinal", 1)
  },
  _getFinalMixData: function() {
    var a = this;
    a._execAction("_getFinalMixData", 0);
    for (var b = 0; b < a._$toShow.length; b++) {
      var c = a._$toShow[b];
      a._getTargetData(c, "final")
    }
    for (var b = 0; b < a._$pre.length; b++) {
      var c = a._$pre[b];
      a._getTargetData(c, "final")
    }
    a._newHeight = a._incPadding ? a._$parent.outerHeight() : a._$parent.height(), a._sorting && a._printSort(!0), a._$toShow.removeStyle("display"), a._$pre.css("display", a.layout.display), a._changingClass && a.animation.animateChangeLayout && a._$container.removeClass(a._newClass).addClass(a.layout.containerClass), a._execAction("_getFinalMixData", 1)
  },
  _prepTargets: function() {
    var b = this,
      c = {
        _in: b._getPrefixedCSS("transform", b.effects.transformIn),
        _out: b._getPrefixedCSS("transform", b.effects.transformOut)
      };
    b._execAction("_prepTargets", 0), b.animation.animateResizeContainer && b._$parent.css("height", b._startHeight + "px");
    for (var d = 0; d < b._$toShow.length; d++) {
      var e = b._$toShow[d],
        f = a(e);
      e.style.opacity = b.effects.opacity, e.style.display = b._changingLayout && b.animation.animateChangeLayout ? b._newDisplay : b.layout.display, f.css(c._in), b.animation.animateResizeTargets && (e.style.width = e.dataset.finalWidth + "px", e.style.height = e.dataset.finalHeight + "px", e.style.marginRight = -(e.dataset.finalWidth - e.dataset.interWidth) + 1 * e.dataset.finalMarginRight + "px", e.style.marginBottom = -(e.dataset.finalHeight - e.dataset.interHeight) + 1 * e.dataset.finalMarginBottom + "px")
    }
    for (var d = 0; d < b._$pre.length; d++) {
      var e = b._$pre[d],
        f = a(e),
        g = {
          x: e.dataset.origPosX - e.dataset.interPosX,
          y: e.dataset.origPosY - e.dataset.interPosY
        },
        c = b._getPrefixedCSS("transform", "translate(" + g.x + "px," + g.y + "px)");
      f.css(c), b.animation.animateResizeTargets && (e.style.width = e.dataset.origWidth + "px", e.style.height = e.dataset.origHeight + "px", e.dataset.origWidth - e.dataset.finalWidth && (e.style.marginRight = -(e.dataset.origWidth - e.dataset.interWidth) + 1 * e.dataset.origMarginRight + "px"), e.dataset.origHeight - e.dataset.finalHeight && (e.style.marginBottom = -(e.dataset.origHeight - e.dataset.interHeight) + 1 * e.dataset.origMarginBottom + "px"))
    }
    b._execAction("_prepTargets", 1)
  },
  _animateTargets: function() {
    var b = this;
    b._execAction("_animateTargets", 0), b._targetsDone = 0, b._targetsBound = 0, b._$parent.css(b._getPrefixedCSS("perspective", b.animation.perspectiveDistance + "px")).css(b._getPrefixedCSS("perspective-origin", b.animation.perspectiveOrigin)), b.animation.animateResizeContainer && b._$parent.css(b._getPrefixedCSS("transition", "height " + b.animation.duration + "ms ease")).css("height", b._newHeight + "px");
    for (var c = 0; c < b._$toShow.length; c++) {
      var d = b._$toShow[c],
        e = a(d),
        f = {
          x: d.dataset.finalPosX - d.dataset.interPosX,
          y: d.dataset.finalPosY - d.dataset.interPosY
        },
        g = b._getDelay(c),
        h = {};
      d.style.opacity = "";
      for (var i = 0; 2 > i; i++) {
        var j = 0 === i ? j = b._prefix : "";
        b._ff && b._ff <= 20 && (h[j + "transition-property"] = "all", h[j + "transition-timing-function"] = b.animation.easing + "ms", h[j + "transition-duration"] = b.animation.duration + "ms"), h[j + "transition-delay"] = g + "ms", h[j + "transform"] = "translate(" + f.x + "px," + f.y + "px)"
      }(b.effects.transform || b.effects.opacity) && b._bindTargetDone(e), b._ff && b._ff <= 20 ? e.css(h) : e.css(b.effects.transition).css(h)
    }
    for (var c = 0; c < b._$pre.length; c++) {
      var d = b._$pre[c],
        e = a(d),
        f = {
          x: d.dataset.finalPosX - d.dataset.interPosX,
          y: d.dataset.finalPosY - d.dataset.interPosY
        },
        g = b._getDelay(c);
      (d.dataset.finalPosX !== d.dataset.origPosX || d.dataset.finalPosY !== d.dataset.origPosY) && b._bindTargetDone(e), e.css(b._getPrefixedCSS("transition", "all " + b.animation.duration + "ms " + b.animation.easing + " " + g + "ms")), e.css(b._getPrefixedCSS("transform", "translate(" + f.x + "px," + f.y + "px)")), b.animation.animateResizeTargets && (d.dataset.origWidth - d.dataset.finalWidth && 1 * d.dataset.finalWidth && (d.style.width = d.dataset.finalWidth + "px", d.style.marginRight = -(d.dataset.finalWidth - d.dataset.interWidth) + 1 * d.dataset.finalMarginRight + "px"), d.dataset.origHeight - d.dataset.finalHeight && 1 * d.dataset.finalHeight && (d.style.height = d.dataset.finalHeight + "px", d.style.marginBottom = -(d.dataset.finalHeight - d.dataset.interHeight) + 1 * d.dataset.finalMarginBottom + "px"))
    }
    b._changingClass && b._$container.removeClass(b.layout.containerClass).addClass(b._newClass);
    for (var c = 0; c < b._$toHide.length; c++) {
      for (var d = b._$toHide[c], e = a(d), g = b._getDelay(c), k = {}, i = 0; 2 > i; i++) {
        var j = 0 === i ? j = b._prefix : "";
        k[j + "transition-delay"] = g + "ms", k[j + "transform"] = b.effects.transformOut, k.opacity = b.effects.opacity
      }
      e.css(b.effects.transition).css(k), (b.effects.transform || b.effects.opacity) && b._bindTargetDone(e)
    }
    b._execAction("_animateTargets", 1)
  },
  _bindTargetDone: function(b) {
    var c = this,
      d = b[0];
    c._execAction("_bindTargetDone", 0, arguments), d.dataset.bound || (d.dataset.bound = !0, c._targetsBound++, b.on("webkitTransitionEnd.mixItUp transitionend.mixItUp", function(e) {
      (e.originalEvent.propertyName.indexOf("transform") > -1 || e.originalEvent.propertyName.indexOf("opacity") > -1) && a(e.originalEvent.target).is(c.selectors.target) && (b.off(".mixItUp"), d.dataset.bound = "", c._targetDone())
    })), c._execAction("_bindTargetDone", 1, arguments)
  },
  _targetDone: function() {
    var a = this;
    a._execAction("_targetDone", 0), a._targetsDone++, a._targetsDone === a._targetsBound && a._cleanUp(), a._execAction("_targetDone", 1)
  },
  _cleanUp: function() {
    var b = this,
      c = b.animation.animateResizeTargets ? "transform opacity width height margin-bottom margin-right" : "transform opacity",
      d = function() {
        b._$targets.removeStyle("transition", b._prefix)
      };
    b._execAction("_cleanUp", 0), b._changingLayout ? b._$show.css("display", b._newDisplay) : b._$show.css("display", b.layout.display), b._$targets.css(b._brake), b._$targets.removeStyle(c, b._prefix).removeAttr("data-inter-pos-x data-inter-pos-y data-final-pos-x data-final-pos-y data-orig-pos-x data-orig-pos-y data-orig-height data-orig-width data-final-height data-final-width data-inter-width data-inter-height data-orig-margin-right data-orig-margin-bottom data-inter-margin-right data-inter-margin-bottom data-final-margin-right data-final-margin-bottom"), b._$hide.removeStyle("display"), b._$parent.removeStyle("height transition perspective-distance perspective perspective-origin-x perspective-origin-y perspective-origin perspectiveOrigin", b._prefix), b._sorting && (b._printSort(), b._activeSort = b._newSortString, b._sorting = !1), b._changingLayout && (b._changingDisplay && (b.layout.display = b._newDisplay, b._changingDisplay = !1), b._changingClass && (b._$parent.removeClass(b.layout.containerClass).addClass(b._newClass), b.layout.containerClass = b._newClass, b._changingClass = !1), b._changingLayout = !1), b._refresh(), b._buildState(), b._state.fail && b._$container.addClass(b.layout.containerClassFail), b._$show = a(), b._$hide = a(), window.requestAnimationFrame && requestAnimationFrame(d), b._mixing = !1, "function" == typeof b.callbacks._user && b.callbacks._user.call(b._domNode, b._state, b), "function" == typeof b.callbacks.onMixEnd && b.callbacks.onMixEnd.call(b._domNode, b._state, b), b._$container.trigger("mixEnd", [b._state, b]), b._state.fail && ("function" == typeof b.callbacks.onMixFail && b.callbacks.onMixFail.call(b._domNode, b._state, b), b._$container.trigger("mixFail", [b._state, b])), b._loading && ("function" == typeof b.callbacks.onMixLoad && b.callbacks.onMixLoad.call(b._domNode, b._state, b), b._$container.trigger("mixLoad", [b._state, b])), b._queue.length && (b._execAction("_queue", 0), b.multiMix(b._queue[0][0], b._queue[0][1], b._queue[0][2]), b._queue.splice(0, 1)), b._execAction("_cleanUp", 1), b._loading = !1
  },
  _getPrefixedCSS: function(a, b, c) {
    var d = this,
      e = {},
      f = "",
      g = -1;
    for (g = 0; 2 > g; g++) f = 0 === g ? d._prefix : "", c ? e[f + a] = f + b : e[f + a] = b;
    return d._execFilter("_getPrefixedCSS", e, arguments)
  },
  _getDelay: function(a) {
    var b = this,
      c = "function" == typeof b.animation.staggerSequence ? b.animation.staggerSequence.call(b._domNode, a, b._state) : a,
      d = b.animation.stagger ? c * b.animation.staggerDuration : 0;
    return b._execFilter("_getDelay", d, arguments)
  },
  _parseMultiMixArgs: function(a) {
    for (var b = this, c = {
        command: null,
        animate: b.animation.enable,
        callback: null
      }, d = 0; d < a.length; d++) {
      var e = a[d];
      null !== e && ("object" == typeof e || "string" == typeof e ? c.command = e : "boolean" == typeof e ? c.animate = e : "function" == typeof e && (c.callback = e))
    }
    return b._execFilter("_parseMultiMixArgs", c, arguments)
  },
  _parseInsertArgs: function(b) {
    for (var c = this, d = {
        index: 0,
        $object: a(),
        multiMix: {
          filter: c._state.activeFilter
        },
        callback: null
      }, e = 0; e < b.length; e++) {
      var f = b[e];
      "number" == typeof f ? d.index = f : "object" == typeof f && f instanceof a ? d.$object = f : "object" == typeof f && c._helpers._isElement(f) ? d.$object = a(f) : "object" == typeof f && null !== f ? d.multiMix = f : "boolean" != typeof f || f ? "function" == typeof f && (d.callback = f) : d.multiMix = !1
    }
    return c._execFilter("_parseInsertArgs", d, arguments)
  },
  _execAction: function(a, b, c) {
    var d = this,
      e = b ? "post" : "pre";
    if (!d._actions.isEmptyObject && d._actions.hasOwnProperty(a))
      for (var f in d._actions[a][e]) d._actions[a][e][f].call(d, c)
  },
  _execFilter: function(a, b, c) {
    var d = this;
    if (d._filters.isEmptyObject || !d._filters.hasOwnProperty(a)) return b;
    for (var e in d._filters[a]) return d._filters[a][e].call(d, c)
  },
  _helpers: {
    _camelCase: function(a) {
      return a.replace(/-([a-z])/g, function(a) {
        return a[1].toUpperCase()
      })
    },
    _isElement: function(a) {
      return window.HTMLElement ? a instanceof HTMLElement : null !== a && 1 === a.nodeType && "string" === a.nodeName
    }
  },
  isMixing: function() {
    var a = this;
    return a._execFilter("isMixing", a._mixing)
  },
  filter: function() {
    var a = this,
      b = a._parseMultiMixArgs(arguments);
    a._clicking && (a._toggleString = ""), a.multiMix({
      filter: b.command
    }, b.animate, b.callback)
  },
  sort: function() {
    var a = this,
      b = a._parseMultiMixArgs(arguments);
    a.multiMix({
      sort: b.command
    }, b.animate, b.callback)
  },
  changeLayout: function() {
    var a = this,
      b = a._parseMultiMixArgs(arguments);
    a.multiMix({
      changeLayout: b.command
    }, b.animate, b.callback)
  },
  multiMix: function() {
    var a = this,
      c = a._parseMultiMixArgs(arguments);
    if (a._execAction("multiMix", 0, arguments), a._mixing) a.animation.queue && a._queue.length < a.animation.queueLimit ? (a._queue.push(arguments), a.controls.enable && !a._clicking && a._updateControls(c.command), a._execAction("multiMixQueue", 1, arguments)) : ("function" == typeof a.callbacks.onMixBusy && a.callbacks.onMixBusy.call(a._domNode, a._state, a), a._$container.trigger("mixBusy", [a._state, a]), a._execAction("multiMixBusy", 1, arguments));
    else {
      a.controls.enable && !a._clicking && (a.controls.toggleFilterButtons && a._buildToggleArray(), a._updateControls(c.command, a.controls.toggleFilterButtons)), a._queue.length < 2 && (a._clicking = !1), delete a.callbacks._user, c.callback && (a.callbacks._user = c.callback);
      var d = c.command.sort,
        e = c.command.filter,
        f = c.command.changeLayout;
      a._refresh(), d && (a._newSort = a._parseSort(d), a._newSortString = d, a._sorting = !0, a._sort()), e !== b && (e = "all" === e ? a.selectors.target : e, a._activeFilter = e), a._filter(), f && (a._newDisplay = "string" == typeof f ? f : f.display || a.layout.display, a._newClass = f.containerClass || "", (a._newDisplay !== a.layout.display || a._newClass !== a.layout.containerClass) && (a._changingLayout = !0, a._changingClass = a._newClass !== a.layout.containerClass, a._changingDisplay = a._newDisplay !== a.layout.display)), a._$targets.css(a._brake), a._goMix(c.animate ^ a.animation.enable ? c.animate : a.animation.enable), a._execAction("multiMix", 1, arguments)
    }
  },
  insert: function() {
    var a = this,
      b = a._parseInsertArgs(arguments),
      c = "function" == typeof b.callback ? b.callback : null,
      d = document.createDocumentFragment(),
      e = function() {
        return a._refresh(), a._$targets.length ? b.index < a._$targets.length || !a._$targets.length ? a._$targets[b.index] : a._$targets[a._$targets.length - 1].nextElementSibling : a._$parent[0].children[0]
      }();
    if (a._execAction("insert", 0, arguments), b.$object) {
      for (var f = 0; f < b.$object.length; f++) {
        var g = b.$object[f];
        d.appendChild(g), d.appendChild(document.createTextNode(" "))
      }
      a._$parent[0].insertBefore(d, e)
    }
    a._execAction("insert", 1, arguments), "object" == typeof b.multiMix && a.multiMix(b.multiMix, c)
  },
  prepend: function() {
    var a = this,
      b = a._parseInsertArgs(arguments);
    a.insert(0, b.$object, b.multiMix, b.callback)
  },
  append: function() {
    var a = this,
      b = a._parseInsertArgs(arguments);
    a.insert(a._state.totalTargets, b.$object, b.multiMix, b.callback)
  },
  getOption: function(a) {
    var c = this,
      d = function(a, c) {
        for (var d = c.split("."), e = d.pop(), f = d.length, g = 1, h = d[0] || c;
          (a = a[h]) && f > g;) h = d[g], g++;
        return a !== b ? a[e] !== b ? a[e] : a : void 0
      };
    return a ? c._execFilter("getOption", d(c, a), arguments) : c
  },
  setOptions: function(b) {
    var c = this;
    c._execAction("setOptions", 0, arguments), "object" == typeof b && a.extend(!0, c, b), c._execAction("setOptions", 1, arguments)
  },
  getState: function() {
    var a = this;
    return a._execFilter("getState", a._state, a)
  },
  forceRefresh: function() {
    var a = this;
    a._refresh(!1, !0)
  },
  destroy: function(b) {
    var c = this,
      d = a.MixItUp.prototype._bound._filter,
      e = a.MixItUp.prototype._bound._sort;
    c._execAction("destroy", 0, arguments), c._$body.add(a(c.selectors.sort)).add(a(c.selectors.filter)).off(".mixItUp");
    for (var f = 0; f < c._$targets.length; f++) {
      var g = c._$targets[f];
      b && (g.style.display = ""), delete g.mixParent
    }
    c._execAction("destroy", 1, arguments), d[c.selectors.filter] && d[c.selectors.filter] > 1 ? d[c.selectors.filter]-- : 1 === d[c.selectors.filter] && delete d[c.selectors.filter], e[c.selectors.sort] && e[c.selectors.sort] > 1 ? e[c.selectors.sort]-- : 1 === e[c.selectors.sort] && delete e[c.selectors.sort], delete a.MixItUp.prototype._instances[c._id]
  }
}, a.fn.mixItUp = function() {
  var c, d = arguments,
    e = [],
    f = function(b, c) {
      var d = new a.MixItUp,
        e = function() {
          return ("00000" + (16777216 * Math.random() << 0).toString(16)).substr(-6).toUpperCase()
        };
      d._execAction("_instantiate", 0, arguments), b.id = b.id ? b.id : "MixItUp" + e(), d._instances[b.id] || (d._instances[b.id] = d, d._init(b, c)), d._execAction("_instantiate", 1, arguments)
    };
  return c = this.each(function() {
    if (d && "string" == typeof d[0]) {
      var c = a.MixItUp.prototype._instances[this.id];
      if ("isLoaded" === d[0]) e.push(c ? !0 : !1);
      else {
        var g = c[d[0]](d[1], d[2], d[3]);
        g !== b && e.push(g)
      }
    } else f(this, d[0])
  }), e.length ? e.length > 1 ? e : e[0] : c
}, a.fn.removeStyle = function(c, d) {
  return d = d ? d : "", this.each(function() {
    for (var e = this, f = c.split(" "), g = 0; g < f.length; g++)
      for (var h = 0; 4 > h; h++) {
        switch (h) {
          case 0:
            var i = f[g];
            break;
          case 1:
            var i = a.MixItUp.prototype._helpers._camelCase(i);
            break;
          case 2:
            var i = d + f[g];
            break;
          case 3:
            var i = a.MixItUp.prototype._helpers._camelCase(d + f[g])
        }
        if (e.style[i] !== b && "unknown" != typeof e.style[i] && e.style[i].length > 0 && (e.style[i] = ""), !d && 1 === h) break
      }
    e.attributes && e.attributes.style && e.attributes.style !== b && "" === e.attributes.style.value && e.attributes.removeNamedItem("style")
  })
}
}(jQuery);
//   Animasi Kategori Infografis End
    </script>

</body>

</html>