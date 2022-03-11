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
    <link rel="stylesheet" href="assets\style\css\contactus.css">
    <link rel="stylesheet" href="assets\style\bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets\fonts\fontawesome-free-5.15.4-web\css\all.min.css">
    <link rel="stylesheet" href="assets\style\css\owl.carousel.min.css">
    <link rel="stylesheet" href="assets\style\css\header.css">
    <link rel="stylesheet" href="assets\style\css\mycss.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets\fonts\icomoon\style.css">
    <link rel="stylesheet" href="assets\style\css\contactus.css">
    <title>contact us</title>
    <style >
        /* .cnt-list{
    padding: 0px;
    margin: 0px;
}

.cnt-list > li{
    list-style: none;
    color: #555;
    font-size: 16px;
    line-height: 24px;
    margin: 20px 0;
    padding: 0 150px 0 0;
}

.icon-wrap{
    display: table-cell;
    vertical-align: middle;
}

.icon-wrap > .fa{
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e6e5e5;
    border-radius: 50%;
    color: #555;
    display: inline-block;
    font-size: 22px;
    height: 44px;
    line-height: 44px;
    margin-right: 15px;
    text-align: center;
    vertical-align: middle;
    width: 44px;
}

.contact-info-m{
    display: table-cell;
    vertical-align: middle;
}
.contact-info-m >a {
    text-decoration: none;
    color:#555;
}
.container{
    margin-bottom: 1.5rem;
}

.cnt-form{
    margin-bottom:3rem;

} */

    </style>
</head>

<body>
    <?php include('includes\headers.php'); ?>

    <div class="container mb-3 mt-2">
        <div class="row">
            <div class="cntus-head">
                <h1>Contact us</h1>
                <div class="headerline"></div>

            </div>
            <div class="container cntus-content">
                <div class="row">
                    <div class="col-sm-12 col-md-5 cnt-form">
                        <div class="card" style= "background-color: #fff8dc;">
                            <div class="card-body">
                                <h5 class="card-title">Send us a Message</h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Reach us</h6> -->
                                <!-- <form>
                                        <div class="form-group">
                                            <label for="cnt-name"></label>
                                            <input type="text" class="" id="cnt-name">
                                            <label for="cnt-email"></label>
                                            <input type="Email" class="" id="cnt-Email">
                                            <label for="cnt-phone"></label>
                                            <input type="tel" id="cnt-phone" name="cnt-phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                            <label for=""></label>
                                            <input type="text" class="cnt-msg" id="cnt-msg">
                                            <textarea class="cnt-msg" name="message" rows="4" required></textarea>
                                        </div>
                                    </form> -->
                                <form>
                                    <div class="mb-3">
                                        <label for="cnt-name" class="form-label">Full Name</label>
                                        <input type="Text" class="form-control" id="cnt-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cnt-email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="cnt-email" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cnt-phn" class="form-label">Phone number</label>
                                        <input type="tel" class="form-control" id="cnt-phn">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cnt-phn" class="form-label">Message</label>
                                        <textarea type="tel" class="form-control" id="cnt-phn"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="offset-md-1 col-sm-12 col-md-6 cnt-info">
                        <h2> Contact info : </h2>
                        <ul class="cnt-list">
                            <li>
                                <div class="icon-wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="contact-info-m">Gurunanak pura, Laxmi Nagar</div>
                            </li>
                            <li>
                                <div class="icon-wrap"><i class="fa fa-envelope-open-text"></i></div>
                                <div class="contact-info-m"><a href="#">shiv@gmail.com</a></div>
                            </li>
                            <li>
                                <div class="icon-wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="contact-info-m"><a href="#">9910903140</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>





    <?php include('includes\footer.php'); ?>
</body>

</html>