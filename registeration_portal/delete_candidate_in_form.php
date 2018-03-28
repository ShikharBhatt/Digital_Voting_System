<?php
session_start();
?>
<html>

<head>
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />
    <title>Candidate Deletion</title>
    <link rel="stylesheet" type="text/css" href="form_style.css">
</head>
<body>
<script type="text/javascript">
	function check()
	{
		window.location.href="candidate_registration_interscript.php";
	}
</script>
<header>
    <img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
    <h2>ELECTION COMMISSION OF INDIA</h2>
    </header>
    <br><br>
<div class="autofill">
<pre>
<label style="margin-left: 200px">Returning Officer :   </label><input type="text" name="RO_ID" value="<?php echo $_SESSION['RO_ID']; ?>" disabled/ >   <label style="margin-left: 100px">Constituency ID :  </label><input type="text" name="CONS_ID" value="<?php echo $_SESSION['CONSM_ID']; ?>"  disabled/>
</pre>
</div>


<div class="fill">
<form id="form1" name="Delete_Candidate" action="delete_candidate_in_form_script.php" method ="post" enctype="multipart/form-data">
 
  <div class="container forms">
  <font color="red">All the fields marked * are mandatory</font><br><br>
            <div class="separator">1) Personal Details</div><br><br>

    <table cellspacing="10">
    <tr><td><label>Voter ID<font color="red">*</font> : </label>
    <td><input type="text" placeholder="Enter Voter ID" name="VOTER_ID" value="<?php echo $_SESSION['VOTER_ID']; ?>" disabled/>
   <td rowspan="3" width="400px" align="right"><img src="getImage.php?id=<?php echo $_SESSION['VOTER_ID'] ?>" border="1px" width="150px" height="150px" />

        <br>

    

   
    <tr><td><label>First Name<font color="red">*</font> : </label>
    <td><input type="text" name="FNAME" value="<?php echo $_SESSION['FNAME']; ?>" disabled/ ><br>

    <tr><td><label>Middle Name : </label>
    <td><input type="text" name="MNAME" value="<?php echo $_SESSION['MNAME']; ?>" disabled/ ><br>
    

    <tr><td><label>Last Name<font color="red">*</font> : </label>
    <td><input type="text" name="LNAME" value="<?php echo $_SESSION['LNAME']; ?>" disabled/ ><br>
    </table>
    <br>

    <div class="separator">2) Party & Work Details</div><br><br>
    <table cellspacing="10">

    <tr><td><label>Party Name<font color="red">*</font> : </label>
    <td><input type="text" placeholder="Enter Party Name" name="PARTY_NAME" value="<?php echo $_SESSION['PARTY_NAME']; ?>" disabled/ ><br>

    <tr><td><label>Party Symbol<font color="red">*</font> : </label>
    <td><input type="file" name="PARTY_NAME" accept="image/*"  disabled/><br>

    <tr><td><label>Highest Education Level<font color="red">*</font>  : </label>
    <td><input type="text" name="EDU_LEVEL" value="<?php echo $_SESSION['EDU_LEVEL']; ?>" disabled/ >
   <br>
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
    <td><input type="number" name="WORK_EXP" placeholder="In Years " value="<?php echo $_SESSION['WORK_EXP']; ?>" disabled/ ><br>
    <tr><td><label>Political Experience<font color="red">*</font> : </label>
    <td><input type="number" name="POL_EXP" placeholder="In Years" value="<?php echo $_SESSION['POL_EXP']; ?>" disabled/ ><br>
    <tr><td><label>Achievements : </label><br>
    <td><textarea rows="4" column="4" name="ACHIEVEMENTS"  disabled/ ><?php echo $_SESSION['ACHIEVEMENTS']; ?></textarea></td><br>
    </table>
    <br><br>
     <div class="separator">3) Affidavit Uploads</div><br><br>
    <table cellspacing="10">
    <tr><td><label>Property Holdings Affidavit<font color="red">*</font> :</label> 
    <td><input type="file" name="PROP_AFF" accept="pdf/*" disabled/><br>  
    <tr><td><label>Bussiness Investments Affidavit<font color="red">*</font> : </label>
    <td><input type="file" name="BUSS_AFF" accept="pdf/*" disabled/><br>  
    <tr><td><label>Criminal Record Affidavit <font color="red">*</font> : </label>
    <td><input type="file" name="CRIM_AFF" accept="pdf/*" placeholder="Enter Political experience in years" disabled/>
    </table>
    <br><br><br>   
    <div class="separator">4) Declaration</div><br><br>
    <div style="font-weight: bold;font-style: italic;">
        I hereby give my consent to remove my candidacy from the constituency mentioned above.
    </div>
    <br><br><br>
</form>
<form id="form2" action="ro_intermediate.php">
</form>

    <div class="clearfix" style="display: block;">
      <button form="form2" class="button button1" type="submit" style="background-color: blue;border-color: darkblue;">Cancel</button>
      <button form="form1" class="button button2" type="submit" >Delete </button>
     

</div>
</div>
<br><br>
<footer style="height:40px;width: 96.5%;position:absolute;margin-bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
</body>
</html>