

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">Shiv@gmail.com</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">9910903140</span></a>


                <div class="float-right">

                    <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>
                    <!-- <a href="#" class=""> <span class="d-none d-md-inline-block">Welcome to 2-Rent</span></a> -->
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <button href="#" type="button" onclick="document.getElementById('login-101').style.display='flex'" class="login-butt btn btn-dark">
                            <span class="mr-2  "></span>
                            <span class="d-none d-md-inline-block">Login</span>
                        </button>

                        <a type="button" href="signup.php" style="width:auto;" class="butt btn btn-dark">
                            <span class="mr-2  "></span>
                            <span class="d-none d-md-inline-block">signup</span>
                        </a>
                        <!--onclick="document.getElementById('signup-101').style.display='block'" -->
                    <?php } else {
                    ?>
                        <p type="button" disab style="width:auto;" class="">
                            <span class="mr-2  "></span>
                            <span class="d-none d-md-inline-block">Welcome!</span>
                        </p>
                    <?php } ?>

                </div>

            </div>

        </div>

    </div>
</div>

<header id="header101" class="site-navbar js-sticky-header site-navbar-target" style="margin-bottom:0px !important" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">


            <div class="site-logo  col-2">
                <a href="index.php" class="text-black"><span class="text-primary">2-Rent</a>
            </div>
            <div class="dropdown offset-2 col-2">
                <button class="btn btn-secondary btn-sm dropdown-toggle"<?php if (!isset($_SESSION['email'])) 
                { ?> style="visibility :hidden;" <?php } ?>
                type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-user"></i>

                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item active" href="myorder.php">My orders</a></li>
                    <li><a class="dropdown-item" href="myorder.php">Profile settings</a></li>
                    <li><a class="dropdown-item" href="changepass.php">update password</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <!-- <li><a class="dropdown-item" href="#">My profile</a></li> -->
                    <!-- <li>
                        <p class="dropdown-item">Name Here</p>
                    </li> -->
                    <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                </ul>
            </div>
            <div class="col-8">
                <nav class="site-navigation text-right ml-auto bold" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block float-right">
                        <li><a href="index.php" class="nav-link ">Home</a></li>



                        <li>
                            <a href="aboutus.php" class="nav-link">About Us</a>
                            <!-- <ul class="dropdown arrow-top">
                                <li><a href="#team-section" class="nav-link">Team</a></li>
                                <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                                <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                <li class="has-children">
                                    <a href="#">More Links</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </li>
                        <li><a href="listing.php" class="nav-link">Bike listings</a></li>
                        <li><a href="whyus.php" class="nav-link">Why Us/FAQs</a></li>


                        <li><a href="contactus.php" class="nav-link">Contact us</a></li>
                    </ul>
                </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none">
                <a style="float:right" href="#" class="site-menu-toggle py-5 js-menu-toggle text-black">
                    <span class="icon-menu h3"></span></a>
            </div>

        </div>
    </div>

</header>

<!-- <div class="hero" style="background-image: url('images/hero_1.jpg');"></div> -->