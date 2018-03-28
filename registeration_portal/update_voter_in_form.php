<?php
session_start();

$_hello=$_SESSION['SEX'];
$photoid=$_SESSION['UP_VOTER_ID'];
?>

<html>

<head>
<meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />
    <title>VOTER REGISTRATION</title>
    <link rel="stylesheet" type="text/css" href="form_style.css">
<script type="text/javascript">

    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
   <style>
        header{
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
   
}
    </style>
    <script type="text/javascript">
            function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

     function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode;
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123))
             return false;
        if (keyCode==32)
            return false;
        return true;
    }

</script>
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

<form  name="Voter_Registration" id="Voter_Registration" action="update_voter_in_form_script.php" method="post" enctype="multipart/form-data">

    <div class="container forms">
    <font color="red">All the fields marked * are mandatory</font><br><br>
        <div>
        <div class="separator">1) Personal Details</div><br><br>
        <table cellspacing="10">
        <tr><td><label>Title<font color="red">*</font>:</label>
            <td><select name="TITLE" ><p id="mandatory">*</p>
                <option value="Mr" <?php echo($_SESSION['TITLE']=="Mr")?'checked':''?>>Mr</option>
                <option value="Mrs" <?php echo($_SESSION['TITLE']=="Mrs")?'checked':''?>>Mrs</option>
                <option value="Ms" <?php echo($_SESSION['TITLE']=="Ms")?'checked':''?>>Ms</option>
                <option value="Dr" <?php echo($_SESSION['TITLE']=="Dr")?'checked':''?>>Dr</option>
            </select>
                        <td rowspan="3" width="400px" align="right"><img src="getImage.php?id=<?php echo $_SESSION['UP_VOTER_ID'] ?>" border="1px" width="180px" height="180px" />

        </tr>
        <tr><td><label>First Name<font color="red">*</font> :</label> 
            <td><input type="text" name="FNAME"   maxlength="20" value="<?php echo $_SESSION['FNAME']; ?>" onkeypress="return ValidateAlpha(event)" required/>
        </tr>
        <br>

        <tr><td><label>Middle Name :</label> 
        <td><input type="text" name="MNAME"  maxlength="10" value="<?php echo $_SESSION['MNAME']; ?>" onkeypress="return ValidateAlpha(event)" />   
        <br>

        <tr><td><label>Last Name<font color="red">*</font> : </label>
        <td><input type="text" name="LNAME"   maxlength="15" value="<?php echo $_SESSION['LNAME']; ?>" onkeypress="return ValidateAlpha(event)" required />
        <br>

   
        <tr><td><label>Sex : </label>
           <td> <input type="radio" name="SEX" value="M" <?php echo($_hello=="M")?'checked':''?>/>Male
            <input type="radio" name="SEX" value="F" <?php echo($_hello=="F")?'checked':'' ?>/>Female
            <input type="radio" name="SEX" value="O" <?php echo($_hello=="O")?'checked':''?>/>Other
        <br>

        <br>
        <tr><td><label>Date Of Birth <font color="red">*</font>: </label>
       <td> <input type="text"  name="DOB" value="<?php echo $_SESSION['DOB']; ?>" disabled/>
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
        <td><input type="text" name="AADHAAR" onkeypress="return isNumberKey(event)" minlength="12" maxlength="12"  value="<?php echo $_SESSION['AADHAAR']; ?>"  disabled/>
        <br>

        <tr><td><label>Mob No<font color="red">*</font> :</label>

       <td><input type="text" onkeypress="return isNumberKey(event)" name="MOB_NO"  minlength="10" value="<?php echo $_SESSION['MOB_NO']; ?>"  maxlength="10" required/>
        <br>
     
        <tr><td><label>Email-Id<font color="red">*</font> :</label> 
        <td><input type="email" name="EMAIL" style="text-transform: lowercase;" value="<?php echo $_SESSION['EMAIL']; ?>" placeholder="xyz@gmail.com" required/>
        <br>

        <tr><td><label>  State<font color="red">*</font> : </label>
            <td><select name="STATE">
                <option <?php echo ($_SESSION['STATE']=='MAHARASHTRA')?"selected":""?> value="MAHARASHTRA">MAHARASHTRA</option>
                <option <?php echo ($_SESSION['STATE']=='UTTAR PRADESH')?"selected":""?> value="UTTAR PRADESH">UTTAR PRADESH</option>
            </select>
        <br>

       <tr><td> <label>City<font color="red">*</font> : </label>
        <td><input type="text" name="CITY" value="<?php echo $_SESSION['CITY']; ?>" onkeypress="return ValidateAlpha(event)" required/>
        <br>

        <tr><td><label>District <font color="red">*</font>:</label> 
        <td><input type="text" name="DISTRICT" value="<?php echo $_SESSION['DISTRICT']; ?>" onkeypress="return ValidateAlpha(event)" required/>

        <br>
        <tr><td><label>Constituency Name :</label> 
        <td><input type="text" value="<?php echo $_SESSION['FCONSM_NAME']; ?>" disabled/>


        <br>

        <tr><td><label>Street Address<font color="red">*</font> :</label> 
        <td><input type="text" name="STREET_ADD" placeholder="Flat No 1,Bldg.,Area...." value="<?php echo $_SESSION['STREET_ADD']; ?>" require/>
        <br>

        <tr><td><label>  Pincode<font color="red">*</font> :</label> 
        <td><input type="text" onkeypress="return isNumberKey(event)" name="PINCODE" minlength="6" maxlength="6" value="<?php echo $_SESSION['PINCODE']; ?>" required/>
        <br>

        <tr><td><label>Place of Birth<font color="red">*</font> :</label> 
        <td><input type="text" name="POB"   required value="<?php echo $_SESSION['POB']; ?>" onkeypress="return ValidateAlpha(event)" disabled/>
        <br>

        <tr><td><label>Religion<font color="red">*</font> :</label> 
            <td><select name="RELIGION"  >
                <option value="Hindu" <?php echo ($_SESSION['RELIGION']=='Hindu')?"selected":""?>>Hindu</option>
                <option value="Muslim" <?php echo ($_SESSION['RELIGION']=='Muslim')?"selected":""?>>Muslim</option>
                <option value="Sikh" <?php echo ($_SESSION['RELIGION']=='Sikh')?"selected":""?>>Sikh</option>
                <option value="Christian" <?php echo ($_SESSION['RELIGION']=='Christian')?"selected":""?>>Christian</option>
                <opton value="Other" <?php echo ($_SESSION['RELIGION']=='Other')?"selected":""?>>Other</opton>
            </select>
        <br>

        <tr><td><label> Category<font color="red">*</font> :</label> 
            <td><select name="CASTE"  >
                <option value="Open" <?php echo ($_SESSION['CASTE']=='Open')?"selected":""?>>Open</option>
                <option value="OBC" <?php echo ($_SESSION['CASTE']=='OBC')?"selected":""?>>OBC</option>
                <option value="SC" <?php echo ($_SESSION['CASTE']=='SC')?"selected":""?>>SC</option>
                <option value="ST" <?php echo ($_SESSION['CASTE']=='ST')?"selected":""?>>ST</option>
                <option value="Other" <?php echo ($_SESSION['RELIGION']=='Other')?"selected":""?>>Other</option>
            </select>
        <br>

        <tr><td><label>Mother Tongue<font color="red">*</font> :</label> 
        <td><input type="text" name="NATIVE_LANG" value="<?php echo $_SESSION['NATIVE_LANG']; ?>" onkeypress="return ValidateAlpha(event)" required/>
        
        </table>
        <br><br><br>
        <div class="separator">2) Educational Details</div><br><br>
        <table cellspacing="10">
        <tr><td><label>Highest Education Level<font color="red">*</font> : </label>
            <td><select name="EDU_LEVEL" >
                <option value="Below 10th" <?php echo ($_SESSION['EDU_LEVEL']=='Below 10th')?"selected":""?>>Below 10<uppercase>th</uppercase></option>
                <option value="Matriculation" <?php echo ($_SESSION['EDU_LEVEL']=='Matriculation')?"selected":""?>>Matriculation(10<uppercase>th</uppercase>)</option>
                <option value="Higher Secondary" <?php echo ($_SESSION['EDU_LEVEL']=='Higher Secondary')?"selected":""?>>Higher Secondary(12<uppercase>th</uppercase>)</option>
                <option value="Diploma" <?php echo ($_SESSION['EDU_LEVEL']=='Diploma')?"selected":""?>>Diploma</option>
                <option value="Under-Graduate" <?php echo ($_SESSION['EDU_LEVEL']=='Under-Graduate')?"selected":""?>>Under-Graduate</option>
                <option value="Post-Graduate" <?php echo ($_SESSION['EDU_LEVEL']=='Post-Graduate')?"selected":""?>>Post-Graduate</option>
                <option value="Ph-D" <?php echo ($_SESSION['EDU_LEVEL']=='Ph-D')?"selected":""?>>Ph-D</option>
            </select>
        <br>

        <tr><td><label>Occupation<font color="red">*</font> :</label> 
            <td><select name="OCCP" >
                <option value="Unemployed" <?php echo ($_SESSION['OCCP']=='Unemployed')?"selected":""?>>Unemployed</option>
                <option value="Businessman" <?php echo ($_SESSION['OCCP']=='Businessman')?"selected":""?>>Businessman</option>
                <option value="Homemaker" <?php echo ($_SESSION['OCCP']=='Homemaker')?"selected":""?>>Homemaker</option>
                <option value="Student" <?php echo ($_SESSION['OCCP']=='Student')?"selected":""?>>Student</option>
                <option value="Farmer" <?php echo ($_SESSION['OCCP']=='Farmer')?"selected":""?>>Farmer</option>
                <option value="Private Job" <?php echo ($_SESSION['OCCP']=='Private Job')?"selected":""?>>Private Job</option>
                <option value="Government Job" <?php echo ($_SESSION['OCCP']=='Government Job')?"selected":""?>>Government Job</option>
                <option value="Politician" <?php echo ($_SESSION['OCCP']=='Politician')?"selected":""?>>Politician</option>
                <option value="Other" <?php echo ($_SESSION['OCCP']=='Other')?"selected":""?>>Other</option>
            </select>
        <br>

        <tr><td><label> Income<font color="red">*</font> : </label>
            <td><select name ="INCOME" >
                <option value="NONE" <?php echo ($_SESSION['INCOME']=='NONE')?"selected":""?>>NONE</option>
                <option value="LESS1" <?php echo ($_SESSION['INCOME']=='LESS1')?"selected":""?>> < 1 Lac</option>
                <option value="GREAT1" <?php echo ($_SESSION['INCOME']=='GREAT1')?"selected":""?>> > 1 Lac & < 5 Lacs</option>
                <option value="GREAT5" <?php echo ($_SESSION['INCOME']=='GREAT5')?"selected":""?>> > 5 Lacs & < 10 Lacs</option>
                <option value="GREAT10" <?php echo ($_SESSION['INCOME']=='GREAT10')?"selected":""?>> > 10 Lacs</option>
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
            <td><input type="radio" name="PHY_CHAL" value="YES" <?php echo($_SESSION['PHY_CHAL']=="YES")?'checked':''?> onclick="enableproxy() ">YES
            <input type="radio" name="PHY_CHAL"  value="NO" <?php echo($_SESSION['PHY_CHAL']=="NO")?'checked':''?> onclick="disableproxy()">NO
        <br>
        <tr><tr><tr>
       <tr><td><label>Are you an service elector ? </label>
        <td><input type="radio" name="SERV" value="YES" <?php echo($_SESSION['SERV']=="YES")?'checked':''?> onclick="enableproxy()">YES
        <input type="radio" name="SERV" value="NO" <?php echo($_SESSION['SERV']=="NO")?'checked':''?> onclick="disableproxy()" >NO
        <br>
        <tr><tr><tr>
        <tr><td><label>Are you an overseas elector ? </label>
            <td><input type="radio" name="OSE" value="YES" <?php echo($_SESSION['OSE']=="YES")?'checked':''?> onclick="ovs()">YES
            <input type="radio" name="OSE" value="NO" <?php echo($_SESSION['OSE']=="NO")?'checked':''?> onclick="disableproxy()" >NO
        <br>
        <tr><tr><tr>
        <tr><td><label id="pv" >Proxy Voter ID :</label>
        <td><input type="text" id="pvid" name="P_VID" value="<?php echo $_SESSION['P_VID']; ?>" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" / >
     <!--<td style="margin-right: 100px"><button class="button button2" type="submit" >Check </button>-->
        <br>
 
        <tr><td><label>Passport Number :</label>
        <td><input type="text" name="PASS_NO" maxlength="8" minlength="8" />
        <br>

<!--        <tr><td><label>Passport Issue Date : </label>
        <td><input type="date" name="PASS_ISSUE" />
        <br>

        <tr><td><label>Passport Expiry Date : </label>
        <td><input type="date" name="PASS_EXPIRY" />
        <br>
    -->    
        <tr><td><label>Visa Number : </label>
        <td><input type="text" name="VISA_NO" onkeypress="return isNumberKey(event)" maxlength="14" minlength="14" />
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
</form>
<form id="Redirect" action="fo_intermediate.php"></form>
        <div class="clearfix">
        <button form="Redirect" name="Redirect" class="button button1"/>Cancel
        <button type="submit" form="Voter_Registration" name="REGISTER" class="button button2" />Update
        </div>

    </div>



</div>
<br><br>
<footer style="height:40px;width: 96.5%;position:absolute;margin-bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
</body>

</html>