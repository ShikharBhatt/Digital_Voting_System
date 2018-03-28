<?php
session_start();

$_hello=$_SESSION['SEX'];
?>

<html>

<head>
<meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />
    <title>VOTER REGISTRATION</title>
    <link rel="stylesheet" type="text/css" href="form_style.css">

</head>

<body style="background-image: 'much_patriotism.jpg'; background-opacity: 0.5;">
<header>
    <img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
    <h2>ELECTION COMMISSION OF INDIA</h2>
    </header>
    <br><br>

<div class="autofill">
    <pre>
        <label style="margin-left: 200px;">Field Officer : </label><input type="text" name="FO_ID" value="<?php echo $_SESSION['FO_ID']; ?>"  disabled/>  <label style="margin-left: 100px;">Constituency ID :</label> <input type="text" name="CONS_ID" value="<?php echo $_SESSION['FCONSM_ID']; ?>"   disabled/>
    </pre>
</div>

<div class="fill" >

<form id="form1" name="Voter_Deletion" action="delete_voter_in_form_script.php" method="post">

    <div class="container forms">
    <font color="red">All the fields marked * are mandatory</font><br><br>
        <div>
        <div class="separator">1) Personal Details</div><br><br>
        <table cellspacing="10">
        <tr><td><label>Title<font color="red">*</font>:</label>
            <td><input type="text" value="<?php echo $_SESSION['TITLE']; ?>" disabled/>
                        <td rowspan="3" width="400px" align="right"><img src="getImage.php?id=<?php echo $_SESSION['DEL_VOTER_ID'] ?>" border="1px" width="180px" height="180px" />

        </tr>
        <tr><td><label>First Name<font color="red">*</font> :</label> 
            <td><input type="text" value="<?php echo $_SESSION['FNAME']; ?>" disabled/>
        </tr>
        <br>

        <tr><td><label>Middle Name :</label> 
        <td><input type="text" value="<?php echo $_SESSION['MNAME']; ?>" disabled/>   
        <br>

        <tr><td><label>Last Name<font color="red">*</font> : </label>
        <td><input type="text" value="<?php echo $_SESSION['LNAME']; ?>" disabled />
        <br>

   
        <tr><td><label>Sex : </label>
           <td> <input type="text"  value="<?php ECHO $_SESSION['SEX'];?>" disabled/>
        <br>
<!--
        <tr><td><label>Father/Spouse's Name<font color="red">*</font> : </label>
            <td><input type="text" name="RFNAME" placeholder="FIRST" require/>
            <input type="text" name="RMNAME" placeholder="MIDDLE(if any)">
            <input type="text" name="RLNAME" placeholder="LAST" require/>
        <br>

        <tr><td><label>Father/Spouse's Voter ID : </label>
           <td> <input type="text" name="RVOTER" placeholder="IF ANY"/>
        <br>
