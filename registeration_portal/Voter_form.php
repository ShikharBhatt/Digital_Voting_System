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

</style>
    <title>VOTER REGISTRATION</title>
    <link rel="stylesheet" type="text/css" href="form_style.css">
<script type="text/javascript">


  function checkage(dateString) 
  {
        var today = new Date();
        var birthDate = new Date(dateString);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        if(age<17)
        {

            window.alert('Not eligible to register');   
            document.getElementById("DOB").value="";
            
        }

            
  }

     function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode;
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123 ))
             return false;
        if (keyCode==32)
            return false;
        return true;
    }

	function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
</head>

<body style="background-image: 'much_patriotism.jpg'; background-opacity: 0.5;">
<!--<?php echo $_SESSION['FO_ID']; ?>-->
<header>
<img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
<h2>ELECTION COMMISSION OF INDIA</h2>
</header>
       <form action="fo_intermediate.php" id="back">
    </form>
    <button  class="button button1"  form="back" style="margin-left: 0px;background-color: rgb(0,161,255);border-color:rgb(0,161,200);" >Cancel </button>
  

<div style="position: relative;top: 75px;">
    <pre>
        <label style="margin-left: 175px;">Field Officer : </label><input type="text" name="FO_ID" value="<?php echo $_SESSION['FO_ID']; ?>" disabled/>  <label style="margin-left: 100px;">Constituency ID :</label> <input type="text" name="CONS_ID" value="<?php echo $_SESSION['FCONSM_ID']; ?>" disabled />
    </pre>
</div>

<div class="fill" style="position: relative; top: 100px;" >

