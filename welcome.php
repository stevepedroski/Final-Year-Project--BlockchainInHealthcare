<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Blockchain for Healthcare</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Welcome.php">Welcome <span class="sr-only">(current)</span></a>


        
  <li class="nav-item active">
        <a class="nav-link" href="adminPanel.php">Admin <span class="sr-only">(current)</span></a>
   

  <li class="nav-item active">
        <a class="nav-link" href="javascript:history.back()">Back <span class="sr-only">(current)</span></a>
        </ul>

  
      </div>
  <div class="navbar-nav">
  <a href="logout.php" class="btn btn-danger ml-3">Sign out</a>
    </div>
</nav>

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>


    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images\open-graph.a74435697f45.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">NHS numbers database</h5>
    <p class="card-text">As provided by blockchain, you have <b> read access </b> to this table in the database. Blockchain will provide the password for this table.</p>
    <a href="results1.php" class="btn btn-primary">View table</a>
  </div>
</div>

</body>
</html>