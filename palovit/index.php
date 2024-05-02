<?php
$con = new mysqli('localhost', 'root', '', 'palovit');
$G_query = $con->query('select * from general_info')->fetch_assoc();
$Slider = $con->query('select * from sliders')->fetch_all(MYSQLI_ASSOC);
$project_plan = $con->query('select * from project_plan')->fetch_all(MYSQLI_ASSOC);
$intro = $con->query('select * from intro')->fetch_assoc();

$fp=$con->query('SELECT featured_project.*, category_featured.name FROM featured_project JOIN category_featured ON featured_project.cat_id=category_featured.id')->fetch_all(MYSQLI_ASSOC);   //............$feature_project
$fc=$con->query('select * from category_featured'); //............$feature_category......

$personal_info=$con->query('select * from personal_info')->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html class="">

<!-- Mirrored from html.tavonline.co/palovit/Home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 05:15:06 GMT -->
<head>
    
    <meta charset="utf-8" />
    <title><?php echo $G_query['title'] ?> </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=latin-ext">
    <link rel="stylesheet" href="Content/bootstrap.min.css" />
    <link rel="stylesheet" href="Content/font-awesome.min.css" />
    <link rel="stylesheet" href="fonts/essential-regular-fonts/essential-icons.css" />

    <link rel="stylesheet" href="Plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="Plugins/owl-carousel/owl.theme.css" />

    <link rel="stylesheet" href="Plugins/Magnific-Popup/magnific-popup.css" />

    <link rel="stylesheet" href="Plugins/ion.rangeSlider/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="Plugins/ion.rangeSlider/css/ion.rangeSlider.skinNice.css" />

    <link rel="stylesheet" href="Plugins/custom-scrollbar/jquery.mCustomScrollbar.css" />

    <link rel="stylesheet" href="Plugins/jquery-bar-rating/themes/fontawesome-stars.css" />

    <link rel="stylesheet" href="Plugins/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="Plugins/masterslider/skins/default/style.css" />
    <link rel="stylesheet" href="Plugins/masterslider/fullscreen/style/ms-fullscreen.css" />

    <link rel="stylesheet" href="Theme/css/theme.min.css" />

    <link rel="stylesheet" href="Theme/css/color/Default.css" id="color" />

    <!--<link rel="stylesheet" href="Theme/StyleAll.css" />-->
</head>
<body>
    <div class="body">
