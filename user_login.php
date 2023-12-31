<?php error_reporting(0); ?> 
<?php
include 'db_connect.php';
// User_login table
if ($_SERVER['REQUEST_METHOD']=='POST'){
     $emailid = $_POST["emailid"];
     $password = $_POST["password"];

    $sql ="select * from registration where EmailID = '$emailid' AND Password ='$password' ";
    $result = mysqli_query($conn,$sql);
     $num = mysqli_num_rows($result);
    //  echo $num;
     if($num == 1){
        echo "Login successfull";
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['emailid'] = $emailid;
        header("Location:dashboard.php");
        exit();
     }
     else{
         echo '<script type="text/javascript">
         alert("Invalid Credentials.!");
        </script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/user_login.css"> -->
    <title>Login Form</title>
</head>
<body>
<?php
  require 'all_pages/_nav.php';
?>
<form action="user_login.php" class="loginform" method="POST">
  <div class="mb-3 mt-6 col-8">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailid">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 mt-6 col-8">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
</body>
<?php
 require 'all_pages/_footer.php';
?>

</html>


