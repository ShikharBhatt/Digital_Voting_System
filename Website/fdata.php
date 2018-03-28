<html>
<head>
  <link rel="stylesheet" type="text/css" href="w1.css">
        <meta name="viewport" content="width=device-width initial-scale=1.0">

    <link rel="shortcut icon" href="India.ico" />

</head>
<?php
$dis=$_POST['data'];
//echo $dis;
$con=mysqli_connect('localhost','root','12345');
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))

  echo 'cannot connect';

  $ro="select f.RO_ID,v.VOTER_ID,v.TITLE,v.FNAME,v.MNAME,v.LNAME,v.MOB_NO,v.EMAIL,f.CONSM_ID from ro_table f JOIN voter_table v ON f.VOTER_ID=v.VOTER_ID  WHERE f.CONSM_ID='$dis'";

  $roresult=mysqli_query($con,$ro);
  $roinfo=mysqli_fetch_array($roresult);
  ?>
  <body></body>
    <div class="w3-container">
          <div class="w3-card-4" style="width:50%">
          <header class="w3-container w3-black">
              <h3 color="white"><?php echo $roinfo['TITLE'].'. '.$roinfo['FNAME'].' '.$roinfo['MNAME'].' '.$roinfo['LNAME'];?></h3>
          </header>
          <div class="w3-container">
              <p style="font-weight: bold;font-size: 18px;position: relative;left:20px">Returning Officer ID : <?php echo $roinfo['RO_ID']?></p>
            <hr>
            <img src="getImage.php?id=<?php echo $roinfo['VOTER_ID'] ?>" alt="IMAGE" class="w3-left w3-circle w3-margin-right" style="width:100px;position: relative;left:10px;bottom: 10px">
            <p style="position: relative;left:25px;">Mob No. : <?php echo $roinfo['MOB_NO'] ?></p>
            <p style="position: relative;left:23px;">Email-ID : <?php echo $roinfo['EMAIL'] ?></p>
          </div>
          </div>
      </div>
      <br><br>
      <hr style="width: 95%">
<?php
  $star="select f.FO_ID,v.VOTER_ID,v.TITLE,v.FNAME,v.MNAME,v.LNAME,v.MOB_NO,v.EMAIL,f.CONS_ID,p.LOCATION from fo_table f JOIN voter_table v ON f.VOTER_ID=v.VOTER_ID JOIN polling_station_table p ON f.POLL_ID=p.POLL_ID WHERE f.CONS_ID='$dis'";
  if($result=mysqli_query($con,$star))

  {

    while($row=mysqli_fetch_array($result))
    {
      ?>
      			<div class="w3-container">

  				<div class="w3-card-4" style="width:50%">
    			<header class="w3-container w3-brown">
      				<h3 color="white"><?php echo $row['TITLE'].'. '.$row['FNAME'].' '.$row['MNAME'].' '.$row['LNAME'];?></h3>
    			</header>
    			<div class="w3-container">
      				<p style="font-weight: bold;font-size: 18px;position: relative;left:20px">Field Officer ID : <?php echo $row['FO_ID']?></p>
      			<hr>
      			<img src="getImage.php?id=<?php echo $row['VOTER_ID'] ?>" alt="IMAGE" class="w3-left w3-circle w3-margin-right" style="width:100px;position: relative;left:10px;bottom: 10px">
      			<p style="position: relative;left:25px;">Mob No. : <?php echo $row['MOB_NO'] ?></p>
      			<p style="position: relative;left:23px;">Email-ID : <?php echo $row['EMAIL'] ?></p>
      			<p style="position: relative;left:23px;">Location : <?php echo $row['LOCATION'] ?></p>
    			</div>
  				</div>
			</div>
			<br><br>

     <?php
    }
  }
  else
  {
  	 echo "wrong password/username";

    }

?>

</body>
</html>
