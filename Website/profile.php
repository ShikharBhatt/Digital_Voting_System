<?php
session_start();
$cand=$_POST['data'];
$con=mysqli_connect('localhost','root','12345');
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))
  echo 'cannot connect';

  $pro="SELECT * FROM candidate_table WHERE CAND_ID='$cand'";

  $result=mysqli_query($con,$pro);
  $row=mysqli_fetch_array($result);
  echo "<br><br>";
  $_SESSION['P_AFF']=$row['PROP_AFF'];
  $_SESSION['B_AFF']=$row['BUSS_AFF'];
  $_SESSION['C_AFF']=$row['CRIM_AFF'];
?>

<!DOCTYPE html>
<html>
<head>
          <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />

	<title></title>
  <link rel="stylesheet" type="text/css" href="w1.css">
</head>
<body>

 
    <div class="w3-container">
          <div class="w3-card-4" style="width:80%;">
          <header class="w3-container" style="background-color: #f47f41;">
              <h3 color="white"><?php echo $row['FNAME'].' '.$row['MNAME'].' '.$row['LNAME'];?></h3>
          </header>
          <div class="w3-container">
              <p style="font-weight: bold;font-size: 18px;position: relative;left:20px">Candidate ID : <?php echo $row['CAND_ID'] ?>&nbsp;&nbsp;&nbsp;&nbsp; </p>
              

            <hr>
                      <p align="right" style="float: right;margin-right: 50px;">	<img src="party_symbol.php?id=<?php echo $row['CAND_ID'] ?>" alt="IMAGE" class="w3-left w3-circle w3-margin-right"  style=";width:100px;position: relative;left:10px;bottom: 10px"><br>

</p>
            <img src="getImage.php?id=<?php echo $row['VOTER_ID'] ?>" alt="IMAGE" class="w3-left w3-circle w3-margin-right" height="120px" style="width:100px;position: relative;left:10px;bottom: 10px">
            <p style="position: relative;left:35px;font-family:'Tahoma';">Party Name : <?php echo $row['PARTY_NAME'] ?>            
</p>  
            <p style="position: relative;left:35px;font-family:'Tahoma';">Education Level : <?php echo $row['EDU_LEVEL'] ?></p>
            <p style="position: relative;left:35px;font-family:'Tahoma';">Political Experience : <?php echo $row['POL_EXP'] ?></p>
            <p style="position: relative;left:35px;font-family:'Tahoma';">Work Experience : <?php echo $row['WORK_EXP'] ?></p>
            <p style="position: relative;left:152px;font-family:'Tahoma';">Achievements : <?php echo $row['ACHIEVEMENTS'] ?></p>
            <p style="position: relative;left:152px;font-family:'Tahoma';">AFFIDAVITS: </p>
            <p style="position: relative;left:152px;font-family:'Tahoma';">Property Affidavit : <a href="propertypdf.php" target="_blank" >Property.pdf </a></p>
            <p style="position: relative;left:152px;font-family:'Tahoma';">Business Affidavit : <a href="businesspdf.php" target="_blank">Business.pdf</a> </p>
            <p style="position: relative;left:152px;font-family:'Tahoma';">Criminal Affidavit : <a href="crimepdf.php" target="_blank">Criminal.pdf</a></p>
          </div>
          </div>
      </div>
      <br><br>
      <hr style="width: 95%">


</body>
</html>