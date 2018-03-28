<?php
session_start();


$con = mysqli_connect('localhost','root','12345');                             //code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))                                               //code for selecting database
    echo 'cannot connect';
                $check=$_SESSION['VOTER_ID'];   
                $star="select *,now() as tp from candidate_table where VOTER_ID='$check'";  //query for selecting candidate

                    $result=mysqli_query($con,$star);                           //to execute query on database and store records in 'result' variable 
                    $row=mysqli_fetch_array($result);                           //to fetch records into a 'row' variable
    
   
?>
<html>

<head>
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />
    <title>Candidate Print Form</title>
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
    <h2 >ELECTION COMMISSION OF INDIA</h2>
    </header>
                  <form action="ro_intermediate.php" id="back">
    </form>
    <button  class="button button1"  form="back" style="margin-left: 0px;background-color: rgb(0,161,255);border-color:rgb(0,161,200);" >Home </button>
  <label style="text-align: right;margin-left: 70%;"><?php echo $row['tp'];?></label>

<div class="autofill">
<pre>
<label style="margin-left: 200px">Returning Officer :   </label><input type="text" name="RO_ID" value="<?php echo $_SESSION['RO_ID']; ?>" disabled/ >   <label style="margin-left: 100px">Constituency ID :  </label><input type="text" name="CONS_ID" value="<?php echo $_SESSION['CONSM_ID']; ?>"  disabled/>
</pre>
</div>


<div class="fill">
<form >
 
  <div class="container forms">
  <font color="red">All the fields marked * are mandatory</font><br><br>
            <div class="separator">1) Personal Details</div><br><br>

    <table cellspacing="10">
    <tr>
        <td><label>Candidate ID :</label></td>
        <td><input type="text" value="<?php echo $row['CAND_ID'];?>" disabled/></td>
    </tr>
<br>

    <tr><td><label>Voter ID<font color="red">*</font> : </label>
    <td><input type="text" placeholder="Enter Voter ID" name="VOTER_ID" value="<?php echo $row['VOTER_ID']; ?>" disabled/>
   <td rowspan="3" width="400px" align="right"><img src="getImage.php?id=<?php echo $row['VOTER_ID'] ?>" border="1px" width="150px" height="150px" />

        <br>


   
    <tr><td><label>First Name<font color="red">*</font> : </label>
    <td><input type="text" name="FNAME" value="<?php echo $row['FNAME']; ?>" disabled/ ><br>

    <tr><td><label>Middle Name : </label>
    <td><input type="text" name="MNAME" value="<?php echo $row['MNAME']; ?>" disabled/ ><br>
    

    <tr><td><label>Last Name<font color="red">*</font> : </label>
    <td><input type="text" name="LNAME" value="<?php echo $row['LNAME']; ?>" disabled/ ><br>
    </table>
    <br>

    <div class="separator">2) Party & Work Details</div><br><br>
    <table cellspacing="10">

    <tr><td><label>Party Name<font color="red">*</font> : </label>
    <td><input type="text" placeholder="Enter Party Name" name="PARTY_NAME" value="<?php echo $row['PARTY_NAME']; ?>" disabled/ ><br>
   <td rowspan="3" width="400px" align="right"><img src="party_symbol.php?id=<?php echo $row['CAND_ID'] ?>" border="1px" width="100px" height="100px" />

  <!--  <tr><td><label>Party Symbol<font color="red">*</font> : </label>
    <td><input type="file" name="PARTY_NAME" accept="image/*"  disabled/><br>
-->
    <tr><td><label>Highest Education Level<font color="red">*</font>  : </label>
    <td><input type="text" name="EDU_LEVEL" value="<?php echo $row['EDU_LEVEL']; ?>" disabled/ >
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
    <td><input type="number" name="WORK_EXP" placeholder="In Years " value="<?php echo $row['WORK_EXP']; ?>" disabled/ ><br>
    <tr><td><label>Political Experience<font color="red">*</font> : </label>
    <td><input type="number" name="POL_EXP" placeholder="In Years" value="<?php echo $row['POL_EXP']; ?>" disabled/ ><br>
    <tr><td><label>Achievements : </label><br>
    <td><textarea rows="4" column="4" name="ACHIEVEMENTS"  disabled /><?php echo $row['ACHIEVEMENTS']; ?></textarea></td><br>
    </table>
     <br><br>
     <!--   <div class="separator">3) Affidavit Uploads</div><br><br>
    <table cellspacing="10">
    <tr><td><label>Property Holdings Affidavit<font color="red">*</font> :</label> 
    <td><input type="file" name="PROP_AFF" accept="pdf/*" disabled/><br>  
    <tr><td><label>Bussiness Investments Affidavit<font color="red">*</font> : </label>
    <td><input type="file" name="BUSS_AFF" accept="pdf/*" disabled/><br>  
    <tr><td><label>Criminal Record Affidavit <font color="red">*</font> : </label>
    <td><input type="file" name="CRIM_AFF" accept="pdf/*"  disabled/>
    </table>-->
    <!--<br><br><br> -->  
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


           <div class="clearfix">
        <button  class="button button1" style="background-color: blue;border-color: darkblue;margin-left: 350px;" onclick="window.print()" target="_blank"/>Print Form
        </div>

</div>
<br><br>
<footer style="height:40px;width: 96.5%;position:absolute;margin-bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
</body>
</html>