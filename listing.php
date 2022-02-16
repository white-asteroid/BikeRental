<?php include 'includes/config.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}

if (isset($_POST['search'])) {
    // if (isset($_POST['brand']))
    // {
        $brand = $_POST['brand'];
    // }
    // else{
    //     $brand = 1;
    // }
    $fueltype = $_POST['fueltype'];
    $sql = "SELECT VehiclesTitle, VehiclesBrand, PricePerDay, FuelType, ModelYear, Vimage1 FROM vehicles where VehiclesBrand = :brand AND FuelType = :fueltype;";
    $query = $dbh->prepare($sql);
    $query -> bindParam(':brand',$brand, PDO::PARAM_STR);
    $query -> bindParam(':fueltype',$fueltype, PDO::PARAM_STR); 
}   
else{
    $sql = "SELECT VehiclesTitle, VehiclesBrand, PricePerDay, FuelType, ModelYear, Vimage1 FROM vehicles;";
    $query = $dbh->prepare($sql);
}

$query->execute();
// echo $query->rowCount();
if ($query->rowCount()) {
    $results = $query->fetchAll(PDO::FETCH_OBJ);
}
else{
    echo "<script>
    alert('No scooty for this brand and type available Choose anathore one');
    window.location.href='listing.php';
  </script>";
}
// $cnt=1;

// if ($query->rowCount() > 0) {   
//     echo "we have $query->rowCount() listings";
// }


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
    <link rel="stylesheet" href="assets\style\css\listing.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets\fonts\icomoon\style.css">
    <title>2-Rent Listings</title>
    <style>
        /* .card-form {
            width: auto;
            margin: 10px auto;
        }

        .div-center {
            width: auto;
            margin: 10px auto;
        } */
    </style>
</head>

<body>
    <?php include 'includes\headers.php'; ?>


    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="card card-form" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Find Your bike</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Filter</h6>
                        <form action="" method="post" id="filter-listing">

                            <select class="form-select mb-2" name="brand">
                                <option>Select Brand</option>
                                <option>Honda</option>
                                <option value="TVS">TVS</option>
                                <option value="Hero">hero</option>
                                <!-- <option value="CNG">Tesla</option> -->
                            </select>


                            <select class="form-select mb-3" name="fueltype">
                                <option selected disabled >Select Fuel Type</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Electric">Electric</option>
                                <!-- <option value="CNG">CNG</option> -->
                            </select>


                            <div class="form-group">
                                <button type="submit" name="search" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="offset-md-1 col-sm-8">
                <!-- main listing -->
                <?php foreach ($results as $result) {  ?>
                    <div class="card mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets\images\<?php echo htmlentities($result->Vimage1); ?>" class="img-fluid rounded-start list-img-h" alt="slide1.jpg">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlentities($result->VehiclesBrand); ?> , <?php echo htmlentities($result->VehiclesTitle); ?></h5>
                                    <p class="card-text"><small class="text-muted">Rs.<?php echo htmlentities($result->PricePerDay); ?></small></p>

                                    <ul class="sdetails">
                                        <li><i class="fa fa-user" aria-hidden="true"></i> 2 seats</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear); ?></li>
                                        <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType); ?></li>
                                    </ul>
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <button type="button" class="btn btn-outline-primary dbutt">Primary <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="card mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets\images\slide1.jpg" class="img-fluid rounded-start list-img-h" alt="slide1.jpg">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Honda</h5>
                                <p class="card-text"><small class="text-muted">Rs.1000/day</small></p>

                                <ul class="sdetails">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> 2 seats</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Alpha model</li>
                                    <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                                </ul>
                                <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                <button type="button" class="btn btn-outline-primary dbutt">Primary <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets\images\slide1.jpg" class="img-fluid rounded-start list-img-h" alt="slide1.jpg">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Honda</h5>
                                <p class="card-text"><small class="text-muted">Rs.1000/day</small></p>

                                <ul class="sdetails">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> 2 seats</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Alpha model</li>
                                    <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                                </ul>
                                <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                <button type="button" class="btn btn-outline-primary dbutt">Primary <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets\images\slide1.jpg" class="img-fluid rounded-start list-img-h" alt="slide1.jpg">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Honda</h5>
                                <p class="card-text"><small class="text-muted">Rs.1000/day</small></p>

                                <ul class="sdetails">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> 2 seats</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Alpha model</li>
                                    <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                                </ul>
                                <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                <button type="button" class="btn btn-outline-primary dbutt">Primary <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main listing -->
            </div>

        </div>
    </div>



    <?php include 'includes\footer.php'; ?>
</body>

</html>