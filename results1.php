<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php // This is the module which will track a user coming to this webpage. 
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
        $action = "accessedResults1";
        $auditsql = "INSERT INTO auditlog (username, action, log) VALUES (?, ?, ?)";
        $sourceUser= $_SESSION["username"];
        $log = "$sourceUser Access the Audit Log";
    
        if($auditsmt = mysqli_prepare($link, $auditsql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($auditsmt, "sss", $sourceUser, $action, $log);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($auditsmt)){
                // Redirect to login page
                echo "";
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($auditsmt);
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
        <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="javascript:history.back()">Back <span class="sr-only">(current)</span></a>
    </ul>
  </div>
  <div class="navbar-nav">
  <a href="logout.php" class="btn btn-danger ml-3">Sign out</a>
    </div>
</nav>








<h1 class="my-5">Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>, and welcome to the NHS numbers table.</h1>














<?php
echo "<table style='border: solid 1px black;margin-left:auto;margin-right:auto;'>";
echo "<tr><th>NHS Number</th><th>Forename</th><th>Surname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "shall9";
$password = "pyGD-O10a4m8ss2r";
$dbname = "fypholoholo";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT nhsnum, forename, surname FROM data");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";






?>










</body>
</html>