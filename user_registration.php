<?php error_reporting(0); ?>
<?php
include 'db_connect.php';
// Registration table
if (isset($_POST) && is_array($_POST) && count($_POST) > 0) {
  $Name = $_POST["name"];
  $emailid = $_POST["emailid"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  //check weather this emailid exits
  $exitsql = "select * from registration where emailid = '$emailid'";
  $result = mysqli_query($conn, $exitsql);
  $numExitsRows = mysqli_num_rows($result);
  if ($numExitsRows > 0) {
    echo "<script>
      alert('Emailid already exits');</script>";
  }
   else {
    //inserting into Registration table
    if ($password == $cpassword){
      $sql = "INSERT INTO `registration`(`sno`,`Name`,`EmailID`, `Password`,`confirmpassword`) VALUES (NULL,'$Name','$emailid','$password','$cpassword')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        session_start();
        // If the condition is met, set a JavaScript alert
        echo '<script>alert("Successfully Registered.!");</script>';
        // header("Location: user_login.php");
        // exit();
      }
    } 
    else {
      echo '<script>alert("Password do not match.!");</script>';
    }
  }
}
// if($login == true){
//   echo "<script>
//   window.location.replace('http:user_login.php');
//   </script>";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/user_registration.css">
  <title>User Registration</title>
</head>

<body>
  <?php
  require 'all_pages/_nav.php';
  ?>
  <form action="user_registration.php" class="form-horizontal" method="POST">
    <h4>Registration</h4>
    <div class="mb-3 mt-6 col-8">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>

    <div class="mb-3 col-8">
      <label class="form-label">EmailID</label>
      <input type="email" class="form-control" name="emailid" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3 col-8">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3 col-8">
      <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button class="btn btn-success"><a href="index.php">Go to Home</a></button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php
require 'all_pages/_footer.php';
?>