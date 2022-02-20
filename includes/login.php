<?php
// include 'includes\config.php';
include 'includes\forgotpassword.php';
// if (isset($_POST['login'])) {
//   $email = $_POST['email'];
//   // $password = md5($_POST['password']);
//   $password = $_POST['psw'];
//   $sql = "Select Fullname, EmailID,Password from users where EmailID=:email and Password=:password";
//   $query = $dbh->prepare($sql);
//   $query->bindParam(':email', $email, PDO::PARAM_STR);
//   $query->bindParam(':password', $password, PDO::PARAM_STR);
//   $query->execute();
//   $rc = $query->rowcount();
//   echo "$rc' id Row count'";
//   $results = $query->fetchAll(PDO::FETCH_OBJ);
//   $fname = $results[0]->Fullname;
//   echo "your email '$email'";
//   if ($query->rowCount() > 0) {
//       echo "setting sessions $results[0]->EmailId";
//      $_SESSION['email'] = $results[0]->EmailId;
//      $_SESSION['fname'] =$results[0]->Fullname;
//     // $currentpage = $_SERVER['REQUEST_URI'];
//     // echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
//    } else {
//     echo "<script>alert('Invalid Details');</script>";
//    }
// }   ?>


 <div class="w3-container mt-5">
    <!-- <h2>W3.CSS Login Modal</h2>
    <button onclick="document.getElementById('login-101').style.display='block'" class="w3-button w3-green w3-large">Login</button> -->

    <div id="login-101" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <form class="w3-container" method="post" action="login_submit.php">
          <div class="w3-section">
            <label><b>Email</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="email" required>
            <label><b>Password</b></label>
            <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
            <button class="w3-button w3-block w3-green w3-section w3-padding" value="login" name="login" type="submit">Login</button>
            <!-- <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me -->
          </div>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('login-101').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          <span class="w3-right w3-padding w3-hide-small"><button onclick="document.getElementById('login-101').style.display='none'; document.getElementById('forgot101').style.display='block'" >Forgotpassword?</button></span>
        </div>

      </div>
    </div>
  </div>
