<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$co=$_POST['ele'];
$year="candidates_".$co;
echo $year;
$cons=$_POST['data'];
$con=mysqli_connect('localhost','root','12345');
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))

  echo 'cannot connect';
  $can="SELECT distinct c.CAND_ID,c.FNAME,c.MNAME,c.LNAME,ct.CT_CONS_ID FROM $year c JOIN cand_cons_table ct ON c.CAND_ID=ct.CAND_ID WHERE ct.CT_CONS_ID='$cons'";

      $result=mysqli_query($con,$can);
?>
<option id="cand" value="Select Candidate" selected="true" disabled="true" readonly="true">Select Candidate</option>
<?php
      while($row=mysqli_fetch_array($result))
      {?>

      <option id="cand" value="<?php echo $row['CAND_ID']?>"><?php echo $row['CAND_ID'].'-'.$row['FNAME'].' '.$row['MNAME'].' '.$row['LNAME']?></option>
      <?php
     }
?>
</body>
</html>