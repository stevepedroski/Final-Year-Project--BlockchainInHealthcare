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

    <h1 class="my-5">Admin Dashboard</h1>


    <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="images\1.newuser.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Create a new User</h5>
      <p class="card-text">Creates a new user account, along with assigning a user their password, please remember this is tracked by the audit log</p>
      <a href="adminNewUser.php" class="btn btn-primary">Create new User</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="images\1editUser.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Modify User Role</h5>
      <p class="card-text">Modifies a user account's role, please remember that this is tracked by the audit log</p>
      <a href="adminUserRolls.php" class="btn btn-primary">Modify User Role</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="images\1newblockchain.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Create new Blockchain</h5>
      <p class="card-text">Creates a new blockchain for a user, please remember this is tracked by the audit log</p>
      <a href="adminNewBlockchain.php" class="btn btn-primary">Create new Blockchain</a>
    </div>
  </div>



  <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="images\1.addinfo.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Add Information to Blockchain</h5>
      <p class="card-text">Allows you to add information to an existing blockchain, please remember this is tracked by the audit log</p>
      <a href="adminInformationToBlockchain.php" class="btn btn-primary">Add Information to Blockchain</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="images\1adduserblock.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Add users to blockchain</h5>
      <p class="card-text">Allows you to add existing users to an existing blockchain, please remember this is tracked by the audit log</p>
      <a href="adminUsersToBlockchain.php" class="btn btn-primary">Add users to blockchain</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="images\1audit.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Access Audit Log</h5>
      <p class="card-text">Allows you to access the master audit log, please remember this is tracked by the audit log</p>
      <a href="adminAuditLog.php" class="btn btn-primary">Access Audit Log</a>
    </div>
  </div>

</div>

</body>
</html>
