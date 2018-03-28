<!DOCTYPE html>
<html>
<head>
          <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />

<link rel="stylesheet" type="text/css" href="webpage1.css">
<link rel="stylesheet" type="text/css" href="form_style.css">
<script type="text/javascript" src="jquery.js"></script>
<style>
.selected
{
 background-color: grey;
}


</style>
</head>
<body style="background-color: rgb(204, 221, 255);">
<div id="main">
  <div class="header">
    <div id="logo"> 
      <img src="eci.png" align="left" width="80px" height="80px" style="position: absolute;top: 20px;">
      <font style="font-family: Verdana;font-weight: bold;font-size: 35px; position: absolute;top: 40px;left: 125px;">Election Commission of India</font>
    </div>
  <div id="menu">
   <ul id="me">
    <li><a href="User_Website.php">Home</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="laws.html">Election Laws and Instructions</a></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Information</a>
      <div class="dropdown-content">
        <a href="candinfo.php">Candidate Information</a>
        <a href="foinfo.php">Officer Information</a>
      </div>
    </li>
    <li class="selected"><a href="Reports.php" >Reports</a></li>
    <li><a href="faqs.html">FAQs</a></li>

  </ul>
  </div>
  </div>
  <div id="site_content">
<br><br>
<h4>ALL THE REPORTS ARE AVAILABLE IN .PDF FORMAT. Please Click on the links to view or Download the content</h4>
<div style="font-size: 20px;color: blue;position: relative;padding-top: 40px;">
  <table cellspacing="10px">
    <tr><td align="right">1)  <td><a href="reports/report1.pdf" target="_blank" style="text-decoration: none;">List of political parties participating</td></tr>
    <tr><td align="right">2)  <td><a href="reports/report2.pdf" target="_blank" style="text-decoration: none;">State wise candidates list.</td></tr>
    <tr><td align="right">3)  <td><a href="reports/report3.pdf" target="_blank" style="text-decoration: none;">Constituency wise summary(voter turnout, no. of polling stations, contestants,voters)</td></tr>
    <tr><td align="right">4)  <td><a href="reports/report4.pdf" target="_blank" style="text-decoration: none;">State-wise no. of electors</td></tr>
    <tr><td align="right">5)  <td><a href="reports/report5.pdf" target="_blank" style="text-decoration: none;">State-wise voter turnout</td></tr>
    <tr><td align="right">6)  <td><a href="reports/report6.pdf" target="_blank" style="text-decoration: none;">Votes Won by Each Candidate</td></tr>
    <tr><td align="right">7)  <td><a href="reports/report7.pdf" target="_blank" style="text-decoration: none;">Voter Turnout at Each Polling Station</td></tr>
    <tr><td align="right">8)  <td><a href="reports/report8.pdf" target="_blank" style="text-decoration: none;">Votes Won by Parties in Different Constituencies</td></tr>
    <tr><td align="right">9)  <td><a href="reports/report9.pdf" target="_blank" style="text-decoration: none;">Voting patterns based on age group(for Political Parties)</td></tr>
    <tr><td align="right">10)  <td><a href="reports/report10.pdf" target="_blank" style="text-decoration: none;">Voting patterns based on literacy(for Political Parties)</td></tr>
    <tr><td align="right">11)  <td><a href="reports/report11.pdf" target="_blank" style="text-decoration: none;">Voting patterns based on Income group</td></tr>
    <tr><td align="right">12)   <td><a href="reports/report12.pdf" target="_blank" style="text-decoration: none;">Polling station reports(Electors from outside PC)</td></tr>
    <tr><td align="right">13) <td><a href="reports/report13.pdf" target="_blank" style="text-decoration: none;">Polling station reports(Electors from PC)</td></tr>
    <tr><td align="right">14) <td><a href="reports/report22.pdf" target="_blank" style="text-decoration: none;">Participation of women (as Voters and Candidates)</td></tr>
    <tr><td align="right">15)  <td><a href="reports/report15.pdf" target="_blank" style="text-decoration: none;">Final Winner List for Each Consitiuency</td></tr>
   <tr><td align="right">16)  <td><a href="reports/report16.pdf" target="_blank" style="text-decoration: none;">Voting patterns based on Gender(for political parties)</td></tr>
  <tr><td align="right">17)  <td><a href="reports/report17.pdf" target="_blank" style="text-decoration: none;">Voting patterns based on Caste(for political parties)</td></tr>
   <tr><td align="right">18)  <td><a href="reports/report18.pdf" target="_blank" style="text-decoration: none;">Voting patterns based on Religion(for political parties)</td></tr>
   <tr><td align="right">19)  <td><a href="reports/report19.pdf" target="_blank" style="text-decoration: none;">Voting patterns based on Native Language(for political parties)</td></tr>
   <tr><td align="right">20)  <td><a href="reports/report20.pdf" target="_blank" style="text-decoration: none;">Voting patterns based on Occupation(for political parties)</td></tr>
   <tr><td align="right">21)  <td><a href="reports/report21.pdf" target="_blank" style="text-decoration: none;">Voting patterns on Physically Challanged,Overseas And Service Voters</td></tr>
      

  </table>
