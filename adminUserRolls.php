<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $role = $confirm_role = "";
$username_err = $role_err = $confirm_role_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 0){
                    $username_err = "This username does not exist.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate role
    if(empty(trim($_POST["role"]))){
        $role_err = "Please enter a role.";     
    } elseif(!preg_match('/^[01234]+$/', trim($_POST["role"]))){
        $role_err = "role must be 0, 1, 2, 3 or 4.";
    } else{
        $role = trim($_POST["role"]);
    }
    

    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($role_err) && empty($confirm_role_err)){
        
        // Prepare an insert statement
        $sql = "Update users set role = ? where username=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sd", $param_username, $role);
            
            // Set parameters
            $param_username = $username;
            $role = $role; // Creates a role hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo "Role successfully updated";


                $log = "$username to $role";
                $action = "updateUserRoles";
                $auditsql = "INSERT INTO auditlog (username, action, log) VALUES (?, ?, ?)";
                $sourceUser= $_SESSION["username"];
            
                if($stmtt = mysqli_prepare($link, $auditsql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmtt, "sss", $sourceUser, $action, $log);
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmtt)){
                        // Redirect to login page
                        header("location: adminPanel.php");
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
            
                    // Close statement
                    mysqli_stmt_close($stmt);
                }




                sleep(1);
                header("location: adminPanel.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
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


<div class="wrapper">
        <h2>Update User Role</h2>
        <p>Please fill out this role to .</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <p>The Username can only contain letters, numbers, and underscores</p>
            <div class="form-group">
                <label>Role</label>
                <input type="number" name="role" class="form-control <?php echo (!empty($role_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $role; ?>">
                <span class="invalid-feedback"><?php echo $role_err; ?></span>
            </div>
            <p>0 = Unknown, 1 = Patient, 2 = Staff, 3 = Doctor, 4 = Admin</p>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
        </form>
    </div>    








<?php



?>




























</body>
</html>