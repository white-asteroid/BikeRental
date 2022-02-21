<?php
include 'includes\config.php';

include 'includes\order.php';

if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
$vid = $_GET['vid'];
$_SESSION['vid'] = $vid;
// echo "$vid";
$sql = "SELECT id,VehiclesTitle,VehiclesOverview, VehiclesBrand, PricePerDay, FuelType, ModelYear, Vimage1,Vimage3,Vimage2 FROM vehicles where id =:vid;";
$query = $dbh->prepare($sql);
$query->bindParam(':vid', $vid, PDO::PARAM_STR);
$query->execute();
// echo $query->rowCount();
if ($query->rowCount()) {
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $vt = $results[0]->VehiclesTitle;
    // echo $vv;
    $vb = $results[0]->VehiclesBrand;
    $price = $results[0]->PricePerDay;
    $fuel = $results[0]->FuelType;
    $model = $results[0]->ModelYear;
    $vo = $results[0]->VehiclesOverview;
    $v1 = $results[0]->Vimage1;

    $v2 = $results[0]->Vimage2;

    $v3 = $results[0]->Vimage3;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\style\bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets\fonts\fontawesome-free-5.15.4-web\css\all.min.css">
    <link rel="stylesheet" href="assets\style\css\owl.carousel.min.css">
    <link rel="stylesheet" href="assets\style\css\header.css">
    <link rel="stylesheet" href="assets\style\css\mycss.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets\fonts\icomoon\style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" href="assets\style\css\signup.css"> -->
    <title>2-Rent home</title>
</head>
<style>
    img {
        max-width: 100%;
        height: 400px;
    }
</style>

<body>
    <?php include('includes\headers.php'); ?>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div id="carouselExampleControls" class="carousel slide col-md-6 col-sm-12" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets\images\<?php echo htmlentities($v1); ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets\images\<?php echo htmlentities($v2); ?>"" alt=" Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets\images\<?php echo htmlentities($v3); ?>"" alt=" Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="offset-md-1 col-md-5 col-sm-11">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlentities($vt); ?></h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>RS.<?php echo htmlentities($price); ?></strong></li>
                            <li class="list-group-item">Model : <?php echo htmlentities($model); ?> </li>
                            <li class="list-group-item">Brand : <?php echo htmlentities($vb); ?></li>
                            <li class="list-group-item">Fuel type : <?php echo htmlentities($fuel); ?></li>
                            <!-- <li class="list-group-item">Vestibulum at eros</li> -->
                        </ul>
                        <p class="card-text"> <?php echo htmlentities($vo); ?></p>
                        <button onclick="confirmOrder()" class="btn btn-danger ">place order</button>
                    </div>
                </div>
            </div>
        </div>
    </div <?php include('includes\footer.php'); ?> </body>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
        // function checkDate(){
        // fod=$('#fromd').val();
        // tod=$('#tod').val();
        // }
        
        // onclick="confirmOrder()"
        function confirmOrder() {
            document.getElementById('header101').style.display = 'none';
            document.getElementById('order101').style.display = 'block';
            // console.log("this is id" + va);
            // sessionStorage.vid = va;
            // document.cookie = vid + "=" + va;
            // console.log("cokkie : " + getCookie(vid));
            // // ck_vid =va;

            // // setcookie(ck_vid);
            // console.log("this is id ifuncn session " + sessionStorage.vid);
        }

        function confirmOrderClose() {
            document.getElementById('header101').style.display = 'block';
            document.getElementById('order101').style.display = 'none';
        }
    </script>

</html>