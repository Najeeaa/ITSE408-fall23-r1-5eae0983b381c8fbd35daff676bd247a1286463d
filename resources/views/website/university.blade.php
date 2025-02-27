<!DOCTYPE html>
<html lang="en">

<!--  13:28  -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Education Home Page1</title>

    <!-- Css Files -->
    <link href=" {{ asset('university/css/bootstrap.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/css/font-awesome.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/css/flaticon.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/css/slick-slider.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/css/prettyphoto.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/build/mediaelementplayer.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/style.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/css/color.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/css/color-two.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/css/color-three.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/css/color-four.css') }}" rel="stylesheet">
    <link href=" {{ asset('university/css/responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
  </head>
  <body>

    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">

        <!--// Header \\-->
		<header id="wm-header" class="wm-header-one">

            <!--// TopStrip \\-->
			<div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wm-language"> <ul> <li><a href="#">English</a></li> <li><a href="#">español</a></li> </ul> </div>
                            <ul class="wm-stripinfo">
                                <li><i class="wmicon-location"></i> 2925 Swick Hill Street, Charlotte, NC 28202</li>
                                <li><i class="wmicon-technology4"></i> +1 984-700-7129</li>
                                <li><i class="wmicon-clock2"></i> Mon - fri: 7:00am - 6:00pm</li>
                            </ul>
                            <ul class="wm-adminuser-section">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin">login</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><a href="index-2.html" class="wm-logo"><img src="{{ asset('university/images/logo-1.png') }}" alt=""></a></div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                  <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="index-2.html">Education Home V1</a></li>
                                            <li><a href="index-two.html">Education Home V2</a></li>
                                            <li><a href="index-three.html">Education Home V3</a></li>
                                            <li><a href="index-four.html">Education Home V4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">courses</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="courses-grid.html">Courses Grid</a></li>
                                            <li><a href="courses-list.html">Courses List</a></li>
                                            <li><a href="courses-detail.html">Courses Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">event</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="event-grid.html">Event Grid</a></li>
                                            <li><a href="event-detail.html">Event Detail</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="#">Dashboard</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="dashboard-courses.html">Courses</a></li>
                                            <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                            <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                            <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                            <li><a href="student-dashboard-settings.html">Settings</a></li>
                                            <li><a href="student-dashboard-statement.html">Statement</a></li>
                                        </ul>
                                    </li>
                                    <li class="wm-megamenu-li"><a href="#">Pages</a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>Link 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="blog-list.html">Blog List</a></li>
                                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                                        <li><a href="faq-page.html">Faq Page</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 2</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="ourprofessors.html">Our Professors</a></li>
                                                        <li><a href="our-professsors-detail.html">Our Professsors Detail</a></li>
                                                        <li><a href="typography-elements.html">Typography Elements</a></li>
                                                        <li><a href="courses-list.html">Courses List</a></li>
                                                        <li><a href="courses-grid.html">Courses Grid</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 3</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="courses-detail.html">Courses Detail</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="{{ asset('university/extra-images/megamenu-frame.jpg') }}" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Shop</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-single-product.html">Shop Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="wm-megamenu-li"><a href="#">Contact</a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>Links 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>Artists text</h4>
                                                    <div class="wm-mega-text">
                                                        <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                        <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>sub category widget</h4>
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="{{ asset('university/extra-images/mega-menuadd.jpg') }}" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                  </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                            <a href="#" class="wm-header-btn">get started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

		</header>
		<!--// Header \\-->

		<!--// Main Banner \\-->
		<div class="wm-main-banner">

            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="{{ asset('university/extra-images/banner-view1-1.jpg') }}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{{ asset('university/extra-images/banner-view1-2.jpg') }}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{{ asset('university/extra-images/banner-view1-3.jpg') }}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{{ asset('university/extra-images/banner-view1-1.jpg') }}" alt=""> </div>
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer">
                        <h1>International Programmes</h1>
                        <p>The study programmes of the Enroll Campus University are open to people from all nationalities.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>UA Degree Programmes</h1>
                        <p>We offer companies the opportunity to access the technology and knowledge developed at the  Enroll Campus University.</p>
                        <a href="#" class="wm-banner-btn">know more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer banner-bgcolor">
                        <h1>Research & Business</h1>
                        <p>The scientific community nominates CRISPR System, based on research developed at the UA.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>International Programmes</h1>
                        <p>The study programmes of the Enroll Campus University are open to people from all nationalities.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                </div>
            </div>

		</div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content">

			<!--// Main Section \\-->
			<div class="wm-main-section">
				<div class="container">
					<div class="row">

						<div class="col-md-4">
							<div class="wm-search-course">
                                <h3 class="wm-short-title wm-color">Find Your Course</h3>
                                <p>Fill in the form below to find your course:</p>
                                <form>
                                    <ul>
                                        <li>
                                            <div class="wm-radio">
                                                <div class="wm-radio-partition">
                                                    <input id="male" type="radio" name="gender" value="male">
                                                    <label for="male">by ID</label>
                                                </div>
                                                <div class="wm-radio-partition">
                                                    <input id="female" type="radio" name="gender" value="female">
                                                    <label for="female">by name</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li> <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
                                        <li>
                                            <div class="wm-apply-select">
                                                <select>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li> <input type="submit" value="Search course"> </li>
                                    </ul>
                                </form>
                            </div>
						</div>
                        <div class="col-md-8">
                            <div class="wm-service wm-box-service">
                                <ul>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-suitcase"></i>
                                            <h6><a href="#">Business</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-money"></i>
                                            <h6><a href="#">Economics</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-school"></i>
                                            <h6><a href="#">Math</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-science"></i>
                                            <h6><a href="#">Science</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-computer"></i>
                                            <h6><a href="#">Computing</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-technology3"></i>
                                            <h6><a href="#">Web Design</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-web3"></i>
                                            <h6><a href="#">Development</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-shape"></i>
                                            <h6><a href="#">Biology</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-courses-popular-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>Popular <span>Courses</span></h2> </div>
                            <div class="wm-courses wm-courses-popular">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="#"><img src="{{ asset('university/extra-images/papular-courses-1.jpg') }}" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                                <figcaption>
                                                    <img src="{{ asset('university/extra-images/papular-courses-thumb-1.jpg') }}" alt="">
                                                    <h6><a href="#">Shelly T. Forrester</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Advanced Architectural Research</a></h6>
                                                <div class="wm-courses-price"> <span>$32</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="#"><img src="{{ asset('university/extra-images/papular-courses-2.jpg') }}" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                                <figcaption>
                                                    <img src="{{ asset('university/extra-images/papular-courses-thumb-2.jpg') }}" alt="">
                                                    <h6><a href="#">Sam K. Harrington</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                                                <div class="wm-courses-price"> <span>Free</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 438</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 28</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="#"><img src="{{ asset('university/extra-images/papular-courses-3.jpg') }}" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                                <figcaption>
                                                    <img src="{{ asset('university/extra-images/papular-courses-thumb-3.jpg') }}" alt="">
                                                    <h6><a href="#">Sara A. Shirley</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Transdisciplinary Design</a></h6>
                                                <div class="wm-courses-price"> <span>$79</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 309</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 19</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="#"><img src="{{ asset('university/extra-images/papular-courses-4.jpg') }}" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                                <figcaption>
                                                    <img src="{{ asset('university/extra-images/papular-courses-thumb-4.jpg') }}" alt="">
                                                    <h6><a href="#">Julius M. Lepage</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Financial Information Systems</a></h6>
                                                <div class="wm-courses-price"> <span>$50</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 298</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 11</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-whychooseus-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="whychooseus-list">
                                <div class="wm-fancy-title"> <h2>Why <span>Choose Us</span></h2> </div>
                                <ul class="row">
                                    <li class="col-md-4">
                                        <span>209</span>
                                        <h6>of our trainees have got a prestigious job</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>91%</span>
                                        <h6>students have established successful business</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>35%</span>
                                        <h6>have already earned their first million</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wm-questions-studying">
                                <img src="{{ asset('university/extra-images/ask-questoin-bg.png') }}" alt="">
                                <h3 class="wm-color">Questions about studying with us?</h3>
                                <p>We have a team of student advisers & officers to answer any questions:</p>
                                <a class="wm-banner-btn" href="#">ask us now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-learn-listing-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>You Can <span>Learn</span></h2> </div>
                            <div class="wm-learn-listing">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="{{ asset('university/extra-images/learn-listing-1.png') }}" alt=""></a>
                                            <figcaption>
                                                <h2>Research</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="{{ asset('university/extra-images/learn-listing-2.png') }}" alt=""></a>
                                            <figcaption>
                                                <h2>Academics</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="{{ asset('university/extra-images/learn-listing-3.png') }}" alt=""></a>
                                            <figcaption>
                                                <h2>Admissions</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="{{ asset('university/extra-images/learn-listing-4.png') }}" alt=""></a>
                                            <figcaption>
                                                <h2>Student Life</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-latestevents-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9 wm-top-spacer">
                            <h2 class="wm-simple-title">Our Latest Events</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="wm-event-latest-slider">
                                        <div class="wm-event-latest-layer">
                                            <h6 class="wm-color">Enjoy the best experience for you with the choice of our campus - a truly international university campus in Barcelona.</h6>
                                            <a href="#" class="wm-banner-btn">about us</a>
                                        </div>
                                        <div class="wm-event-latest-layer">
                                            <h6 class="wm-color">Enjoy the best experience for you with the choice of our campus - a truly international university campus in Barcelona.</h6>
                                            <a href="#" class="wm-banner-btn">about us</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="wm-event wm-latest-event">
                                        <ul class="row">
                                            <li class="col-md-12">
                                                <figure><a href="#"><img src="{{ asset('university/extra-images/latest-event-1.png') }}" alt=""></a></figure>
                                                <div class="wm-latest-event-text">
                                                    <h6><a href="#" class="wm-color">Out of This World: The Family Fun Day</a></h6>
                                                    <time datetime="2008-02-14 20:00">21/04/2016</time>
                                                    <p>Join us for outer-space themed games, prizes, science & talks about careers in the UK.</p>
                                                    <a href="#" class="wm-banner-btn">check event</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="wm-event wm-latest-event">
                                        <ul class="row">
                                            <li class="col-md-12">
                                                <figure><a href="#"><img src="{{ asset('university/extra-images/latest-event-2.png') }}" alt=""></a></figure>
                                                <div class="wm-latest-event-text">
                                                    <h6><a href="#" class="wm-color">Shakespeare at Balliol in those five acts</a></h6>
                                                    <time datetime="2008-02-14 20:00">19/04/2016</time>
                                                    <p>A.C. Bradley and J.C. Maxwell get down to serious criticism; another Balliol writer launches the.</p>
                                                    <a href="#" class="wm-banner-btn">check event</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wm-counter wm-counter-simple">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <span class="word-count">5</span>
                                        <h6>th best University in Europe (Youth Inc. 2015 ranking)</h6>
                                    </li>
                                    <li class="col-md-12">
                                        <span class="word-count">68</span>
                                        <h6>% International students especially from Asia, Africa & Europe</h6>
                                    </li>
                                    <li class="col-md-12">
                                        <span class="word-count">91</span>
                                        <h6>Student Nationalities</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-testimonial-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>What <span>Clients Say</span></h2> <p>Don't take our word for it, see what our awesome clients say.</p> </div>
                            <div class="wm-testimonial-slider">
                                <div class="wm-testimonial-slider-wrap">
                                    <p>I chose them because it gave me flexibility. I was working full-time at the same time I was studying, so the OU gave me that flexibility. Also my Dad, I’m Danish of origin.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="{{ asset('university/extra-images/testimonial-thumb-1.png') }}" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-testimonial-slider-wrap">
                                    <p>After completing the MBA study, I had the opportunity to join one of the leading business schools in the UK in the role of faculty member and senior consultant. I suppose without the MBA it would have been difficult to make that career step. The biggest challenge in studying with them.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="{{ asset('university/extra-images/testimonial-thumb-2.png') }}" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-testimonial-slider-wrap">
                                    <p>I chose them because it gave me flexibility. I was working full-time at the same time I was studying, so the OU gave me that flexibility. Also my Dad, I’m Danish of origin.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="{{ asset('university/extra-images/testimonial-thumb-1.png') }}" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-testimonial-slider-wrap">
                                    <p>After completing the MBA study, I had the opportunity to join one of the leading business schools in the UK in the role of faculty member and senior consultant. I suppose without the MBA it would have been difficult to make that career step. The biggest challenge in studying with them.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="{{ asset('university/extra-images/testimonial-thumb-2.png') }}" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-ourhistory-full">
                <span class="wm-light-transparent"></span>
                <div class="container">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="wm-history-list">
                                <h2>Our History</h2>
                                <ul>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2016</time>
                                        <span>Released the Arctic Collection the Perennial Collection of handknotted luxury area rugs.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2015</time>
                                        <span>Installed our first custom floorcovering for a museum at the Aga Khan Museum in Toronto</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2014</time>
                                        <span>Designed our first wallcovering for all these healthcare sector at the Toronto Centre.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2013</time>
                                        <span>Celebrated 25 years in business with “The Art Day Project” – a partnership.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2016</time>
                                        <span>Released the Arctic Collection the Perennial Collection of handknotted luxury area rugs.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2015</time>
                                        <span>Installed our first custom floorcovering for a museum at the Aga Khan Museum in Toronto</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2014</time>
                                        <span>Designed our first wallcovering for all these healthcare sector at the Toronto Centre.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2013</time>
                                        <span>Celebrated 25 years in business with “The Art Day Project” – a partnership.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="wm-subscribe-form">
                                <h2>Still not convinced? We can help you!</h2>
                                <p>Fill out the form below and we will contact you.</p>
                                <form>
                                    <input type="text" value="Name:" onblur="if(this.value == '') { this.value ='Name:'; }" onfocus="if(this.value =='Name:') { this.value = ''; }">
                                    <input type="email" value="E-mail:" onblur="if(this.value == '') { this.value ='E-mail:'; }" onfocus="if(this.value =='E-mail:') { this.value = ''; }">
                                    <input type="submit" value="Get Advice">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-news-grid-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>Blog <span>News</span></h2> <p>We bring you all the useful information of the University's Community</p> </div>
                            <div class="wm-news wm-news-grid">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="{{ asset('university/extra-images/news-grid-1.png') }}" alt=""></a>
                                            <figcaption class="wm-bgcolor">
                                                <img src="{{ asset('university/extra-images/news-grid-thumb-1.png') }}" alt="">
                                                <h6>Posted by: <a href="#">Sam K. Harrington</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li>7/4/2016</li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 12 comments</a></li>
                                                <li><a href="#"><i class="wmicon-folder2"></i> admission</a></li>
                                            </ul>
                                            <h5><a href="#" class="wm-color">Seven UK business schools make the Top 10</a></h5>
                                            <p>The largest-ever QS Distance Online MBA Rankings have been released by higher and business education analysts QS.</p>
                                            <a class="wm-banner-btn" href="#">read article</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="{{ asset('university/extra-images/news-grid-2.png') }}" alt=""></a>
                                            <figcaption class="wm-bgcolor">
                                                <img src="{{ asset('university/extra-images/news-grid-thumb-2.png') }}" alt="">
                                                <h6>Posted by: <a href="#">Wanda R. Teixeira</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li>6/4/2016</li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 21 comments</a></li>
                                                <li><a href="#"><i class="wmicon-folder2"></i> business</a></li>
                                            </ul>
                                            <h5><a href="#" class="wm-color">The University Business School centre of excellence</a></h5>
                                            <p>The University has announced the launch of its first free online course as part.  These individuals or groups can more effectively.</p>
                                            <a class="wm-banner-btn" href="#">read article</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="{{ asset('university/extra-images/news-grid-3.png') }}" alt=""></a>
                                            <figcaption class="wm-bgcolor">
                                                <img src="{{ asset('university/extra-images/news-grid-thumb-3.png') }}" alt="">
                                                <h6>Posted by: <a href="#">Marvin P. Sanchez</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li>5/4/2016</li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 18 comments</a></li>
                                                <li><a href="#"><i class="wmicon-folder2"></i> students</a></li>
                                            </ul>
                                            <h5><a href="#" class="wm-color">Our research could slash energy bills in Milton</a></h5>
                                            <p>The University is developing the UK’s first community based website that will allow people in Milton Keynes.</p>
                                            <a class="wm-banner-btn" href="#">read article</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wm-simple-section-title wm-partners-title"> <h2>University <span>Partners</span></h2> </div>
                            <div class="wm-partners-slider gallery">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-contact-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="wm-contact-tab">

                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Contact Us</a></li>
                                <li><a href="#profile" aria-controls="profile" data-toggle="tab">Information Details</a></li>
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="col-md-4"> <div class="wm-map"> <div id="map"></div> </div> </div>
                                        <div class="col-md-8">
                                            <div class="wm-contact-form">
                                                <span>Talk To Us Today</span>
                                                <form>
                                                    <ul>
                                                        <li>
                                                            <i class="wmicon-black"></i>
                                                            <input type="text" value="Name" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-symbol3"></i>
                                                            <input type="text" value="E-mail" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-technology4"></i>
                                                            <input type="text" value="Phone" onblur="if(this.value == '') { this.value ='Phone'; }" onfocus="if(this.value =='Phone') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-web2"></i>
                                                            <textarea placeholder="Message"></textarea>
                                                        </li>
                                                        <li> <input type="submit" value="Send Message"> </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile">
                                    <span class="wm-contact-title">Contact Info</span>
                                    <div class="wm-contact-service">
                                        <ul class="row">
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                                <h5 class="wm-color">Address</h5>
                                                <p>195 Cooks Mine Road Espanola, NM 87532</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                                <h5 class="wm-color">Phone & Fax</h5>
                                                <p>+1 505-753-5656 +1 505-753-4437</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                                <h5 class="wm-color">E-mail</h5>
                                                <p><a href="mailto:name@email.com">Info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="contact-social-icon">
                                        <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                                    </ul>
                                </div>
                              </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
		<footer id="wm-footer" class="wm-footer-one">

            <!--// FooterNewsLatter \\-->
            <div class="wm-footer-newslatter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <i class="wmicon-interface2"></i>
                                <input type="text" value="Enter your e-mail address" onblur="if(this.value == '') { this.value ='Enter your e-mail address'; }" onfocus="if(this.value =='Enter your e-mail address') { this.value = ''; }">
                                <input type="submit" value="Subscribe to our newsletter">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterNewsLatter \\-->

            <!--// FooterWidgets \\-->
            <div class="wm-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget widget_contact_info col-md-3">
                            <a href="index-2.html" class="wm-footer-logo"><img src="{{ asset('university/images/logo-1.png') }}" alt=""></a>
                            <ul>
                                <li><i class="wm-color wmicon-pin"></i> 195 Cooks Mine Road Espanola, NM 87532</li>
                                <li><i class="wm-color wmicon-phone"></i> +1 505-753-5656 <br> +1 505-753-4437</li>
                                <li><i class="wm-color wmicon-letter"></i> <a href="mailto:name@email.com">info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></li>
                            </ul>
                            <div class="wm-footer-icons">
                                <a href="#" class="wmicon-social5"></a>
                                <a href="#" class="wmicon-social4"></a>
                                <a href="#" class="wmicon-social3"></a>
                                <a href="#" class="wmicon-vimeo"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_archive col-md-2">
                            <div class="wm-footer-widget-title"> <h5>Quick Links</h5> </div>
                            <ul>
                                <li><a href="#">Our Latest Events</a></li>
                                <li><a href="#">Our Courses</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">404 Page</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">All Instructors</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_twitter col-md-4">
                            <div class="wm-footer-widget-title"> <h5><i class="wmicon-social2"></i> @enrollcampus</h5> </div>
                            <ul>
                                <li>
                                    <p>Check Youniverse - Multipurpose PSD Template @ThemeForest: <a href="#">pic.twitter.com/xcVlqJySjq</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">2 hrs ago</time>
                                </li>
                                <li>
                                    <p>Check out my New PSD:  FashionPlus - Fashion eCommerce: <a href="#">pic.twitter.com/xc445Ghyt</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">4 hrs ago</time>
                                </li>
                                <li>
                                    <p>MedicAid - Medical Template @ThemeForest: <a href="#">pic.twitter.com/xcVlq542wfER</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">1 day ago</time>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget_gallery col-md-3">
                            <div class="wm-footer-widget-title"> <h5>Our Instructors</h5> </div>
                            <ul class="gallery">
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-1.jpg"><img src="{{ asset('university/extra-images/widget-gallery-1.jpg') }}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-2.jpg"><img src="{{ asset('university/extra-images/widget-gallery-2.jpg') }}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-3.jpg"><img src="{{ asset('university/extra-images/widget-gallery-3.jpg') }}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-4.jpg"><img src="{{ asset('university/extra-images/widget-gallery-4.jpg') }}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-5.jpg"><img src="{{ asset('university/extra-images/widget-gallery-5.jpg') }}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-6.jpg"><img src="{{ asset('university/extra-images/widget-gallery-6.jpg') }}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-7.jpg"><img src="{{ asset('university/extra-images/widget-gallery-7.jpg') }}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-8.jpg"><img src="{{ asset('university/extra-images/widget-gallery-8.jpg') }}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-9.jpg"><img src="{{ asset('university/extra-images/widget-gallery-9.jpg') }}" alt=""></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// FooterWidgets \\-->

            <!--// FooterCopyRight \\-->
            <div class="wm-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"> <span><i class="wmicon-nature"></i> Barcelona, Spain 2°F / -17°C</span> </div>
                        <div class="col-md-6"> <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p> </div>
                    </div>
                </div>
            </div>
            <!--// FooterCopyRight \\-->

		</footer>
		<!--// Footer \\-->

	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <div class="wm-modallogin-form wm-login-popup">
                <span class="wm-color">Login to Your Account</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                        <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                        <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                        <li> <input type="submit" value="Sign In"> </li>
                    </ul>
                </form>
                <span class="wm-color">or try our socials</span>
                <ul class="wm-login-social-media">
                    <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                    <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                    <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
            </div>
            <div class="wm-modallogin-form wm-register-popup">
                <span class="wm-color">create Your Account today</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                        <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Create Account"> </li>
                    </ul>
                </form>
                <span class="wm-color">or signup with your socials:</span>
                <ul class="wm-login-social-media">
                    <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                    <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                    <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Already a member? <a href="#">Sign-in Here!</a></p>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <div class="wm-modallogin-form">
                <span class="wm-color">Search Your KeyWord</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Search"> </li>
                    </ul>
                </form>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalSearch Box -->

	<!-- jQuery (necessary for JavaScript plugins) -->
  <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('university/script/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/jquery.prettyphoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/fitvideo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/skills.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/slick.slider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/waypoints-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/build/mediaelement-and-player.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/https://maps.googleapis.com/maps/api/js') }}"></script>
    <script type="text/javascript" src="{{ asset('university/script/functions.js') }}"></script>

  </body>

<!--  15:20  -->
</html>
