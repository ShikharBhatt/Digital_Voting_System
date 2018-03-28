<?php
session_start();

$con = mysqli_connect('localhost','root','12345');                                 //code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))                                                   //code for selecting database
    echo 'cannot connect';
                $check=$_SESSION['AADHAAR'];   
                $star="select *,now() as tp from voter_table where AADHAAR='$check'";           //query for voter 

                    $result=mysqli_query($con,$star);                               //to execute query on database and store records in 'result' variable 
                    $row=mysqli_fetch_array($result);                               //to fetch records into a 'row' variable
    
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

               <form action="fo_intermediate.php" id="back">
    </form>
    <button  class="button button1"  form="back" style="margin-left: 0px;background-color: rgb(0,161,255);border-color:rgb(0,161,200);" >Home </button>

<label style="text-align: right;margin-left: 70%;"><?php echo $row['tp'];?></label>

<div class="autofill">
    <pre>
        <label style="margin-left: 200px;">Field Officer : </label><input type="text" name="FO_ID" value="<?php echo $row['FO_ID']; ?>"  disabled/>  <label style="margin-left: 100px;">Constituency ID :</label> <input type="text" name="CONS_ID" value="<?php echo $row['CONS_ID']; ?>"   disabled/>
    </pre>
</div>

<div class="fill" >