<header class="header transparent_nav">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <a href="Index.html" class="logo">
                    <img src="admin/uploads/<?php echo $G_query['logo'] ?> " class="img-responsive" alt="" />
                </a>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 rspnav">
                <nav class="collnav collapse">
                    <ul class="nav nav-pills">
            <li class="dropdown">
                <a class="dropdown-toggle" href="Index.html">HOME</a>
                <ul class="dropdown-menu">
                            <li><a href="index.php">Home</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#">SERVICES</a>
                <ul class="dropdown-menu">
                            <li><a href="Services.html">Services</a></li>
                            <li><a href="Services-Detail.html">Services Detail</a></li>
                            <li><a href="Services-Detail-Two.html">Services Detail Two</a></li>
                            <li><a href="Services-Detail-Three.html">Services Detail Three</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#">PROJECTS</a>
                <ul class="dropdown-menu">
                            <li><a href="Project-Grid-2-Columns.html">Project Grid 2 Columns</a></li>
                            <li><a href="Project-Grid-3-Columns.html">Project Grid 3 Columns</a></li>
                            <li><a href="Project-Grid-4-Columns.html">Project Grid 4 Columns</a></li>
                            <li><a href="Single-Project.html">Single Project</a></li>
                </ul>
            </li>
            <li class="dropdown dropdown-mega">
                <a class="dropdown-toggle" href="#">FEATURES</a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="mega-content">
                            <div class="row">
                                    <div class="col-md-3">
                                        <span class="mega-sub-title">HEADERS</span>
                                        <ul class="mega-sub-nav">
                                                <li><a href="Header-Standart-Nav.html">Standart Menu</a></li>
                                                <li><a href="Header-Transparent-Nav.html">Transparent Menu</a></li>
                                                <li><a href="Header-Radius-Topmenu-Nav.html">Radius Top Menu</a></li>
                                                <li><a href="Header-Radius-Nav.html">Radius Menu</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="mega-sub-title">FOOTERS</span>
                                        <ul class="mega-sub-nav">
                                                <li><a href="Footer-Standart.html#footer">Standart Footer</a></li>
                                                <li><a href="Footer-Short.html#footer">Short Footer</a></li>
                                                <li><a href="Footer-Simple.html#footer">Simple Footer</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="mega-sub-title">PAGES</span>
                                        <ul class="mega-sub-nav">
                                                <li><a href="About-1.html">About 1</a></li>
                                                <li><a href="About-2.html">About 2</a></li>
                                                <li><a href="Career.html">Career</a></li>
                                                <li><a href="Company.html">Company</a></li>
                                                <li><a href="Page404.html">404 Page</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="mega-sub-title">SHORTCODES</span>
                                        <ul class="mega-sub-nav">
                                                <li><a href="Accordion.html">Accordion</a></li>
                                                <li><a href="Tab.html">Tab</a></li>
                                                <li><a href="Buttons.html">Buttons</a></li>
                                                <li><a href="Alerts.html">Alerts</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#">BLOG</a>
                <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#">Blog Grid Layouts</a>
                                <ul class="dropdown-menu">
                                            <li><a href="Blog-Grid-Left-Sidebar.html">Blog Grid Left Sidebar</a></li>
                                            <li><a href="Blog-Grid-Right-Sidebar.html">Blog Grid Right Sidebar</a></li>
                                            <li><a href="Blog-Grid-Full-Width.html">Blog Grid Full Width</a></li>
                                </ul>
                            </li>
                            <li><a href="Blog-List-Style.html">Blog List Style</a></li>
                            <li><a href="Blog-Post-Single.html">Blog Post Single</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#">SHOP</a>
                <ul class="dropdown-menu">
                            <li><a href="Shop-Grid-Left-Sidebar.html">Shop Grid Left Sidebar</a></li>
                            <li><a href="Shop-Grid-Right-Sidebar.html">Shop Grid Right Sidebar</a></li>
                            <li><a href="Shop-Grid-Full-Width.html">Shop Grid Full Width</a></li>
                            <li><a href="Shop-Single-Product.html">Shop Single Product</a></li>
                            <li><a href="Shop-Cart.html">Shop Cart</a></li>
                            <li><a href="Shop-Checkout.html">Shop Checkout</a></li>
                            <li><a href="Shop-Login.html">Shop Login</a></li>
                </ul>
            </li>
            <li><a href="Contact.html">CONTACT</a></li>
</ul>
                </nav>
            </div>
            <div class="col-md-1 col-sm-6 col-xs-6">
                <div class="hidden-lg hidden-md pull-right rspbtn">
                    <button data-toggle="collapse" data-target=".collnav">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="rmenu">
                    <div id="account">
                        <a href="#" class="dropdown"><i class="fa fa-user-o"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="account">
    <div class="signin">
        <h4>Sign In</h4>
        <hr />
        <form action="#" method="post">
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" value="" class="form-control">
            </div>
            <div class="form-group">
                <a class="pull-right" id="Recover" href="#">Reset Password</a>
                <label>Password</label>
                <input type="password" value="" class="form-control">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6">
                        <span class="remember-box checkbox">
                            <label for="rememberme">
                                <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                            </label>
                        </span>
                    </div>
                    <div class="col-xs-6">
                        <input type="submit" value="Login" class="btn btn-palovit palovit35 pull-right" />
                    </div>
                </div>
            </div>
        </form>
        <p>Don't have an account yet? <a href="#" id="SignUp">Sign Up</a></p>
    </div>
    <div class="signup">
        <h4>Create Account</h4>
        <hr />
        <form action="#" method="post">
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" value="" class="form-control">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6">
                        <label>Password</label>
                        <input type="password" value="" class="form-control">
                    </div>
                    <div class="col-xs-6">
                        <label>Re-enter Password</label>
                        <input type="password" value="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <input type="submit" value="Create Account" class="btn btn-palovit palovit35 pull-left" />
            </div>
        </form>
        <p>Already have an account? <a href="#" id="SignIn">Log In</a></p>
    </div>
    <div class="recover">
        <h4>Reset My Password</h4>
        <hr />
        <p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>
        <form action="#" method="post">
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" value="" class="form-control">
            </div>
            <div class="form-group clearfix">
                <input type="submit" value="Submit" class="btn btn-palovit palovit35 pull-left" />
            </div>
        </form>
        <p>Already have an account? <a href="#" id="RecoverCancel">Log In</a></p>
    </div>
