<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Guruma - Online Course & Education HTML Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guruma - Online Course & Education HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon2.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature) -->
    <link rel="stylesheet" href="css/select2/select2.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/swiper/swiper.min.css" />
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="css/animate/animate.min.css"/>

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Rajdhani:wght@500&family=Source+Serif+Pro&display=swap" rel="stylesheet">


    <style>

		.upload-img {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			height: 110vh;
            gap: 50px;
            margin-top: 0px;
		}
		
		@media (max-width: 700px) {
		    .upload-img {
		        height: 130vh;
		    }
		}
		
		#img-form {
		    display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}

        #img-add {
            display: block;
            width: 125px;  
            cursor: pointer;
            width: 100px;
        }

        #upload-img {
            cursor: pointer;
            background: teal;
            color: white;
            border: none;
            padding: 6px 9px;
            border-radius: 12px;
            transition: 0.3s;
            border-left: 30px;
            font-weight: bolder;
            /*margin-left: 20px;*/
            font-family: 'Rajdhani', sans-serif;
            width: 130px;
        }

        #upload-img:hover {
            background: lightseagreen;
            transform: scale(1.1);
            
        }

        h1 {
            font-family: 'Nunito', sans-serif; 
        }
        
        #img-preview .img-title {
		    width: 150px;
		    padding: 12px;
		    font-size: 15px;
		    border-radius: 15px;
		    font-family: 'Nunito', sans-serif;
		    color: white;
		    border: none;
		    background: #292929;
		}
		
		::placeholder {
		    font-family: 'Nunito', sans-serif;
            color: white;
        }
        
        input:-webkit-autofill{
            -webkit-box-shadow: 0 0 0 1000px #292929 inset !important;
            -webkit-text-fill-color: teal !important;
        }
        
        .error {
            font-family: 'Rajdhani', sans-serif;
            font-weight: bolder;
            color: red;
        }

	</style>

</head>
<body>

<!--=================================
    Header -->
    <header class="header header-sticky default-transparent default-transparent-03">
      <nav class="navbar navbar-static-top navbar-expand-lg px-3 px-md-5">
        <div class="container-fluid position-relative px-0">
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="index.html">
            <img class="img-logo" src="images/regn-black.png" alt="logo">
          </a>
          <a class="navbar-brand navbar-brand-sticky" href="index.html">
            <img class="img-logo" src="images/regn-white.png" alt="logo">
          </a>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="index.html">Home</a>
                
              </li>
              <li class="nav-item"><a class="nav-link" href="about-us.html">About us</a></li>
              <li class="dropdown nav-item">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Courses<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu megamenu dropdown-menu-md">
                  <li>
                    <div class="row g-0">
                      <div class="col-sm-6">
                        <!-- <h6 class="nav-title">Course Pages</h6> -->
                        <ul class="list-unstyled mt-lg-1">
                          <li><a class="dropdown-item" href="course-list.html"><span>B Sc (CS) in Artificial intelligence and Data Science</span></a></li>
                          <li><a class="dropdown-item" href="course-list-map.html"><span>B.Com (CA)</span></a></li>
                          <li><a class="dropdown-item" href="course-grid.html"><span>BBA</span></a></li>
                          <li><a class="dropdown-item" href="course-grid-map.html"><span>BCA</span></a></li>
                          <li><a class="dropdown-item" href="course-detail-style-01.html"><span>B.Sc in Aviation Management</span></a></li>
                          <li><a class="dropdown-item" href="course-detail-style-02.html"><span>Full stack developer certification course</span></a></li>
                        </ul>
                      </div>
                      <!-- <div class="col-sm-6">
                        <h6 class="nav-title">Course Pages</h6>
                        <ul class="list-unstyled mt-lg-1">
                          <li><a class="dropdown-item" href="course-detail-style-03.html"><span>Course Detail Style 03</span></a></li>
                          <li><a class="dropdown-item" href="membership-levels.html"><span>Membership Levels</span></a></li>
                          <li><a class="dropdown-item" href="events.html"><span>Events</span></a></li>
                          <li><a class="dropdown-item" href="event-detail.html"><span>Event Detail</span></a></li>
                          <li><a class="dropdown-item" href="teachers.html"><span>Teachers</span></a></li>
                          <li><a class="dropdown-item" href="teacher-detail.html"><span>Teacher Detail</span></a></li>
                        </ul>
                      </div> -->
                    </div>
                  </li>
                </ul>
              </li>
              <!-- <li class="dropdown nav-item">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu megamenu dropdown-menu-lg">
                  <li>
                    <div class="row g-0">
                      <div class="col-sm-6 col-md-4">
                        <h6 class="nav-title">Basic Pages</h6>
                        <ul class="list-unstyled mt-lg-1">
                          <li><a class="dropdown-item" href="about-us.html"><span>About us</span></a></li>
                          <li><a class="dropdown-item" href="contact-us.html"><span>Contact us</span></a></li>
                          <li><a class="dropdown-item" href="gallery.html"><span>Gallery</span></a></li>
                          <li><a class="dropdown-item" href="login.html"><span>login</span></a></li>
                        </ul>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <h6 class="nav-title">Information Pages</h6>
                        <ul class="list-unstyled mt-lg-1">
                          <li><a class="dropdown-item" href="privacy-policy.html"><span>Privacy policy</span></a></li>
                          <li><a class="dropdown-item" href="terms-and-conditions.html"><span>Terms & conditions</span></a></li>
                          <li><a class="dropdown-item" href="faqs.html"><span>FAQs</span></a></li>
                        </ul>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <h6 class="nav-title">Extra Pages</h6>
                        <ul class="list-unstyled mt-lg-1">
                          <li><a class="dropdown-item" href="error-404.html"><span>404 error</span></a></li>
                          <li><a class="dropdown-item" href="coming-soon.html"><span>Coming soon</span></a></li>
                          <li><a class="dropdown-item" href="maintenance.html"><span>Maintenance</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Blog<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="classic-full-width.html"><span>Classic Full width</span></a></li>
                  <li><a class="dropdown-item" href="classic-left-sidebar.html"><span>Classic Left Sidebar</span></a></li>
                  <li><a class="dropdown-item" href="blog-single.html"><span>Blog single</span></a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="shop.html"><span>Shop</span></a></li>
                  <li><a class="dropdown-item" href="cart.html"><span>Cart</span></a></li>
                  <li><a class="dropdown-item" href="checkout.html"><span>Checkout</span></a></li>
                  <li><a class="dropdown-item" href="shop-single.html"><span>Shop single</span></a></li>
                </ul>
              </li> -->
              <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
              <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact us</a></li>
            </ul>
          </div>
          
            
        </div>
      </nav>
    </header>
    <!--=================================
    Header -->



