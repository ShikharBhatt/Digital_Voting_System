<html>
<?php
session_start();
?>
<head>
          <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />

 <title>Voter Login</title>
 <link rel="stylesheet" type="text/css" href="login_style.css"> 
<script type="text/javascript">

	function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
</head>
<body background="flag.jpg" style="background-position: center; background-size:100%;">
<div class="login-page">
  <div class="form">
    <form class="login-form" name="vportalvoter" action="vportalvoter_verify.php" method="post">
      <input type="text" minlength="10" maxlength="10" placeholder="Voter ID" name="V_ID" autocomplete="off" onkeypress="return isNumberKey(event)" required/>
      <input type="password" placeholder="Password" name="V_PASS" required/><br><br>
      <button type="submit">login</button>
    </form>
  </div>
</div>
</body>
</html>