<form  name="Voter_Registration" action="voter_script.php" method="post" enctype="multipart/form-data" autocomplete="off">

    <div class="container forms">
    <font color="red">All the fields marked * are mandatory</font><br><br>
        <div>
        <div class="separator">1) Personal Details</div><br><br>
        <table cellspacing="10">
        <tr><td><label>Title<font color="red">*</font>:</label>
            <td><select name="TITLE"><p id="mandatory">*</p>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
                <option value="Dr">Dr</option>
            </select>
        </tr>
        <tr><td><label>First Name<font color="red">*</font> :</label> 
            <td><input type="text" name="FNAME"  placeholder="First Name" maxlength="20" onkeypress="return ValidateAlpha(event)" required/>
        </tr>
        <br>

        <tr><td><label>Middle Name :</label> 
        <td><input type="text" name="MNAME" placeholder="Middle Name" maxlength="15" onkeypress="return ValidateAlpha(event)"/>   
        <br>
        <tr><td><label>Last Name<font color="red">*</font> : </label>
        <td><input type="text" name="LNAME"  placeholder="Last Name" maxlength="15" onkeypress="return ValidateAlpha(event)" required />
        <br>

        <tr><td><label>Sex : </label>
           <td> <input type="radio" name="SEX" value="M" checked>Male
            <input type="radio" name="SEX" value="F" >Female
            <input type="radio" name="SEX" value="O" >Other
        <br>

        <tr><td><label>Date Of Birth <font color="red">*</font>: </label>
       <td> <input type="date" id="DOB" name="DOB" onchange="checkage(DOB.value)"  required/>
        <br>

        <tr><td><label>Father/Spouse's Name<font color="red">*</font> : </label>
            <td><input type="text" name="FORS_NAME" placeholder="FIRST" onkeypress="return ValidateAlpha(event)" required/>
            <input type="text" name="FORS_MNAME" placeholder="MIDDLE(if any)" onkeypress="return ValidateAlpha(event)">
            <input type="text" name="FORS_LNAME" placeholder="LAST" onkeypress="return ValidateAlpha(event)" required/>
        <br>

        <tr><td><label>Father/Spouse's Voter ID : </label>
           <td> <input type="text" name="FORS_ID"  onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" placeholder="10-digit"/>
        <br>

        <tr><td><label>Aadhaar card Number<font color="red">*</font> :</label>
        <td><input type="text" name="AADHAAR" onkeypress="return isNumberKey(event)" minlength="12" maxlength="12" placeholder="12-digit" required/>
        <br>

        <tr><td><label>Mob No<font color="red">*</font> :</label>

       <td><input type="text" onkeypress="return isNumberKey(event)" name="MOB_NO" placeholder="10-digit" minlength="10" maxlength="10" required/>
        <br>
     
        <tr><td><label>Email-Id<font color="red">*</font> :</label> 
        <td><input type="email" name="EMAIL" style="text-transform: lowercase;"  required/>
        <br>

        <tr><td><label>  State<font color="red">*</font> : </label>
            <td><select name="STATE">
                <option value="MAHARASHTRA">MAHARASHTRA</option>
                <option value="UTTAR PRADESH">UTTAR PRADESH</option>
            </select>
        <br>

       <tr><td> <label>City<font color="red">*</font> : </label>
        <td><input type="text" name="CITY" onkeypress="return ValidateAlpha(event)"/>
        <br>

        <tr><td><label>District <font color="red">*</font>:</label> 
        <td><input type="text" name="DISTRICT"  required />
      
       <br>
        <tr><td><label>Constituency Name :</label> 
        <td><input type="text" value="<?php echo $_SESSION['FCONSM_NAME']; ?>" disabled/>

        <br>

        <tr><td><label>Street Address<font color="red">*</font> :</label> 
        <td><input type="text" name="STREET_ADD" placeholder="STREET,LANE" required />
        <br>

        <tr><td><label>  Pincode<font color="red">*</font> :</label> 
        <td><input type="text" name="PINCODE" onkeypress="return isNumberKey(event)" minlength="6" maxlength="6" required/>
        <br>

        <tr><td><label>Place of Birth<font color="red">*</font> :</label> 
        <td><input type="text" name="POB" onkeypress="return ValidateAlpha(event)"  required />
        <br>

        <tr><td><label>Religion<font color="red">*</font> :</label> 
            <td><select name="RELIGION">
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Sikh">Sikh</option>
                <option value="Christian">Christian</option>
                <opton value="Other">Other</opton>
            </select>
        <br>

        <tr><td><label> Category<font color="red">*</font> :</label> 
            <td><select name="CASTE">
                <option value="Open">Open</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="Other">Other</option>
            </select>
        <br>

        <tr><td><label>Mother Tongue<font color="red">*</font> :</label> 
        <td><input type="text" name="NATIVE_LANG" onkeypress="return ValidateAlpha(event)" required/>
        
        </table>
        <br><br><br>
        <div class="separator">2) Educational Details</div><br><br>
        <table cellspacing="10">
        <tr><td><label>Highest Education Level<font color="red">*</font> : </label>
            <td><select name="EDU_LEVEL" >
                <option value="Below 10th">Below 10<uppercase>th</uppercase></option>
                <option value="Matriculation">Matriculation(10<uppercase>th</uppercase>)</option>
                <option value="Higher Secondary">Higher Secondary(12<uppercase>th</uppercase>)</option>
                <option value="Diploma">Diploma</option>
                <option value="Under-Graduate">Under-Graduate</option>
                <option value="Post-Graduate">Post-Graduate</option>
                <option value="Ph-D">Ph-D</option>
            </select>
        <br>

        <tr><td><label>Occupation<font color="red">*</font> :</label> 
            <td><select name="OCCP">
                <option value="Unemployed">Unemployed</option>
                <option value="Businessman">Businessman</option>
                <option value="Homemaker">Homemaker</option>
                <option value="Student">Student</option>
                <option value="Farmer">Farmer</option>
                <option value="Private Job">Private Job</option>
                <option value="Government Job">Government Job</option>
            </select>
        <br>

        <tr><td><label> Income<font color="red">*</font> : </label>
            <td><select name ="INCOME">
                <option value="NONE">NONE</option>
                <option value="LESS1"> < 1 Lac</option>
                <option value="GREAT1"> > 1 Lac & < 5 Lacs</option>
                <option value="GREAT5"> > 5 Lacs & < 10 Lacs</option>
                <option value="GREAT10"> > 10 Lacs</option>
            </select>
        
        </table>

 <br><br><br>
        <div class="separator">3) Proxy Related Details</div><br><br>
        <script type="text/javascript">
               function enableproxy()
               {
                    
                   document.getElementById("pv").style.display=""; 
                   document.getElementById("pvid").style.display="block";
                      document.Voter_Registration.P_VID.required=true;
            						
                    }
                function disableproxy()
                {
                  // document.getElementById("pvid").value='0'; 
                   document.getElementById("pv").style.display="none"; 
                   document.getElementById("pvid").style.display="none";
                    }
                   

                   function ovs()
                {
                    document.getElementById("pv").style.display=""; 
                   document.getElementById("pvid").style.display="block";
                   document.Voter_Registration.P_VID.required=true;
                    document.Voter_Registration.PASS_NO.required=true;
                        document.Voter_Registration.PASS_ISSUE.required=true;
                        document.Voter_Registration.PASS_EXPIRY.required=true;
                        document.Voter_Registration.VISA_NO.required=true;
                        document.Voter_Registration.VISA_ISSUE.required=true;
                        document.Voter_Registration.VISA_EXPIRY.required=true;
                }

               

        </script>
        <table cellspacing="10">
       <tr><td><label>Are you Physically Challenged ?</label>
            <td><input type="radio" name="PHY_CHAL" value="YES" onclick="enableproxy()">YES
            <input type="radio" name="PHY_CHAL" value="NO" onclick="disableproxy()" checked>NO
        <br>
        <tr><tr><tr>
       <tr><td><label>Are you an service elector ? </label>
        <td><input type="radio" name="SERV" value="YES" onclick="enableproxy()">YES
        <input type="radio" name="SERV" value="NO" onclick="disableproxy()" checked>NO
        <br>
        <tr><tr><tr>
        <tr><td><label>Are you an overseas elector ? </label>
            <td><input type="radio" name="OSE" value="YES" onclick="ovs()">YES
            <input type="radio" name="OSE" value="NO" onclick="disableproxy()" checked>NO
        <br>
        <tr><tr><tr>
        <tr><td><label style="display:none" id="pv">Proxy Voter ID :</label>
        <td><input id="pvid" type="tel" style="display:none" name="P_VID" onkeypress="return isNumberKey(event)"  /> 
     <!--<td style="margin-right: 100px"><button class="button button2" type="submit" >Check </button>-->
        <br>
 
        <tr><td><label>Passport Number :</label>
        <td><input type="text" name="PASS_NO"  minlength="8" maxlength="8" />
        <br>

     <!--  <tr><td><label>Passport Issue Date : </label>
        <td><input type="date" name="PASS_ISSUE"  />
        <br>

        <tr><td><label>Passport Expiry Date : </label>
        <td><input type="date" name="PASS_EXPIRY" />
        <br>
        -->
        <tr><td><label>Visa Number : </label>
        <td><input type="text" name="VISA_NO" onkeypress="return isNumberKey(event)"   minlength="14" maxlength="14">
        <br>
<!--
        <tr><td><label>Visa Issue Date : </label>
        <td><input type="date" name="VISA_ISSUE" />
        <br>
        
        <tr><td><label>Visa Expiry Date : </label>
        <td><input type="date" name="VISA_EXPIRY" />
    -->  
        </table>
       <br><br><br>
        
 
        <div class="separator">4) Document Uploads</div><br><br>
        <table cellspacing="10">

        <tr><td><label>Aadhaar Upload<font color="red">*</font> : </label>
        <td><input type="file" name="AADHAAR_PROOF" accept="pdf/*" required/>
        <br>

        <tr><td><label>Photo Upload<font color="red">*</font> :</label> 
        <td><input type="file" name="PHOTO" accept="image/*" required/>
        <br>

        <tr><td><label>Residence Proof <font color="red">*</font> :</label> 
        <td><input type="file" name="RESIDENT_PROOF" accept="pdf/*" required/>
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

        <div class="clearfix">
        <button type="reset" name="RESET" class="button button1"/>Reset
        <button type="submit" name="REGISTER" class="button button2" />Register
        </div>

    </div>

</form>

</div>

</body>

</html>