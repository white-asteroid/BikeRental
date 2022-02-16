
<?php
include 'includes\config.php';

if (isset($_POST['signup'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['phno'];
    $dob = $_POST['birthday'];
    $Address = $_POST['Address'];
    // $password = md5($_POST['password']);
    $password = $_POST['psw'];

    $sql = "Select EmailID from users where EmailID=:email";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    // $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $rc = $query->rowcount();
    echo "$rc' id Row count'";
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $em = $results[0]->EmailId;
    
    if ($query->rowCount() > 0) {
        echo "<script>alert('Email already exist. Try loging in')</script>";
    } 
    else {
        $sql = "INSERT INTO  users (FullName, EmailId, Password, ContactNo, dob, Address)
                             VALUES(:fname,:email,:password,:mobile,:birthday,:Address)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname', $fname, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $query->bindParam(':birthday', $dob, PDO::PARAM_STR);
        $query->bindParam(':Address', $Address, PDO::PARAM_STR);

        $query->execute();

        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            echo "<script>alert('Registration successfull. Now you can login');</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
            $sqls = "select * from users";
            $querys = $dbh->prepare($sqls);
            $querys->execute();
            $rc = $querys->rowcount();
            echo "$rc' id Row count'";
        }
    }
}
header('location:index.php');
?>
