<!DOCTYPE html>
<html>
<head>
          <meta name="viewport" content="width=device-width initial-scale=1.0">

    <link rel="shortcut icon" href="India.ico" />

<link rel="stylesheet" type="text/css" href="foinfo.css">

<script type="text/javascript" src="jquery.js"></script>
<style>

.selected
{
 background-color: grey;
}

</style>
</head>
<body background="back.jpg" style="position: center;background-repeat: no-repeat;background-size:cover;">
<div id="main">
  <div class="header">
    <div id="logo">
      <img src="eci.png" align="left" width="80px" height="80px" style="position: absolute;top: 20px;">
      <font style="font-family: Verdana;font-weight: bold;font-size: 35px; position: absolute;top: 40px;left: 125px;">Election Commission of India</font>
    </div>
  <div id="menu">
   <ul id="me">
    <li><a href="User_Website.php">Home</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="laws.html">Election Laws and Instructions</a></li>
    <li class="dropdown" >
      <a href="javascript:void(0)" class="dropbtn">Information</a>
      <div class="dropdown-content">
        <a href="candinfo.php">Candidate Information</a>
        <a href="foinfo.php">Officer Information</a>
      </div>
    </li>
    <li><a href="Reports.php">Reports</a></li>
    <li><a href="faqs.html">FAQs</a></li>

  </ul>
  </div>
  </div>
  <div id="site_content">
    <fieldset>

  Constituency ID : <select id="cons" style="width:21%;">
    <option value="" selected="true" disabled="true">Select your constituency</option>
      <?php
      $con=mysqli_connect('localhost','root','12345');
    if(!$con) echo 'cannot connect';
    if(!mysqli_select_db($con,'dvs'))

      echo 'cannot connect';
      $query="SELECT distinct CONS_ID,CONS_NAME FROM fo_table";
      $result=mysqli_query($con,$query);

      while($row=mysqli_fetch_array($result))
      {?>

      <option value="<?php echo $row['CONS_ID']?>"><?php echo $row['CONS_ID'].'-'.$row['CONS_NAME']?></option>
      <?php
      }
    ?>
  </select>

</fieldset>
<br><br>
<div id="result"></div>
</div>
</div>

  <div id="footer" style="clear: both;">
    COPYRIGHT © ELECTION COMMISSION OF INDIA
  </div>
<script type="text/javascript">
    $(document).ready(function(){

  //alert('in ready');
  $('#cons').on('change',function(){
    var str=$(this).val();
    //alert('in change');

        $('#result').load('fdata.php',{'data':str})

  })
})
</script>
</body>
</html>
