
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
    <script type="text/javascript">
            function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

    </script>
</head>
<body>
 <header>
    <img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
    <h2>ELECTION COMMISSION OF INDIA</h2>
    </header>
        <form action="ro_intermediate.php" id="back">
    </form>
    <button  class="button button1" form="back" style="margin-left: 0px;background-color: rgb(0,161,255);border-color:rgb(0,161,200);" >Home </button>
    <br><br>
<div class="autofill">
<pre>
<label style="margin-left: 200px">Returning Officer :   </label><input type="text" name="RO_ID" value="<?php echo $_SESSION['RO_ID']; ?>" disabled/>   <label style="margin-left: 100px">Constituency ID :  </label><input type="text" name="CONS_ID" value="<?php echo $_SESSION['CONSM_ID']; ?>" disabled/>
</pre>
</div>


<div class="fill">
<form name="Candidate_Registration" action="candidate_registration_interscript.php" method ="post" enctype="multipart/form-data">
 
  <div class="container forms">
  <font color="red">All the fields marked * are mandatory</font><br><br>
            <div class="separator">1) Personal Details</div><br><br>

    <table cellspacing="10">
    <tr><td><label>Voter ID<font color="red">*</font> : </label>
    <td><input type="tel" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" placeholder="Enter Voter ID" name="VOTER_ID" autocomplete="off" /><br>
    <td style="margin-right: 100px"><button class="button button2" type="submit" >Check </button>

    <tr><td><label>Title<font color="red" >*</font> : </label>
    <td><select disabled/>
    <option value="Mr.">Mr.</option>
    <option value="Mrs.">Mrs.</option>
    <option value="Ms.">Ms.</option>
    <option value="Dr.">Dr.</option>   
    </select><br>
    
    <tr><td><label>First Name<font color="red">*</font> : </label>
    <td><input type="text" name="FNAME" disabled/><br>

    <tr><td><label>Middle Name : </label>
    <td><input type="text" name="MNAME" disabled/><br>
    

    <tr><td><label>Last Name<font color="red">*</font> : </label>
    <td><input type="text" name="LNAME" disabled/><br>
    </table>
    <br>

    <div class="separator">2) Party & Work Details</div><br><br>
    <table cellspacing="10">

    <tr><td><label>Party Name<font color="red">*</font> : </label>
    <td><input type="text" placeholder="Enter Party Name" name="PARTY_NAME" disabled/><br>

    <tr><td><label>Party Symbol<font color="red">*</font> : </label>
    <td><input type="file" name="PARTY_SYMBOL" accept="image/*" disabled/><br>

    <tr><td><label>Highest Education Level<font color="red">*</font>  : </label>
    <td><select name="EDU_LEVEL" disabled/>
    <option value="Below 10th"> Below 10th </option>
    <option value="Matriculate"> Matriculate </option>
    <option value="HSC"> HSC </option>
    <option value="Diploma"> Diploma </option>
    <option value="Under Graduate"> Under Graduate </option>
    <option value="Post Graduation"> Post Graduation </option>
    <option value="PhD."> PhD. </option>
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
    <td><input type="number" name="WORK_EXP" placeholder="In Years " disabled/><br>
    <tr><td><label>Political Experience<font color="red">*</font> : </label>
    <td><input type="number" name="POL_EXP" placeholder="In Years" disabled/><br>
    <tr><td><label>Achievements : </label><br>
    <td><textarea form="Candidate_Registration" rows="4" cols="50" name="ACHIEVEMENTS"  placeholder="Enter your achievements ..." disabled/></textarea><br>
    </table>
    <br><br>
     <div class="separator">3) Affidavit Uploads</div><br><br>
    <table cellspacing="10">
    <tr><td><label>Property Holdings Affidavit<font color="red">*</font> :</label> 
    <td><input type="file" name="PROP__AFF" accept="pdf/*" disabled/><br>  
    <tr><td><label>Bussiness Investments Affidavit<font color="red">*</font> : </label>
    <td><input type="file" name="BUSS_AFF" accept="pdf/*" disabled/><br>  
    <tr><td><label>Criminal Record Affidavit <font color="red">*</font> : </label>
    <td><input type="file" name="CRIM_AFF" accept="pdf/*" placeholder="Enter Political experience in years" disabled/>
    </table>
    <br><br><br>   
    <div class="separator">4) Declaration</div><br><br><br>
      <button class="button button1" type="reset" >Reset</button>
      <button class="button button2" type="submit" disabled/>Register </button>
    
  </div>
</form>
</div>
<br><br>
<footer style="height:40px;width: 96.5%;position:absolute;margin-bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
</body>
</html>