<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   header("location: user_login.php");
   exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
<link rel="stylesheet" href="css/dashboard.css">
    <title>User Dashboard</title>
</head>
<body>
    <?php
    echo "<script>
     alert('Welcome to our page');
    </script>";
    require 'all_pages/_nav.php';
    ?>
    <h6 class="welcomenote">Welcome -<?php echo $_SESSION['emailid']?></h6>
    <div class="row" id="header">
        <h2>Dashboard</h2>
    </div>
    <div class="main">
         <!-- all the forms -->
 <button><a href="projects.php">Projects</a></button><br>
 <button><a href="teams.php">Teams</a></button><br>
 <button><a href="project_teams.php">projectTeams</a></button><br>
 <button><a href="Status.php">Status</a></button><br>
 <button><a href="Team_members.php">Team_members</a></button><br>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
<?php
require "all_pages/_footer.php";
?>
</html>