<form id="form1" name="Voter_Deletion">

    <div class="container forms">
    <font color="red">All the fields marked * are mandatory</font><br><br>
        <div>
        <div class="separator">1) Personal Details</div><br><br>
        <table cellspacing="10">
            <tr>
                <td><label>Voter Id :</td></label>
                <td><input type="text" value="<?php echo $row['VOTER_ID'];?>" disabled/>
            </tr>
        <tr><td><label>Title<font color="red">*</font>:</label>
            <td><input type="text" value="<?php echo $row['TITLE']; ?>" disabled/>
                        <td rowspan="3" width="400px" align="right"><img src="getImage.php?id=<?php echo $row['VOTER_ID'] ?>" border="1px" width="180px" height="180px" />

        </tr>
        <tr><td><label>First Name<font color="red">*</font> :</label> 
            <td><input type="text" value="<?php echo $row['FNAME']; ?>" disabled/>
        </tr>
        <br>

        <tr><td><label>Middle Name :</label> 
        <td><input type="text" value="<?php echo $row['MNAME']; ?>" disabled/>   
        <br>

        <tr><td><label>Last Name<font color="red">*</font> : </label>
        <td><input type="text" value="<?php echo $row['LNAME']; ?>" disabled />
        <br>

   
        <tr><td><label>Sex : </label>
           <td> <input type="text"  value="<?php ECHO $row['SEX'];?>" disabled/>
        <br>

        <tr><td><label>Father/Spouse's Name<font color="red">*</font> : </label>
            <td><input type="text" value="<?php echo $row['FORS_NAME']; ?>" disabled/>
        <tr><td><label>Father/Spouse's Middle Name<font color="red">*</font> : </label>
            <td><input type="text" value="<?php echo $row['FORS_MNAME']; ?>" disabled/>
        <tr><td><label>Father/Spouse's Last Name<font color="red">*</font> : </label>        
            <td><input type="text" value="<?php echo $row['FORS_LNAME']; ?>" disabled/>
        <br>

        <tr><td><label>Father/Spouse's Voter ID : </label>
           <td> <input type="text" value="<?php echo $row['FORS_ID']; ?>" disabled/>
        <br>

        <tr><td><label>Aadhaar card Number<font color="red">*</font> :</label>
        <td><input type="tel" name="AADHAAR" minlength="12" maxlength="12"  value="<?php echo $row['AADHAAR']; ?>" disabled/>
        <br>

        <tr><td><label>Mob No<font color="red">*</font> :</label>

       <td><input type="tel" name="MOB_NO"  minlength="10" value="<?php echo $row['MOB_NO']; ?>"  maxlength="10" disabled/>
        <br>
     
        <tr><td><label>Email-Id<font color="red">*</font> :</label> 
        <td><input type="email" name="EMAIL" style="text-transform: lowercase;" value="<?php echo $row['EMAIL']; ?>" placeholder="xyz@gmail.com" disabled/>
        <br>

        <tr><td><label>  State<font color="red">*</font> : </label>
            <td><input type="text" value="<?php echo $row['STATE'];?>" disabled/>
        <br>

       <tr><td> <label>City<font color="red">*</font> : </label>
        <td><input type="text" name="CITY" value="<?php echo $row['CITY']; ?>"  disabled/>
        <br>

        <tr><td><label>District <font color="red">*</font>:</label> 
        <td><input type="text" name="DISTRICT" value="<?php echo $row['DISTRICT']; ?>"  disabled/>
         <br>

        <tr><td><label>Constituency Name :</label> 
        <td><input type="text" value="<?php echo $row['CONS_NAME']; ?>" disabled/>
        <br>

        <tr><td><label>Street Address<font color="red">*</font> :</label> 
        <td><input type="text" value="<?php echo $row['STREET_ADD']; ?>"  disabled/>
        <br>

        <tr><td><label>  Pincode<font color="red">*</font> :</label> 
        <td><input type="number"  value="<?php echo $row['PINCODE']; ?>"  disabled/>
        <br>

        <tr><td><label>Place of Birth<font color="red">*</font> :</label> 
        <td><input type="text"  value="<?php echo $row['POB']; ?>"  disabled/>
        <br>

        <tr><td><label>Religion<font color="red">*</font> :</label> 
            <td><input type="text" value="<?php echo $row['RELIGION']; ?>"  disabled/>
            
        <br>

        <tr><td><label> Category<font color="red">*</font> :</label> 
            <td><input type="text" value="<?php echo $row['CASTE']; ?>"  disabled/>
               
        <br>

        <tr><td><label>Mother Tongue<font color="red">*</font> :</label> 
        <td><input type="text"  value="<?php echo $row['NATIVE_LANG']; ?>"  disabled/>
        
        </table>
        <br><br><br>
        <div class="separator">2) Educational Details</div><br><br>
        <table cellspacing="10">
        <tr><td><label>Highest Education Level<font color="red">*</font> : </label>
            <td><input type="text" value ="<?php echo $row['EDU_LEVEL']; ?>"  disabled/>
                
        <br>

        <tr><td><label>Occupation<font color="red">*</font> :</label> 
            <td><input type="text" value="<?php echo $row['NATIVE_LANG']; ?>"  disabled/>
                
        <br>

        <tr><td><label> Income<font color="red">*</font> : </label>
            <td><input type="text" value="<?php echo $row['INCOME']; ?>"  disabled/>
               
        
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
            <td><input type="text"  value="<?php echo $row['PHY_CHAL'];?>"  disabled/>
        <br>
        <tr><tr><tr>
       <tr><td><label>Are you an service elector ? </label>
        <td><input type="text"  value="<?php echo $row['SERV'];?>"  disabled/>
 
        <br>
        <tr><tr><tr>
        <tr><td><label>Are you an overseas elector ? </label>
        <td><input type="text"  value="<?php echo $row['OSE'];?>"  disabled/>
        
        <br>
        <tr><tr><tr>
        <tr><td><label>Proxy Voter ID :</label>
        <td><input type="number" name="P_VID" value="<?php echo $row['P_VID']; ?>" minlength="10" maxlength="10" disabled/ >
     <!--<td style="margin-right: 100px"><button class="button button2" type="submit" >Check </button>-->
        <br>
 
        <tr><td><label>Passport Number :</label>
        <td><input type="text" name="PASS_NO" value="<?php echo $row['PASS_NO']; ?>" maxlength="8"  disabled/>
        <br>

  
        <tr><td><label>Visa Number : </label>
        <td><input type="tel" name="VISA_NO" value="<?php echo $row['VISA_NO']; ?>" maxlength"14" disabled/>
        <br>

        </table>
       <br><br><br>
        
 
        <div class="separator">5) Declaration</div><br><br>
        <div style="font-weight: bold;font-style: italic;">
            I hereby declare that to the best of knowledge and belief -<br>
            <ol type="a">
            <li>all information given in this application is true.</li>
            <li>I am a citizen of India by birth/domicile/naturalisation.</li>
            <li>I have not acquired citizenship of any other country.</li>
            <li>I have not applied for inclusion of my name in any other constituency.</li>
            <li>My name has not already be included in electoral roll of any other assembly/constituency.</li>    
            </ol>
            I am aware that making a statement or declaration which is false and which I know or believe to be false or do not believe to be <br>
            false or donot believe to be true, is punishable under Section 31 of the Representation of the People Act, 1950(43 of 1950).
        </div>
        <br><br><br>
        <br><br><br>
</form>
<form id="form2" action="fo_intermediate.php">
</form>
        <div class="clearfix">
        <button  class="button button1" style="background-color: blue;border-color: darkblue;margin-left: 350px;" onclick="window.print()" />Print Form
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