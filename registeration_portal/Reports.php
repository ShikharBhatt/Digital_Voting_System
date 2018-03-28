<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  
  <link rel="shortcut icon" href="India.ico" />
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
  <li><a href="#news">News</a></li>
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
</html>