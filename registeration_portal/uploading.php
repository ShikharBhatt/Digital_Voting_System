<?php
session_start();
?>
<html>

<head>
   <meta name="viewport" content="width=device-width initial-scale=1.0">
   
   <link rel="shortcut icon" href="India.ico" />
<title>Candidate Registration</title>
<style type="text/css">
		 form {
	    display: inline-block;
	    text-align: center;
	    }
</style>

<body>

<script>
function validate_cand()
{
 if(document.can_reg.V_ID.value=="")
 {
   alert("Please provide your ID");
   document.cand_reg.ID.focus();
   return false;
 }
 if(document.cand_reg.PASS.value=="")
 {
   alert("Please provide a password");
   document.cand_reg.PASS.focus();
   return false;
 }
 return true;
}
</script>
<?php echo $_SESSION['ROID']; ?>
<form action ="candidate_registration_script.php" name="cand_reg" onsubmit="return validate_cand()" method="post">
Returning Officer ID : <input type="text" name="RO_ID" value="<?php echo $_SESSION['ROID']; ?>" disabled/>			Constituency ID : <input type="text" name="CONS_ID">
<table align=center cellspacing="20">
<tr>
<td align="right">Voter ID<font color="red">*</font> : </td> 
<td align="left"><input type="text" name="VOTER_ID"></td>
<br>
</tr>

<tr>
<td align="right">Title<font color="red">*</font>  : </td>
<td align="left"><select>
<option value="MR"> MR. </option>
<option value="MS"> MS. </option>
<option value="MRS"> MRS. </option>
<option value="DR"> DR. </option>
</select></td>
<br>
</tr>

<tr>
<td align="right">First Name<font color="red">*</font> : </td> 
<td align="left"><input type="text" name="FNAME"/></td>
<br>
</tr>


<tr>
<td align="right">Middle Name : </td>
<td align="left"><input type="text" name="MNAME"/></td>
<br>
</tr>

<tr>
<td align="right">Last Name<font color="red">*</font> : </td>
<td align="left"><input type="text" name="LNAME"/></td>
<br>
</tr>

<tr>
<td align="right">Party Name<font color="red">*</font> : </td>
<td align="left"><input type="text" name="PARTY_NAME"></td>
<br>
</tr>
<!--
<tr>
<td align="right">Party Symbol<font color="red">*</font> : </td>
<td align="left"><input type="file" name="PSYM" accept="image/*"></td>
<br>
</tr>
-->
<tr>
<td align="right">Highest Education Level<font color="red">*</font>  : </td>
<td align="left"><select name="EDU_LEVEL">
<option value="B10th"> Below 10th </option>
<option value="10th"> Matriculate </option>
<option value="12th"> HSC </option>
<option value="Dip"> Diploma </option>
<option value="GRD"> Graduate </option>
<option value="PG"> Post Graduation </option>
</select></td>
</tr>
<!--
<tr>
<td align="right">Education Institute : </td>
<td align="left"><input type="text" name="EDI"></td>
<br>
</tr>

<tr>
<td align="right">Occupation : </td>
<td align="left"><input type="text" name="Occ"></td>
<br>
</tr>
-->
<tr>
<td align="right">Work Experience : </td>
<td align="left"><input type="number" name="WORK_EXP"></td>
<br>
</tr>

<tr>
<td align="right">Political Experience : </td>
<td align="left"><input type="number" name="POL_EXP"></td>
<br>
</tr>

<tr>
<td align="right">Achievements : </td>
<td align="left"><textarea name="ACHIEVEMENTS"></textarea></td>
<br>
</tr>

<tr>
<td align="right">Property Holdings Affidavit<font color="red">*</font> : </td>
<td align="left"><input type="file" name="PRH" accept="pdf/*"></td>
<br>  
</tr>

<tr>
<td align="right">Bussiness Investments Affidavit<font color="red">*</font> : </td>
<td align="left"><input type="file" name="BIN" accept="pdf/*"></td>
<br>  
</tr>

<tr>
<td align="right">Criminal Record Affidavit <font color="red">*</font> : </td>
<td align="left"><input type="file" name="CRA" accept="pdf/*"></td>
<br>   
</tr>

<tr>
<td align="right"><input type="submit" name="SUB" value="Submit"></td>
<td align="left"><input type="reset" name="RES" value="Reset"></td>
</tr>

</form> 
</body>
</head>
</html> 