</div>
                            </li>
                        </ul>
                    </div>
                    <div id="search">
                        <a href="#" class="dropdown"><i class="fa fa-search"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="search">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-palovit" type="submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>        <div class="main">
<!-- .................. header end.................            -->
<!-- .................. header end.................            -->
<!-- .................. header end.................            -->







<!-- template -->
<div class="ms-fullscreen-template">
    <!-- masterslider -->
    <div class="master-slider ms-skin-default" id="masterslider">

    <?php foreach ($Slider as $sl => $si) { ?> 
            <div class="ms-slide slide-2">
                <div class="slide-pattern"></div>
                    <h1 class="ms-layer slider1-t1"
                        data-type="text" 
                        data-effect="top(short)" 
                        data-duration="300"
                        data-hide-effect="fade" 
                        data-offset-x      = "0"
                        data-offset-y      = "-70"
                        data-origin        = "mc"
                        data-delay="0">
                       <?php echo $si['title1'] ?>
                    </h1>
                    <h2 class="ms-layer slider1-t2"
                        data-type="text" 
                        data-effect="top(short)" 
                        data-duration="300"
                        data-hide-effect="fade"  
                        data-offset-x      = "0"
                        data-offset-y      = "-10"
                        data-origin        = "mc"
                        data-delay="300">
                        <?php echo $si['title2'] ?>
                    </h2>
                    <h3 class="ms-layer slider1-t3"
                        data-type="text" 
                        data-effect="top(short)" 
                        data-duration="300"
                        data-hide-effect="fade"  
                        data-offset-x      = "0"
                        data-offset-y      = "50"
                        data-origin        = "mc"
                        data-delay="600">
                        <?php echo $si['title3'] ?> 
                    </h3>
                    <a class="ms-layer slider4-t3 btn btn-palovit palovit30 hidden-xs"
                        data-type="text" 
                        data-effect="top(short)" 
                        data-duration="900"
                        data-hide-effect="fade"  
                        data-offset-x      = "0"
                        data-offset-y      = "130"
                        data-origin        = "mc"
                        data-delay="900">
                        <?php echo $si['details'] ?>
                    </a> 
                <!-- <img src="Plugins/masterslider/style/blank.gif" data-src="Theme/img/construction_tr.jpg" alt="lorem ipsum dolor sit" /> -->
                <img src="" data-src="admin/uploads/<?php echo $si['photo'] ?>" alt="lorem ipsum dolor sit" />
            </div>
                <?php } ?>


    </div>
    <!-- end of masterslider -->
</div>
<!-- end of template -->
<section class="sevices dotted-bg m-t-60 p-b-50">
    <div class="container">
        <div class="row">

            <?php foreach ($project_plan as $pp => $pi) { ?>
                <div class="col-md-4">
                    <img src="admin/uploads/<?php echo $pi['photo'] ?>" class="img-responsive" alt="" />
                    <hr class="hr" />
                    <a href="#"><h4><?php echo $pi['title'] ?></h4></a>
                    <p><?php echo $pi['details'] ?></p>
                </div>
           
<?php } ?>

            <div class="col-md-12 button">
                <button type="button" class="btn btn-arrow">Read More <i class="fa fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>



