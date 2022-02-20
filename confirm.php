<?php

include 'includes\config.php';

if (isset($_SESSION['email'])) {
    echo "all good";
    if (isset($_POST['order'])) {
        echo "order set";
        $hno = $_POST['hno'];
        $landmark = $_POST['landmark'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $fromd = $_POST['fromd'];
        $tod = $_POST['tod'];
        $msg = $_POST['msg'];
        $vid = $_COOKIE['ck_vid'];
        echo "\n Vid is $vid \n";
        $email = $_SESSION['email'];
        echo "\n $hno $landmark $city $state $fromd $tod $msg last is $vid \n";
        $sql = "select * from users where EmailId=:email";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
                echo $result->FullName ."with id : ". $result->id ;
                $id= $result->id;

                
            }
        } else {

            echo "ting ting tong ting $email";
        }

        $sql = "INSERT INTO orders( uid, hno, landmark, city, state, VehicleId, fromdate, ToDate, message, Status) 
        VALUES (:uid,:hno,:landmark,: city, :state, :vid, :fromd, :Tod, :msg, 'pending')";
                $query = $dbh->prepare($sql);
                $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                $query->bindParam(':hno', $hno, PDO::PARAM_STR);
                $query->bindParam(':landmark', $landmark, PDO::PARAM_STR);
                $query->bindParam(':city', $city, PDO::PARAM_STR);
                $query->bindParam(':state', $state, PDO::PARAM_STR);
                $query->bindParam(':vid', $vid, PDO::PARAM_STR);
                $query->bindParam(':fromd', $fromd, PDO::PARAM_STR);
                $query->bindParam(':tod', $tod, PDO::PARAM_STR);
                $query->bindParam(':msg', $msg, PDO::PARAM_STR);
                $query->execute();
                $lastInsertId = $dbh->lastInsertId();
                if ($lastInsertId) {
                    echo "<script>alert('ORDER Registration successfull.');</script>";
                } else {
                    echo "<script>alert('Something went wrong. Please try again');</script>";
                    $sqls = "select * from users";
                    $querys = $dbh->prepare($sqls);
                    $querys->execute();
                    $rc = $querys->rowcount();
                    echo "$rc' id Row count'";
                }

        // $sql = "INSERT INTO =$orders( uid, hno, landmark, city, state, VehicleId, fromdate, ToDate, message, Status) 
        // VALUES ()";
        // $query = $dbh->prepare($sql);
        // $query->bindParam(':fname', $fname, PDO::PARAM_STR);
        // $query->bindParam(':email', $email, PDO::PARAM_STR);

        // $lastInsertId = $dbh->lastInsertId();
        // if ($lastInsertId) {
        //     echo "<script>alert('ORDER Registration successfull.');</script>";
        // } else {
        //     echo "<script>alert('Something went wrong. Please try again');</script>";
        //     $sqls = "select * from users";
        //     $querys = $dbh->prepare($sqls);
        //     $querys->execute();
        //     $rc = $querys->rowcount();
        //     echo "$rc' id Row count'";
        // }
    }
}
