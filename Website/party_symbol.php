<?php
  $id = $_GET['id'];
  // do some validation here to ensure id is safe
$servername = "localhost";
$username = "root";
$password = 12345;
$dbname = "dvs";

// Create connection
$conn = new mysqli('localhost', 'root', '12345', 'dvs');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT PARTY_SYMBOL FROM candidate_table WHERE CAND_ID='$id'";
$result = $conn->query($sql);


   $row = $result->fetch_assoc();
       // echo "bid: " . $row["bid"]. " - Name: " . $row["bname"]. "Color: " . $row["color"]. "<br>";
      
    $conn->close();   
  
  header("Content-type: image/jpg");
  echo $row['PARTY_SYMBOL'];
?>