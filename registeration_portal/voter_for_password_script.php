<?php
	
	session_start();

?>
	<html>
	<head>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />
		
		<style>
		 header {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
footer{
       padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    width:100%;
}
	input[type=text],[type=textarea],[type=tel],[type=date],[type=file],[type=number],[type=phone],[type=email],select {
    
    padding: 5px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
    font-family: verdana;
    font-size: 12px;
    
    width:210px;
   }
	
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    width: 150px;
    border-radius: 8px;
}

.button1 {
    background-color: rgb(200,0,0); 
    color: white; 
    border: 2px solid rgb(240,0,0);
    margin-left: 250px;
}

.button1:hover {
    background-color: rgb(240,0,0);
    color: white;
}
label
{
    font-style: sans-serif;
    font-weight: bold;
    font-size: 15px;
    padding-left: 20px;
 }	
   </style>
</head>
    <body background="shade.png" style="background-position: center; background-size:100%;">
            <header>
    <img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
    <h2>ELECTION COMMISSION OF INDIA</h2>
    </header>

	<div >

	<form name="voter_for_password"  action="fo_intermediate.php" method="post">
		<tr><td><label style="position:absolute;top:44%;left:20%;" >Voter ID :</label> 
	        <td><input style="position:absolute;top:42%;left:30%;" type="tel" name="G_VOTER_ID"  value="<?php echo $_SESSION['G_VOTER_ID']?>" disabled/>   </tr>
	        <tr><label style="position:absolute;top:60%;left:20%;" >Password :</label> 
	        <input style="position:absolute;top:58%;left:30%;" type="text" value="<?php echo $_SESSION['PASSWORD']?>" disabled/></tr> 
	        <br>
	<button class="button button1"  type="submit" name="SUB" style="position:absolute;top:40%;right:30%;">Back</button>
	</form>
	</div>
	
	   <br><br>
<footer style="height:40px;width: 96.5%;position:absolute;bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
	</body>
	</html>
	