</div>

    
</div>
</div>

  <div id="footer">
    COPYRIGHT © ELECTION COMMISSION OF INDIA
  </div>



</body>
</html>
<!--<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="topnav.css">
<style>


.header{
	padding: 50px 16px;
	display: block;
  	color: white;
  	background-color: blue;
  }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

 a:active{
	background-color: grey;
	color:black;
}

a{
	text-decoration: none;
	color: blue;

}

li a:hover, .dropdown:hover .dropbtn {
    background-color: grey;
	}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: grey}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<div class="header">
<img src="eci.png" align="left" width="80px" height="80px" style="position: absolute;top: 5px;">
<font style="font-family: Verdana;font-weight: bold;font-size: 35px; position: absolute;top: 25px;left: 125px;">Election Commission of India</font>
</div>

 <ul>
  <li><a href="User_Website.php">Home</a></li>
  <li><a href="news.php">News</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Information</a>
    <div class="dropdown-content">
      <a href="#">Candidate Information</a>
      <a href="foinfo.php">Field Officer Information</a>
    </div>
  </li>
  <li><a href="Reports.php">Reports</a></li>
</ul>
</div>
<br><br>
<h4>ALL THE REPORTS ARE AVAILABLE IN .PDF FORMAT. Please Click on the links to view or Download the content</h4>
<div style="font-size: 20px;color: blue;position: relative;padding-top: 40px;">
	<table cellspacing="10px">
		<tr><td align="right">1)	<td><a href="sep-oct.pdf" target="_blank">List of political parties participating</td></tr>
		<tr><td align="right">2)	<td><a href="">List of successful candidates.</td></tr>
		<tr><td align="right">3) 	<td><a href="">Constituency wise summary(voter turnout, no. of polling stations, contestants,voters)</td></tr>
		<tr><td align="right">4) 	<td><a href="">State-wise no. of electors</td></tr>
		<tr><td align="right">5) 	<td><a href="">State-wise voter turnout</td></tr>
		<tr><td align="right">6) 	<td><a href="">State-wise seats won</td></tr>
		<tr><td align="right">7) 	<td><a href="">Voting patterns based on age group(constituency and state wise)</td></tr>
		<tr><td align="right">8) 	<td><a href="">Voting patterns based on literacy</td></tr>
		<tr><td align="right">9) 	<td><a href="">Voting patterns based on Income group</td></tr>
		<tr><td align="right">10)	<td><a href="">Voting patterns based on religion</td></tr>
		<tr><td align="right">11) 	<td><a href="">Polling station reports(Total voters, electors from PC, electors from outside PC)</td></tr>
		<tr><td align="right">12)	<td><a href="">Participation of women electors</td></tr>
		<tr><td align="right">13)	<td><a href="">Participation of women candidates</td></tr>
		<tr><td align="right">14)	<td><a href="">Participation of women as independent candidates</td></tr>
		<tr><td align="right">15)	</td></tr>
		

	</table>
</div>

</body>
</html>-->