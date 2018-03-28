<?php
session_start();
?>
<html>
<head>
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />
    <title>Candidate Registration</title>
    <link rel="stylesheet" type="text/css" href="form_style.css">
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
<body>
<script type="text/javascript">
	function check()
	{
		window.location.href="candidate_registration_interscript.php";
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

    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

</script>
<header>
    <img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
    <h2>ELECTION COMMISSION OF INDIA</h2>
    </header>
    <br><br>
<div class="autofill">
<pre>
<label style="margin-left: 200px">Returning Officer :   </label><input type="text" name="RO_ID" value="<?php echo $_SESSION['RO_ID']; ?>" />   <label style="margin-left: 100px">Constituency ID :  </label><input type="text" name="CONS_ID" value="<?php echo $_SESSION['CONSM_ID']; ?>" disabled/>
</pre>
</div>


<div class="fill">
<form name="Candidate_Registration" id="Candidate_Registration" action="candidate_registration_script.php" method ="post" enctype="multipart/form-data">
 
  <div class="container forms">
  <font color="red">All the fields marked * are mandatory</font><br><br>
            <div class="separator">1) Personal Details</div><br><br>

    <table cellspacing="10">
    <tr><td><label>Voter ID<font color="red">*</font> : </label>
    <td><input type="text" placeholder="Enter Voter ID" name="VOTER_ID" value="<?php echo $_SESSION['VOTER_ID']; ?>" disabled/>
    <td rowspan="3" width="400px" align="right"><img src="getImage.php?id=<?php echo $_SESSION['VOTER_ID'] ?>" border="1px" width="150px" height="150px" />
    <br>
    <tr><td><label>Title<font color="red" >*</font> : </label>
    <td><select value="<?php echo $_SESSION['TITLE']; ?>" disabled/>
    <option value="Mr.">Mr.</option>
    <option value="Mrs.">Mrs.</option>
    <option value="Ms.">Ms.</option>
    <option value="Dr.">Dr.</option>   
    </select>
    <br>

    <tr><td><label>First Name<font color="red">*</font> : </label>
    <td><input type="text" name="FNAME" value="<?php echo $_SESSION['FNAME']; ?>" disabled/><br>

    <tr><td><label>Middle Name : </label>
    <td><input type="text" name="MNAME" value="<?php echo $_SESSION['MNAME']; ?>" disabled/><br>
    

    <tr><td><label>Last Name<font color="red">*</font> : </label>
    <td><input type="text" name="LNAME" value="<?php echo $_SESSION['LNAME']; ?>" disabled/><br>
    </table>
    <br>

    <div class="separator">2) Party & Work Details</div><br><br>
    <table cellspacing="10">

    <tr><td><label>Party Name<font color="red">*</font> : </label>
    <td><input type="text" placeholder="Enter Party Name" name="PARTY_NAME" autocomplete="off" required/><br>

    <tr><td><label>Party Symbol<font color="red">*</font> : </label>
    <td><input type="file" name="PARTY_SYMBOL" accept="image/*" required/><br>

    <tr><td><label>Highest Education Level<font color="red">*</font>  : </label>
    <td><select name="EDU_LEVEL" disabled>
                <option value="Below 10th" <?php echo ($_SESSION['EDU_LEVEL']=='Below 10th')?"selected":""?>>Below 10<uppercase>th</uppercase></option>
                <option value="Matriculation" <?php echo ($_SESSION['EDU_LEVEL']=='Matriculation')?"selected":""?>>Matriculation(10<uppercase>th</uppercase>)</option>
                <option value="Higher Secondary" <?php echo ($_SESSION['EDU_LEVEL']=='Higher Secondary')?"selected":""?>>Higher Secondary(12<uppercase>th</uppercase>)</option>
                <option value="Diploma" <?php echo ($_SESSION['EDU_LEVEL']=='Diploma')?"selected":""?>>Diploma</option>
                <option value="Under-Graduate" <?php echo ($_SESSION['EDU_LEVEL']=='Under-Graduate')?"selected":""?>>Under-Graduate</option>
                <option value="Post-Graduate" <?php echo ($_SESSION['EDU_LEVEL']=='Post-Graduate')?"selected":""?>>Post-Graduate</option>
                <option value="Ph-D" <?php echo ($_SESSION['EDU_LEVEL']=='Ph-D')?"selected":""?>>Ph-D</option>
        </select><br>

<!--
    <tr><td><label>Education Institute<font color="red">*</font> : </label>
    <td><input type="text" name="EDU_INS"  placeholder="Enter educational Institute"><br>

    <tr><td><label>Occupation<font color="red">*</font>  : </label>
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
-->
    <tr><td><label>Work Experience<font color="red">*</font>  : </label>
    <td><input type="number" name="WORK_EXP" placeholder="In Years " onkeypress="return isNumberKey(event)" autocomplete="off" required><br>
    <tr><td><label>Political Experience<font color="red">*</font> : </label>
    <td><input type="number" name="POL_EXP" placeholder="In Years" onkeypress="return isNumberKey(event)" autocomplete="off" required><br>
    <tr><td><label>Achievements : </label><br>
    <td><textarea rows="4" column="4" name="ACHIEVEMENTS" autocomplete="off"></textarea></td><br>
    </table>
    <br><br>
     <div class="separator">3) Affidavit Uploads</div><br><br>
    <table cellspacing="10">
    <tr><td><label>Property Holdings Affidavit<font color="red" >*</font> :</label> 
    <td><input type="file" name="PROP_AFF" accept="pdf/*" required><br>  
    <tr><td><label>Bussiness Investments Affidavit<font color="red" >*</font> : </label>
    <td><input type="file" name="BUSS_AFF" accept="pdf/*" required><br>  
    <tr><td><label>Criminal Record Affidavit <font color="red">*</font> : </label>
    <td><input type="file" name="CRIM_AFF" accept="pdf/*" placeholder="Enter Political experience in years" required>
    </table>
    <br><br><br>   
    <div class="separator">4) Declaration</div><br><br>
        <div style="font-weight: bold;font-style: italic;">
            I, the candidate mentioned above in assent to this nomination and hereby declare-<br>
            <ol type="a">
            <li>all information given in this application is true.</li>
            <li>I am a citizen of India by birth/domicile/naturalisation.</li>
            <li>I have not acquired citizenship of any other country.</li>
            <li>I have completed atleast 25 years of age.</li>
            <li>To the best of my knowledge and belief, I am qualified for being chosen to fill the seat in the House of the People.</li>
            <li>I also declare that I have not been, and shall not be nominated as a candidate at the present general election from more<br>
                than two Parliamentary Cnstituencies.    
            </ol>
            I am aware that making a statement or declaration which is false and which I know or believe to be false or do not believe to be <br>
            false or donot believe to be true, is punishable under Section 31 of the Representation of the People Act, 1950(43 of 1950).
        </div>
    <br><br><br>
</form>
<form action="ro_intermediate.php" id="back">
    
</form>
      <button class="button button1" form="back" type="submit" >Cancel</button>
      <button class="button button2" form="Candidate_Registration" type="submit" >Register </button>
    
  </div>
</div>
<br><br>
<footer style="height:40px;width: 96.5%;position:absolute;margin-bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
</body>
</html>