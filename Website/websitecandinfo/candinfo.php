<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="webpage.css">
<link rel="stylesheet" type="text/css" href="form_style.css">
<script type="text/javascript" src="jquery.js"></script>
<title>CANDIDATE INFORMATION</title>
</head>
<body background="much_patriotism.jpg" style="position: center;background-repeat: no-repeat;background-size:  cover">
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
    <li><a href="User_Website.php">Election Laws and Instructions</a></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Information</a>
      <div class="dropdown-content">
        <a href="candinfo.php">Candidate Information</a>
        <a href="foinfo.php">Officer Information</a>
      </div>
    </li>
    <li><a href="Reports.php">Reports</a></li>
    <li><a href="User_Website.php">FAQs</a></li>

  </ul>
  </div>
  </div>
  <div id="site_content">
    <fieldset>
      <form>
      Year : <select id="year" style="width: 15%">
        <option value="" selected="true" disabled="true">Select Year</option>
        <?php
          $con=mysqli_connect('localhost','root','12345');
          if(!$con) echo 'cannot connect';
          if(!mysqli_select_db($con,'dvs'))

            echo 'cannot connect';
            $query="SELECT distinct ELE_YEAR FROM candidate_table";
            $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result))
            {?>

            <option value="<?php echo $row['ELE_YEAR']?>"><?php echo $row['ELE_YEAR']?></option>
            <?php
            }
          ?>
      </select><br>
  Constituency ID : <select id="cons" style="width:21%;">
    <option value="" selected="true" disabled="true">Select constituency</option>
  </select><br>
    Candidate Name : <select id="cand" style="width:21%;">
    <option value="" selected="true" disabled="true">Select candidate</option>
  </select>

</fieldset>
<br><br>
<div id="result"></div>
</div>
</div>
  <div id="footer">
    COPYRIGHT © ELECTION COMMISSION OF INDIA
  </div>
<script type="text/javascript">
    $(document).ready(function(){
  
  alert('in ready');
  $('#year').on('change',function(){
    var ely=$(this).val();
    alert('in year');
     //window.location.href('cons.php');
       $('#cons').load('cons.php',{'data':ely})

  })

  $('#cons').on('change',function(){
    var ely=$('#year').val();
    var str=$(this).val();
    alert(ely);
    alert('in cons');
     

        $('#cand').load('cand.php',{'data':str,'ele':ely})

  })
   $('#cand').on('change',function(){
    var str=$(this).val();
    alert('in cand');
     
        $('#result').load('profile.php',{'data':str})

  })

})
</script>
</body>
</html>