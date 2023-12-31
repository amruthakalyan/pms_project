<?php error_reporting(0); ?> 
<?php
include 'db_connect.php';
// Projects table
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $TeamMemberID = $_POST['TeamMemberID'];
    $TeamID = $_POST['TeamID'];
    $User_ID = $_POST['UserID'];
    
}

//inserting into Projects table
$sql = "INSERT INTO `teammembers` (`TeamMemberID`, `TeamID`,`UserID`) VALUES ('$TeamMemberID', '$TeamID','UserID');";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script type='text/javascript'>
  alert('login successfull');
  </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Projects</title>
</head>

<body>
    <!-- <h3>Project Management System</h3> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    <form action="" method="POST">
        TeamMemberID: <input type="text" name="TeamMemberID"><br>
        TeamID: <input type="text" name="TeamID"><br>
        UserID: <input type="text" name="UserID"><br>
        <button type="submit">submit</button><br>
        <button><a href="index.php">Go to Home</a></button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>