<html>
<head>
          <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />

 <title>Field Officer Login</title>
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
    <form class="login-form" name="vportalFO" action="vportalfo_verify.php" method="post">
      <input type="text" placeholder="Field Officer ID" name="ID" minlength="6" maxlength="6" autocomplete="off" onkeypress="return isNumberKey(event)" required/>
      <input type="password" placeholder="Password"  name="PASS" required/><br><br>
      <button type="submit">login</button>
    </form>
  </div>
</div>
</body>
</html>