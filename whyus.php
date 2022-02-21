<?php
 include 'includes\config.php';

if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets\style\css\whyus.css"> -->
    <link rel="stylesheet" href="assets\style\bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets\fonts\fontawesome-free-5.15.4-web\css\all.min.css">
    <link rel="stylesheet" href="assets\style\css\owl.carousel.min.css">
    <link rel="stylesheet" href="assets\style\css\header.css">
    <link rel="stylesheet" href="assets\style\css\mycss.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets\fonts\icomoon\style.css">
    <link rel="stylesheet" href="assets\style\css\whyus.css">
    <title>Document</title>
    <style>
        .btn-text {
            /* margin-bottom: 1.5rem; */
            width: 100%;
            text-align-last: left;
        }
    </style>

</head>

<body>
    <?php include "includes/headers.php"; ?>

    <div class="container mt-2 mb-3">
        <div class="row">
            <div class="whyus-head">
                <h1>SO... Why us?</h1>
                <div class="headerline"></div>

            </div>
            <div class="whyus-content">
                <div class="abtus-content">
                    <p>2-Rent is a bike rental platform which aims to fill the void in the transportation sector. The platform is designed primarily for daily commuters who rely on public transportation. It allows users to choose from a variety of bikes and scooters available at affordable prices and promises to deliver quality service.
                    </p>
                    2-Rent aims to solve the absence of last and first-mile connectivity that exists in most of the major cities in India. 2-Rent provides the users with the experience of a personalised ride where the process of renting a bike/scooter is made easy and hassle-free.
                    <p>
                        2-Rent has built a technologically exclusive and user-friendly platform which it believes will revolutionise the future. 2-Rent is a two-wheeler rental company headquartered in New Delhi, India. It is a Limited Liability Partnership(LLP) firm.
                    </p>
                    <div class="whyus-head">
                        <h1>FAQs</h1>
                        <div class="headerline"></div>

                    </div>
                </div>
                <div id="why-start">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-text" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Who are we?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#why-start">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-text collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Our aim:
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#why-start">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingthree">
                            <h5 class="mb-0">
                                <button class="btn btn-text collapsed" data-toggle="collapse" data-target="#headingthree" aria-expanded="false" aria-controls="headingthree">
                                    Do we provide Road side services ?
                                </button>
                            </h5>
                        </div>
                        <div id="headingthree" class="collapse" aria-labelledby="headingthree" data-parent="#why-start">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfour">
                            <h5 class="mb-0">
                                <button class="btn btn-text collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Do we provide Road side services ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#why-start">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <?php include "includes/footer.php"; ?>




</body>

</html>