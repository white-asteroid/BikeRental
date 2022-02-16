<?php
include 'includes\config.php';

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  // $password = md5($_POST['password']);
  $password = $_POST['psw'];
  $sql = "Select Fullname, EmailID,Password from users where EmailID=:email and Password=:password";
  $query = $dbh->prepare($sql);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':password', $password, PDO::PARAM_STR);
  $query->execute();
  $rc = $query->rowcount();
  // echo "$rc' id Row count'";
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  // $name = $results[0]->Fullname;
  // echo "your email '$name'";
  if ($query->rowCount() > 0) {
    // echo "setting sessions $results[0]->EmailId";
    $_SESSION['email'] = $_POST['email'];
    // $_SESSION['fname'] = $name;
    if (isset($_SESSION['email'])) {
      // echo "Done session set successfully ";
      header('location:index.php');
    }
    //   // $currentpage = $_SERVER['REQUEST_URI'];
    //   // echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
  } else {

    echo "<script>alert('Invalid Details! Redirecting');</script>";
    
  }
}
echo " <script>
const myTimeout = setTimeout(cdown, 500);
function cdown() {
  window.location.assign('index.php');
}
</script>
";