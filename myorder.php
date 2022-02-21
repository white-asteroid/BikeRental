<?php include 'includes/config.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
$email = $_SESSION['email'];
// $sqlu = "SELECT * FROM users where EmailId = :email";
$sql = "SELECT o.id as oid , o.uid as uid ,o.VehicleId as vid, o.fromdate as fromd, o.ToDate as tod, u.FullName as fn, v.VehiclesTitle as vt FROM orders o, users u, vehicles v WHERE u.id = o.uid && v.id = o.VehicleId && u.EmailId = :email ;";
$query = $dbh->prepare($sql);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->execute();
// echo $query->rowCount();
if ($query->rowCount()) {
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    // echo "$results[0]->FullName";
} 
else{
    echo "<script>
    alert('No order found. Please place your order first');
    window.location.href='listing.php';
  </script>";
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
    <link rel="stylesheet" href="assets\style\css\profile.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets\fonts\icomoon\style.css">
    <title>Profile</title>
</head>

<body>
    <?php include 'includes/headers.php'; ?>
    <div class="container">
        <div class="row">
            <div class="card mb-3 div-center" style="background-color: #faebd7;">
                <div class="row g-0">
                    <div class="col-md-4 p-4">
                        <img src="assets\images\slide1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlentities($results[0]->fn); ?></h5>
                            <p class="card-text">Thanks for choosing us.  We won't let you down and will gear you up</p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-sm-12 col-md-9 mt-5 mb-5 " style="margin:auto;">
            <div class="col-md-3 col-sm-3 pr-sidebar">
                <div class="profile-nav">
                    <ul>
                        <!-- <li><a href="profile.php">Profile Settings</a></li> -->
                        <li><a href="changepass.php">Update Password</a></li>
                        <li><a href="my-booking.php">My Booking</a></li>
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="offset-md-1 col-md-8 col-sm-12">

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <!-- <th scope="col">sno</th> -->
                            <th scope="col">Oorder id</th>
                            <th scope="col">Vehicle name</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $result) { ?>
                        <tr>
                            <td> <?php echo htmlentities($result->oid) ?> </td>
                            <td><?php echo htmlentities($result->vt) ?></td>
                            <td><?php echo htmlentities($result->fromd) ?></td>
                            <td><?php echo htmlentities($result->tod) ?></td>
                        </tr>
                        <?php } ?>
            
                    </tbody>
                </table>


            </div>
        </div>
    </div>



    <?php include 'includes/footer.php'; ?>
</body>

</html>