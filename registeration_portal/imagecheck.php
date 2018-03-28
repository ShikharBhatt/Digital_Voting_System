<html>
<?php 
session_start();
?>
<body>
<img src="getImage.php?id=<?php echo $_SESSION['UP_VOTER_ID'] ?>" width="175" height="200" />
</body>
</html>