<div class="upload-img" id="img-preview">

    <h2>UPLOAD IMAGE</h2>

     <form action="upload-verify.php"
           method="post"
           enctype="multipart/form-data" id="img-form">

            <label for="firstimg"><img src="images/add.png" id="img-add"></label>

            <input type="file" 
                  name="my_image" id="firstimg" accept="image/*" style="display:none; visibility: none;" required><br><br>
                  
            <input type="text" class="img-title" name="text" placeholder="Title" required><br><br>

            <input type="submit" 
                  name="submit"
                  value="UPLOAD" id="upload-img">
     	
     </form>
     <?php if (isset($_GET['error'])): ?>
		<p class="error"> <?php echo $_GET['error']; ?> </p>
	<?php endif ?>
    </div>
    

     <!--=================================
    footer-->
    <footer class="footer footer-dark pb-5 space-pt bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
            <div class="footer-contact-info">
              <div class="footer-logo mb-2">
                <a href="index.html"><img class="img-logo2" src="images/regn-logo.png" alt=""></a>
              </div>
              <div class="contact-address">
                <div class="contact-item mb-3 mb-md-4">
                  <p>Regnanz Education,<br>
                    2nd Floor, Cental Arcade.<br>
                    Cherooty Road,<br>
                    Calicut - 673032</p>
                </div>
                <div class="contact-item mb-3 mb-md-4">
                  <h4 class="mb-0 fw-normal"><a href="#" class="text-primary">9656 300 567<br>
                    9037 206 760</a></h4>
                </div>
                <div class="contact-item">
                  <a href="#">
                    admissions@regnanzedu.co.in<br>
                    admin@regnanzedu.co.in</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 col-lg-4 mb-4 mb-lg-0">
            <h5 class="footer-title text-primary">Explore</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="#">Overview</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Success story</a></li>
                <li><a href="#">Teachers</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
              <ul class="list-unstyled mb-0">
                <li><a href="#">Help</a></li>
                <li><a href="#">Our news</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Research</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 col-lg-2 mb-4 mb-sm-0">
            <h5 class="footer-title text-primary">Resources</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="#">Donors</a></li>
                <li><a href="#">Educators</a></li>
                <li><a href="#">Professionals</a></li>
                <li><a href="#">Become A Teacher</a></li>
                <li><a href="#">Student Profile</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <h5 class="footer-title text-primary">Subscribe us</h5>
            <p>Sign up to our newsletter to get the latest news and offers.</p>
            <form>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email*">
              </div>
              <button type="submit" class="btn btn-sm btn-primary">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom pt-5 pb-0 bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="social-icon text-md-start text-center mb-3 mb-md-0">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-google"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="copyright text-md-end text-center">
                <p class="mb-0 small">© Copyright 2021 <a href="">Guruma</a> All Rights Reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=================================
    footer-->

    <!--=================================
    Back To Top -->
    <div id="back-to-top" class="back-to-top">
      <a href="#"><i class="fas fa-chevron-up"></i></a>
    </div>
    <!--=================================
    Back To Top -->
    
    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/jquery.appear.js"></script>
    <script src="js/select2/select2.full.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/swiper/swiper.min.js"></script>
    <script src="js/shuffle/shuffle.min.js"></script>
    <script src="js/jarallax/jarallax.min.js"></script>
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/swiperanimation/SwiperAnimation.min.js"></script>
    <script src="js/countdown/jquery.downCount.js"></script>
    <script src="js/counter/jquery.countTo.js"></script>
    <script src="js/animate/animate1.js"></script>
    
    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>
    
  </body>
</html>

