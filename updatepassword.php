<?php
include 'includes\config.php';

if (!isset($_SESSION['token'][0])) {
    echo "Session token problem";
}

if (isset($_POST['update'])) {

   
    $password = $_POST['psw'];
    $email = $_SESSION['token'][1];
    echo "email: " .$email;
    $sql = " UPDATE users SET Password = :password where EmailId = :email";
    $query = $dbh->prepare($sql);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    echo $query->rowCount();
}