<!-- ............. feature project start..................... -->
<!-- ............. feature project start..................... -->
<!-- ............. feature project start..................... -->
<section class="projets p-t-30 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 palovit-title">
                <hr class="hr" />
                <h2>FEATURED PROJECTS</h2>
                <ul class="filter">
                    <li class="active" data-filter="*">All Projets</li>
                    
                    <?php foreach($fc as $fci=>$fcl){ ?>
                    <li data-filter=".item<?php echo ++$fci ?>">
                    <?php echo $fcl['name']  ?></li>
                   <?php } ?>

                </ul>
            </div>

             <div class="col-md-12">
                <div class="row grid">

                <?php foreach($fp as $fpi=>$fpl){ ?>
                    <div class="col-md-4 item item<?php echo $fpl['cat_id']?>">
                        <div class="grid-box">
                            <div class="grid-box-wrapper">
                            <img src="admin/uploads/<?php echo $fpl['photo'] ?>" class="img-responsive" alt="" />
                                <a href="Single-Project.html" class="grid-box-title">
                                    <div class="grid-box-category"><?php echo $fpl['name']; ?></div>
                                    <div class="grid-box-detail"><?php echo $fpl['details']; ?></div>
                                </a>
                                <div class="grid-box-action">
                                    <a href="Single-Project.html">
                                        <span class="box-action-icon"><i class="fa fa-link"></i></span>
                                    </a>
                                    <a href="Theme/img/lightbox-1.jpg" class="image-link">
                                        <span class="box-action-icon"><i class="fa fa-search"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>

            <div class="col-md-12 button">
                <button type="button" class="btn btn-slider">All Projets</button>
            </div>

        </div>
    </div>
</section>

<!-- ............. feature project end..................... -->
<!-- ............. feature project end..................... -->
<!-- ............. feature project end..................... -->


<section class="intro">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <p><?php echo $intro['details'] ?></p>
                <hr />
                <a href="#"><?php echo $intro['owner'] ?></a>
            </div>

        </div>
    </div>
</section>
<section class="personnel dotted-bg p-t-30 p-b-50">
    <div class="container">
        <div class="row">


            <div class="col-md-12 palovit-title">
                <hr class="hr" />
                <h2>WHAT PEOPLE SAY</h2>
            </div>
            <div class="owl-carousel" data-items="3" data-autoplay="3000" data-pagination="true">
                <?php foreach($personal_info as $pii=>$pil){ ?>
            <div class="item">
                    <div>
                        <img src="admin/uploads/<?php echo $pil['photo'] ?> " class="img-circle" alt="" />
                        <p><?php echo $pil['details'] ?></p>
                        <hr />
                        <a href="#"><?php echo $pil['name'] ?></a>
                        <span><?php echo $pil['company'] ?></span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section><section class="news dotted-bg p-t-30 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 palovit-title m-b-20">
                <hr class="hr" />
                <h2>LATEST NEWS</h2>
                <p>Sed ultrices porta cursus. Aenean nec sagittis augue. Integer fringilla nunc non leo blandit efficitur. Aenean vel sodales felis. Nunc ac dignissim nunc. Aenean vel pellentesque lectus. Fusce nibh orci, porttitor nec odio sit amet.</p>
            </div>
            <div class="col-md-6 details">
                <img src="Theme/img/blog-big.jpg" alt="" />
                <div>
                    <p>Jeff D. Stutler - 16 Septemper 2016</p>
                    <a href="Blog-Post-Single.html">Ask espacially collecting terminated may son expression extremely</a>
                </div>
            </div>
            <div class="col-md-6 list">
                <div class="mcustomscrollbar" data-height="400">
                    <div class="row item">
                        <div class="col-xs-4">
                            <img src="Theme/img/blog-1.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="col-xs-8">
                            <p>Jeff D. Stutler - 16 Septemper 2016</p>
                            <a href="Blog-Post-Single.html">Ask espacially collecting terminated may son expression extremely</a>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-xs-4">
                            <img src="Theme/img/blog-2.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="col-xs-8">
                            <p>Jeff D. Stutler - 16 Septemper 2016</p>
                            <a href="Blog-Post-Single.html">Ask espacially collecting terminated may son expression extremely</a>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-xs-4">
                            <img src="Theme/img/blog-4.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="col-xs-8">
                            <p>Jeff D. Stutler - 16 Septemper 2016</p>
                            <a href="Blog-Post-Single.html">Ask espacially collecting terminated may son expression extremely</a>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-xs-4">
                            <img src="Theme/img/blog-3.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="col-xs-8">
                            <p>Jeff D. Stutler - 16 Septemper 2016</p>
                            <a href="Blog-Post-Single.html">Ask espacially collecting terminated may son expression extremely</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 button">
                <button type="button" class="btn btn-arrow">Read More <i class="fa fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section><section class="clients p-t-40 p-b-40">
    <div class="container">
        <div class="owl-carousel" data-items="6" data-autoplay="2000">

            <div class="item"><img src="Theme/img/client-1.jpg"></div>
            <div class="item"><img src="Theme/img/client-2.jpg"></div>
            <div class="item"><img src="Theme/img/client-3.jpg"></div>
            <div class="item"><img src="Theme/img/client-4.jpg"></div>
            <div class="item"><img src="Theme/img/client-5.jpg"></div>
            <div class="item"><img src="Theme/img/client-6.jpg"></div>
            <div class="item"><img src="Theme/img/client-1.jpg"></div>
            <div class="item"><img src="Theme/img/client-2.jpg"></div>
            <div class="item"><img src="Theme/img/client-3.jpg"></div>
            <div class="item"><img src="Theme/img/client-4.jpg"></div>
            <div class="item"><img src="Theme/img/client-5.jpg"></div>
            <div class="item"><img src="Theme/img/client-6.jpg"></div>

        </div>
    </div>
</section>
        </div>
        <footer id="footer" class="footer">
    <div class="ftop">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>About Palovit</h4>
                    <p><?php echo $G_query['about'] ?></p>
                    <ul class="social">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="google"><a href="#"><i class="fa fa-google"></i></a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Get In Touch</h4>
                    <ul class="adress">
                        <li><i class="fa fa-map-marker"></i> <?php echo $G_query['address'] ?></li>
                        <li><i class="fa fa-phone"></i> <?php echo $G_query['phone'] ?></li>
                        <li><i class="fa fa-envelope"></i><?php echo $G_query['email'] ?></li>
                        <li><i class="fa fa-support"></i> support@palovit.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>E-Newsletter</h4>
                    <p>You can subcribe to our newsletter, we will send you about newest Projects</p>
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email...">
                            <span class="input-group-btn">
                                <button class="btn btn-palovit" type="submit">SUBMIT</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="fbottom">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="index-2.html" class="logo">
                        <img src="Theme/img/logo1.png" class="img-responsive" alt="" />
                    </a>
                </div>
                <div class="col-md-4 copyright">
                   Copyright 2016. All Rights Reserved.
                </div>
                <div class="col-md-6 clearfix fmenu">
                    <ul>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
    </div>
    <a class="pagetop" href="#">
        <i class="fa fa-chevron-up"></i>
    </a>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>

    <script src="Plugins/isotope/isotope.pkgd.min.js"></script>

    <script src="Plugins/owl-carousel/owl.carousel.min.js"></script>

    <script src="Plugins/Magnific-Popup/jquery.magnific-popup.min.js"></script>

    <script src="Plugins/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

    <script src="Plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="Plugins/jquery-bar-rating/jquery.barrating.min.js"></script>

    <script src="Plugins/masterslider/jquery.easing.min.js"></script>
    <script src="Plugins/masterslider/masterslider.min.js"></script>

    <script src="Theme/js/Script.js"></script>
    

    <script src="Scripts/jquery.cookie-1.4.1.min.js"></script>
    <link rel="stylesheet" href="Theme/demo/Demo.css" />
    <script src="Theme/demo/Demo.js"></script>

</body>
</html>