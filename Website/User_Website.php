<!DOCTYPE html>
<html>
<head>
          <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />

<link rel="stylesheet" type="text/css" href="webpage1.css">
<link rel="stylesheet" type="text/css" href="form_style.css">
<script type="text/javascript" src="jquery.js"></script>
<style>
.selected
{
 background-color: grey;
}
</style>
</head>
<body style="background-color: rgb(204, 221, 255);">
<div id="main">
  <div class="header">
    <div id="logo"> 
      <img src="eci.png" align="left" width="80px" height="80px" style="position: absolute;top: 20px;">
      <font style="font-family: Verdana;font-weight: bold;font-size: 35px; position: absolute;top: 40px;left: 125px;">Election Commission of India</font>
    </div>
  <div id="menu">
   <ul id="me">
    <li class="selected"><a href="User_Website.php">Home</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="laws.html">Election Laws and Instructions</a></li>
    <li class="dropdown">
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

    <div class="sidebar">
      <fieldset style="position: relative;top: 10px;">
      Constituency : <select id="cons">
      <option value="" disabled selected>Select a constituency</option>
      <?php
      
      $con = mysqli_connect('localhost','root','12345');
      
      if(!$con)
      {
        echo "cannot connect";
      }
      
      if(!mysqli_select_db($con,'dvs'))
      {
        echo "cannot connect";
      }

      $query = "SELECT distinct CT_CONS_ID,CONS_NAME FROM cand_cons_table";
      $result = mysqli_query($con,$query);
      while($row=mysqli_fetch_array($result))
      {
        ?>
        <option value="<?php echo $row['CT_CONS_ID'] ?>"><?php echo $row['CT_CONS_ID']."-".$row['CONS_NAME'] ?></option>
        <?php
      }
      
      ?>
    </select>
    <br><hr><br>
    <div id="result"></div>
      </div>
    </fieldset>
      <div class="content">
    <img src="vote1.jpg" height="400px" width=""> <br> 
    
    </div>
 
  </div>

  <div id="footer">
    COPYRIGHT © ELECTION COMMISSION OF INDIA
  </div>

</div>

<script>
    
$(document).ready(function(){
  
 // alert('in ready');
  var previous='';
  var myint;
  $('#cons').on('change',function(){
    var str=$(this).val();
   // alert('in change');
    if(previous='')
    {
      previous=str;
    }
    else if(previous!=str)
    {
      previous=str;
      clearInterval(myint);
    }
    $('#result').load('count.php',{'q':str})
    myint=setInterval(function(){
     
        
        $('#result').load('count.php',{'q':str})
      
    },1000);
  })
})
</script>

</body>
</html>
