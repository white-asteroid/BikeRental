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
                            <h5 class="card-title">Devanshi</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-sm-12 col-md-9 mt-5 mb-5 " style="margin:auto;">
            <div class="col-md-3 col-sm-3 pr-sidebar">
                <div class="profile-nav">
                    <ul>
                        <li><a href="profile.php">Profile Settings</a></li>
                        <li><a href="update-password.php">Update Password</a></li>
                        <li><a href="my-booking.php">My Booking</a></li>
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="offset-md-1 col-md-8 col-sm-12">
                <form class="pr-form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <?php include 'includes/footer.php'; ?>
</body>

</html>