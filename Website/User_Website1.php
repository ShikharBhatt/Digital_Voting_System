<!DOCTYPE html>
<html>
<head>
          <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />

<link rel="stylesheet" type="text/css" href="webpage.css">
<link rel="stylesheet" type="text/css" href="form_style.css">
<style>


</style>
</head>
<body background="much_patriotism.jpg" style="position: center;background-repeat: no-repeat;background-size:  100%">
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
        <a href="#">Candidate Information</a>
        <a href="foinfo.php">Field Officer Information</a>
      </div>
    </li>
    <li><a href="Reports.php">Reports</a></li>
    <li><a href="User_Website.php">FAQs</a></li>
    <li><a href="User_Website.php"></a></li>

  </ul>
  </div>
  </div>
  <div id="site_content">

    <div class="sidebar">
      <fieldset style="position: relative;top: 10px;">
      Constituency : <select name="cons" onchange="showdata(this.value)">
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
    <img src="no voter.png">  
    </div>

  </div>

  <div id="footer">
    COPYRIGHT © ELECTION COMMISSION OF INDIA
  </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  alert("hello"); 
$(document).ready(function(){

   var previous='';
  var myint=NULL;
  $('#cons').on('change',function(){
    alert("world");
    var str=$(this).val();
    if(previous='')
    {
      previous=str;
    }
    else if(previous!=str)
    {
      previous=str;
      clearInterval(myint);
    }
    myint=setInterval(function(){
      if(str="")
      {
        $('#result').html(html);
      }
      else
      {
        $.ajax({
          type:'GET',
          url:'count.php',
          data:'q='+str,
          success:function(html){
            $('#result').html(this.responseText);
          }
        })
      }
    },1000);
  })
})
</script>

</body>
</html>
