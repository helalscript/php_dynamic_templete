<?php
$con = new mysqli('localhost', 'root', '', 'tiens');
$info = $con->query('select * from general_info')->fetch_assoc();
$sliders = $con->query('select * from sliders');
$events = $con->query('select * from events');
$client = $con->query('select * from clients');
$photo_gallery = $con->query('select * from photo_gallery');
$news = $con->query('select * from news order by id desc')->fetch_all(MYSQLI_ASSOC);
$products = $con->query('select products.*,categories.name as category from products join categories on categories.id=products.category_id')->fetch_all(MYSQLI_ASSOC);
$nav_bar=$con->query('select * from nav_bar')->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $info['title'] ?></title>
    <meta name="description" content="tiens-bd">

    <link rel="image_src" href="media/common/logo-fb.html">
    <link rel="canonical" href="index.html">
    <link type="image/x-icon" rel="shortcut icon" href="media/common/favicon-16x16.png">
    <link type="image/x-icon" rel="icon" href="media/common/favicon-16x16.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/%40fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" type="text/css" href="common/css/eMythMakersa8c7.css?19%20November,%202023%2009:21:24">
</head>

<body>

    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-lg-start justify-content-center">
                        <div class="call-us">
                            <a href="tel:+88-01720-123458"><i class="fas fa-phone"></i> Call Us: <?php echo $info['phone'] ?></a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-lg-end justify-content-center">
                        <div class="DTopSocialIcon">
                            <ul class="social-network">
                                <li><a href="#" target="blank" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="blank" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="blank" class="icoInstagram" title="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="blank" class="icoLinkedin" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="blank" class="icoYoutube" title="youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="index.html">
                                    <div class="logo">
                                        <!-- <span>Monowara</span> <br> Foundation -->
                                        <img class="img-fluid" src="admin/uploads/<?php echo $info['logo'] ?>" alt="logo" title="logo">
                                    </div>
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">


                                    <ul class=" navbar-nav">

                                    <?php foreach($nav_bar as $nv=>$kv){ ?>
                                        <li class="nav-item"> <a class="nav-link" href="<?php ?>"><?php echo $kv['name'] ?></a>
                                        </li>
                                            <?php }?>
                                            





 <!-- ........ dropdown nav start.................. -->
         <!-- ........ dropdown nav start................. -->
                                        <!-- <li class="nav-item"> <a class="nav-link" href="#">Our Story</a> </li> -->
                                        <li class="dropdown nav-item">
                                            <a class="nav-link" href="#" data-bs-toggle="dropdown">Product
                                                <i class="fas fa-chevron-down fa-xs"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="active"><a class="dropdown-item" href="medical-cat.html">Food
                                                        Supplements </a></li>
                                                <li><a class="dropdown-item" href="therapy-cat.html">Personal Care </a>
                                                </li>
                                                <li><a class="dropdown-item" href="assistive-device.html">Home Care </a>
                                                </li>
                                                <li><a class="dropdown-item" href="education-cat.html">HealthCare
                                                        Equipment </a>
                                                </li>
                                                <li><a class="dropdown-item" href="rehabilitation-cat.html">Promotional
                                                        Products </a>
                                                </li>
                                                <li><a class="dropdown-item" href="income-generating-cat.html">Marketing
                                                        Tools</a></li>
                                            </ul>
                                        </li>
         <!-- ........ dropdown nav end .................. -->
         <!-- ........ dropdown nav end .................. -->



                                   

             <!-- ........ search system attachment nav start .................. -->
             <!-- ........ search system attachment nav start .................. -->
                                        <li class="nav-item search">
                                            <div class="menu-search header-search">
                                                <a class="nav-link-search" href="#">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                            <div class="search_block Hide">
                                                <div class="container">
                                                    <div class="col-xl p-0">
                                                        <form action="#" method="get">
                                                            <div class="search_logo display-flex">
                                                                <input type="text" name="title" placeholder="Search Here...">
                                                                <button><i class="fa fa-search"></i></button>
                                                                <a href="#" class="close-search"><i class="fa fa-times"></i></a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
            <!-- ........ search system attachment nav end .................. -->
            <!-- ........ search system attachment nav end .................. -->

                                    </ul>
                                </div>


                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-angle-double-up"></i></a>

    <main>
        <!-- Slider Area -->
        <section class="hero-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-slider">
                            <?php while ($d = $sliders->fetch_assoc()) { ?>
                                <div class="items Slider-caption">
                                    <div class="hero-slider-img">
                                        <img class="img-fluid w-100" src="admin/uploads/<?php echo $d['photo'] ?>" alt="tiens-bd" title="tiens-bd">
                                    </div>
                                    <div class="Slider-Title">
                                        <h1><?php echo $d['title'] ?></h1>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Area -->
        <section class="product-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <a href="#">
                                <h3>Product</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="Courses-wrapper">
                    <div class="row">
                        <?php foreach ($products as $p) { ?>
                            <div class="col-lg-3 d-flex">
                                <a href="#">
                                    <div class="course align-self-stretch">
                                        <div class="course-img">
                                            <picture> <img src="admin/uploads/<?php echo $p['photo'] ?>" alt="course" title="course" class="img-fluid"> </picture>
                                        </div>
                                        <div class="course-info">
                                            <h5><?php echo $p['name'] ?></h5>
                                            <p><?php echo $p['category'] ?></p>
                                        </div>
                                        <div class="course-more d-flex justify-content-between align-items-center">
                                            <div class="course-status d-flex align-items-center">
                                                <span class="pink">৳<?php echo $p['price'] ?>Tk</span>
                                            </div>
                                            <div class="course-btn link-btn">
                                                See More
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="see-all">
                        <a href="#" class="link-btn">
                            See All
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Upcoming Event Area -->
        <section class="Upcoming-event-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <a href="#">
                                <h3>Upcoming Events</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="upcoming-event-wrapper">
                    <div class="row">
                        <?php while ($e = $events->fetch_assoc()) {
                            $date = explode(' ', $e['event_date']);
                        ?>
                            <div class="col-md-6">
                                <a href="event-details.html">
                                    <div class="upcoming-event-list">
                                        <div class="event-date">
                                            <p><?php echo $date[0] ?></p>
                                            <span> <?php echo $date[1] ?> </span>
                                        </div>
                                        <div class="event-details">
                                            <div class="video-overlay"></div>
                                            <picture> <img src="admin/uploads/<?php echo $e['photo'] ?>" alt="Event Title" title="Event Title" class="img-fluid"> </picture>
                                            <div class="event-details-content">
                                                <h5><?php echo $e['title'] ?></h5>
                                                <p><i class="far fa-clock"></i> <?php echo $e['event_time'] ?></p>
                                                <p><i class="fas fa-map-marker-alt"></i> <?php echo $e['location'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


        <!--blog-area-start-->
        <section class="blog-area blog-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <a href="#">
                                <h3>latest News</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="leadnews-area wow fadeInLeft" data-wow-duration="2s">
                            <a href="#">
                                <div class="blog-img">
                                    <div class="Imgresize">
                                        <figure class="ImgViewer">
                                            <picture class="FixingRatio">
                                                <img src="admin/uploads/<?php echo $news[0]['photo'] ?>" alt="banner" title="banner" class="img-fluid img100 ImgRatio">
                                            </picture>
                                        </figure>
                                    </div>
                                </div>
                                <div class="blog-date">
                                    <span><i class="fas fa-calendar-alt"></i><?php echo date('M d,Y', strtotime($news[0]['news_date'])) ?></span>
                                </div>
                                <div class="title">
                                    <h5><?php echo $news[0]['title'] ?></h5>
                                </div>
                                <div class="brief">
                                    <p><?php echo $news[0]['details'] ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="2s">
                        <?php foreach ($news as $i => $n) {
                            if ($i > 0) { ?>
                                <div class="spc-news-wrap">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="spc-news-img">
                                                    <div class="Imgresize">
                                                        <figure class="ImgViewer">
                                                            <picture class="FixingRatio">
                                                                <img src="admin/uploads/<?php echo $n['photo'] ?>" alt="banner" title="banner" class="img-fluid img100 ImgRatio">
                                                            </picture>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="spc-news-desc">
                                                    <div class="title">
                                                        <h5><?php echo $n['title'] ?></h5>
                                                    </div>
                                                    <div class="blog-date">
                                                        <span><i class="fas fa-calendar-alt"></i><?php echo date('M d,Y', strtotime($n['news_date'])) ?></span>
                                                    </div>

                                                    <div class="brief">
                                                        <p><?php echo $n['details'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </section>
        <!--blog-area-end-->
        <section class="our-client-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <a href="#">
                                <h3>Photo Gallery</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="media-wrapper">
                    <div class="row">
                        <?php while($d=$photo_gallery->fetch_assoc()){ ?>
                        <div class="col-lg-4 grid-item">
                            <div class="media-item media-box">
                                <a data-fancybox="" data-caption="Caption for single image" href="admin/uploads/<?php echo $d['photo'] ?>">
                                    <img src="admin/uploads/<?php echo $d['photo'] ?>" class="img-fluid w-100" alt="imghero" style="height:300px; width:200px">
                                    <div class="gallery-media-title">
                                        <h5 class="Title"><?php echo $d['title'] ?></h5>
                                    </div>
                                    <span class="view-icon">+</span>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="see-all">
                    <a href="#" class="link-btn">
                        See All
                    </a>
                </div>
            </div>
        </section>
        <section class="our-client-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <a href="#">
                                <h3>Our parents</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="client-list">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="customer-logos slider">
                                <?php while($d=$client->fetch_assoc()){ ?>
                                    <div class="slide">
                                        <img src="admin/uploads/<?php echo $d['logo'] ?>">
                                    </div>
                                <?php } ?>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#">
                                <img class="img-fluid" src="admin/uploads/<?php echo $info['logo'] ?>" alt="logo" title="logo">
                                <!-- <span>Monowara</span> <br> Foundation -->
                            </a>
                        </div>
                        <div class="contact-info-footer">
                            <address class="mb-0">
                                <p> <?php echo $info['address'] ?></p>
                            </address>
                            <p><a href="tel:+8801783513533"><?php echo $info['phone'] ?></a></p>
                            <p><a href="mailto:<?php echo $info['email'] ?>.net"><?php echo $info['email'] ?></a></p>
                        </div>
                        <div class="DTopSocialIcon mt-2">
                            <ul class="social-network">
                                <li><a href="#" target="blank" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="blank" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="blank" class="icoInstagram" title="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="blank" class="icoLinkedin" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="blank" class="icoYoutube" title="youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 d-flex justify-content-center">
                    <div class="footer-info footer-middle">
                        <h5>quick links</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <!-- <li><a href="#">Our Story</a></li> -->
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Publication</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3 d-flex justify-content-center">
                    <div class="footer-info footer-middle">
                        <ul class="fList-right">
                            <li><a href="#">Terms & conditions</a></li>
                            <li><a href="#">Privacy Policy </a></li>
                            <!-- <li><a href="#">Gallery</a></li> -->
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center">
                    <div class="footer-info footer-right">
                        <h5>ABOUT</h5>
                        <p><?php echo $info['about'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right-wrap">
                            <p>Copyright &copy;2023. All right &reg; reserved by
                                tiens-bd. Designed & Developed by <a href="#" target="_blank">renexlab.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap%405.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/%40fancyapps/ui%404.0/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="common/js/eMythMakers.js"></script>
    <script type="text/javascript">
        // slider
        $(document).ready(function() {
            $('.customer-logos').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 500,
                lazyLoad: 'ondemand',
                autoplay: true,
                cssEase: 'linear',
                prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
                nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
                slidesToShow: 6,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: false,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }

                ]

            });
        });
    </script>
</body>

</html>