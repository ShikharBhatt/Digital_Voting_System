<?php
  $id = $_GET['id'];
  // do some validation here to ensure id is safe


// Create connection
$conn = new mysqli('localhost', 'root', '12345', 'dvs');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT PHOTO FROM voter_table WHERE VOTER_ID=$id";
$result = $conn->query($sql);


   $row = $result->fetch_assoc();
       // echo "bid: " . $row["bid"]. " - Name: " . $row["bname"]. "Color: " . $row["color"]. "<br>";
      
    $conn->close();   
  
  header("Content-type: image/jpg");
  echo $row['PHOTO'];
?>