-->
        <tr><td><label>Aadhaar card Number<font color="red">*</font> :</label>
        <td><input type="tel" name="AADHAAR" minlength="12" maxlength="12"  value="<?php echo $_SESSION['AADHAAR']; ?>" disabled/>
        <br>

        <tr><td><label>Mob No<font color="red">*</font> :</label>

       <td><input type="tel" name="MOB_NO"  minlength="10" value="<?php echo $_SESSION['MOB_NO']; ?>"  maxlength="10" disabled/>
        <br>
     
        <tr><td><label>Email-Id<font color="red">*</font> :</label> 
        <td><input type="email" name="EMAIL" style="text-transform: lowercase;" value="<?php echo $_SESSION['EMAIL']; ?>" placeholder="xyz@gmail.com" disabled/>
        <br>

        <tr><td><label>  State<font color="red">*</font> : </label>
            <td><input type="text" value="<?php echo $_SESSION['STATE'];?>" disabled/>
        <br>

       <tr><td> <label>City<font color="red">*</font> : </label>
        <td><input type="text" name="CITY" value="<?php echo $_SESSION['CITY']; ?>"  disabled/>
        <br>

        <tr><td><label>District <font color="red">*</font>:</label> 
        <td><input type="text" name="DISTRICT" value="<?php echo $_SESSION['DISTRICT']; ?>"  disabled/>

        <br>

        <tr><td><label>Street Address<font color="red">*</font> :</label> 
        <td><input type="text" value="<?php echo $_SESSION['STREET_ADD']; ?>"  disabled/>
        <br>

        <tr><td><label>  Pincode<font color="red">*</font> :</label> 
        <td><input type="number"  value="<?php echo $_SESSION['PINCODE']; ?>"  disabled/>
        <br>

        <tr><td><label>Place of Birth<font color="red">*</font> :</label> 
        <td><input type="text"  value="<?php echo $_SESSION['POB']; ?>"  disabled/>
        <br>

        <tr><td><label>Religion<font color="red">*</font> :</label> 
            <td><input type="text"value="<?php echo $_SESSION['RELIGION']; ?>"  disabled/>
            
        <br>

        <tr><td><label> Category<font color="red">*</font> :</label> 
            <td><input type="text" value="<?php echo $_SESSION['CASTE']; ?>"  disabled/>
               
        <br>

        <tr><td><label>Mother Tongue<font color="red">*</font> :</label> 
        <td><input type="text"  value="<?php echo $_SESSION['NATIVE_LANG']; ?>" placeholder="HINDI"  disabled/>
        
        </table>
        <br><br><br>
        <div class="separator">2) Educational Details</div><br><br>
        <table cellspacing="10">
        <tr><td><label>Highest Education Level<font color="red">*</font> : </label>
            <td><input type="text" value ="<?php echo $_SESSION['EDU_LEVEL']; ?>"  disabled/>
                
        <br>

        <tr><td><label>Occupation<font color="red">*</font> :</label> 
            <td><input type="text" value="<?php echo $_SESSION['NATIVE_LANG']; ?>"  disabled/>
                
        <br>

        <tr><td><label> Income<font color="red">*</font> : </label>
            <td><input type="text" value="<?php echo $_SESSION['INCOME']; ?>"  disabled/>
               
        
        </table>

 <br><br><br>
        <div class="separator">3) Proxy Related Details</div><br><br>
 <script type="text/javascript">
     
 

               function back()
               {
                window.location.href="fo_intermediate.php";
               }

        </script>
        <table cellspacing="10">
       <tr><td><label>Are you Physically Challenged ?</label>
            <td><input type="text"  value="<?php echo $_SESSION['PHY_CHAL'];?>"  disabled/>
        <br>
        <tr><tr><tr>
       <tr><td><label>Are you an service elector ? </label>
        <td><input type="text"  value="<?php echo $_SESSION['SERV'];?>"  disabled/>
 
        <br>
        <tr><tr><tr>
        <tr><td><label>Are you an overseas elector ? </label>
        <td><input type="text"  value="<?php echo $_SESSION['OSE'];?>"  disabled/>
        
        <br>
        <tr><tr><tr>
        <tr><td><label>Proxy Voter ID :</label>
        <td><input type="number" name="P_VID" value="<?php echo $_SESSION['P_VID']; ?>" minlength="10" maxlength="10" disabled/ >
     <!--<td style="margin-right: 100px"><button class="button button2" type="submit" >Check </button>-->
        <br>
 
        <tr><td><label>Passport Number :</label>
        <td><input type="text" name="PASS_NO" value="<?php echo $_SESSION['PASS_NO']; ?>" maxlength="8"  disabled/>
        <br>

  
        <tr><td><label>Visa Number : </label>
        <td><input type="tel" name="VISA_NO" value="<?php echo $_SESSION['VISA_NO']; ?>" maxlength"14" disabled/>
        <br>

        </table>
       <br><br><br>
        
 

        <div class="separator">5) Declaration</div><br><br>
        
        <br><br><br>
</form>
<form id="form2" action="fo_intermediate.php">
</form>
        <div class="clearfix">
        <button form="form2" type="submit" name="CANCEL" class="button button1" style="background-color: blue;border-color: darkblue;" />Cancel
        <button form="form1" type="submit" name="DELETE" class="button button2" />Delete
        </div>

    </div>


</div>
<br><br>
<footer style="height:40px;width: 96.5%;position:absolute;margin-bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
</body>

</html>
</form>