
<?php 
    include 'includes\config.php';
    
    // if (isset($_POST['signup'])) {
    //     $fname = $_POST['fname'];
    //     $email = $_POST['email'];
    //     $mobile = $_POST['phno'];
    //     $dob = $_POST['birthday'];
    //     $Address = $_POST['Address'];
    //     // $password = md5($_POST['password']);
    //     $password = $_POST['psw'];
    //     $sql = "INSERT INTO  users (FullName, EmailId, Password, ContactNo, dob, Address)
    //                          VALUES(:fname,:email,:password,:mobile,:birthday,:Address)";
    //     $query = $dbh->prepare($sql);
    //     $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    //     $query->bindParam(':email', $email, PDO::PARAM_STR);
    //     $query->bindParam(':password', $password, PDO::PARAM_STR);
    //     $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    //     $query->bindParam(':birthday', $dob, PDO::PARAM_STR);
    //     $query->bindParam(':Address', $Address, PDO::PARAM_STR);
        
    //     $query->execute();
       
    //     $lastInsertId = $dbh->lastInsertId();
    //     if ($lastInsertId) {
    //       echo "<script>alert('Registration successfull. Now you can login');</script>";

    //     } else {
    //       echo "<script>alert('Something went wrong. Please try again');</script>";
    //        $sqls = "select * from users";
    //     $querys = $dbh->prepare($sqls);
    //     $querys->execute();
    //     $rc= $querys-> rowcount();
    //     echo "$rc' id Row count'";
       
    //     }
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets\fonts\icomoon\style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" href="assets\style\css\signup.css"> -->
    <title>2-Rent home</title>
</head>

<body>
    <?php include('includes\headers.php'); ?>


    
    <div id="signup-101" class="mt-2">
        <div class="w3-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <form class="w3-container" action="signup_submit.php" method="post">
                <div class="w3-section">
                    <label><b>Full name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="fname" required>
                    <label><b>Email</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Abs@xyz.com" name="email" required>
                    <!-- <label><b>Full name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required> -->
                    <label><b>Phone number</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="tel" placeholder="phone no" name="phno" required>
                    <label for="birthday">Birthday:</label>
                    <input type="date" class="w3-input w3-border w3-margin-bottom" id="birthday" name="birthday" placeholder="dd-mm-yyyy" name="dob" required>
                    <label for="Address"><b>Address</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="textarea" placeholder="Address" name="Address" required>
                    <label><b>Password</b></label>
                    <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
                    <button class="w3-button w3-block w3-green w3-section w3-padding" value="signup" name="signup" type="submit">Signup</button>
                    <!-- <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me -->
                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <a href="index.php" type="button" class="w3-button w3-red">Cancel</a>
            </div>

        </div>
    </div>
    </div>

    <?php include('includes/login.php');
    include('includes\footer.php'); ?>

</body>

</html>