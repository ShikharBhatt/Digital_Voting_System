<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    td{
        text-align: center;
        font-family: Tahoma;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    th{
        font-family: 'Trebuchet MS';
        background-color: black;
        color: white;
    }
</style>
</head>
<body>

<table cellspacing="10" border="1px" style="border-collapse: collapse;margin-bottom: 20px;">
        <tr>
            <th>Cand-ID</th>
            <th >Name</th>
            <th>Party Name</th>
            <th>Party Symbol</th>
            <th>Count</th>
        </tr>            
<?php
	$const=$_POST['q'];
	 $con=mysqli_connect('localhost','root','12345');
	 if(!$con)
    {
    	echo "cannot connect";
    }
    
    if(!mysqli_select_db($con,'dvs'))
    {
    	echo "cannot connect";
    }

    $query="SELECT distinct c.CAND_ID,c.FNAME,c.MNAME,c.LNAME,c.PARTY_NAME,ct.CT_CONS_ID FROM candidate_table c NATURAL JOIN cand_cons_table ct WHERE ct.CT_CONS_ID='$const'";

	  $result=mysqli_query($con,$query);

    while($row=mysqli_fetch_array($result))
    {
    	?>
    	

        <?php 
            $v=$row['CAND_ID'];
            $votes="SELECT count(VOTER_ID) as vote FROM vote_table WHERE CONS_ID='$const' AND CAND_ID='$v' ";
            $co=mysqli_query($con,$votes);
            $counting=mysqli_fetch_array($co);
            //echo $row['CAND_ID'].' '.$row['FNAME'].' '.$row['MNAME'].' '.$row['LNAME'].' '.$row['PARTY_NAME'].' : '.$counting['vote']?>
        <tr>
            <td><?php echo $row['CAND_ID'];?></td>
            <td><?php echo $row['FNAME'].' '.$row['MNAME'].' '.$row['LNAME'];?></td>
            <td><?php echo $row['PARTY_NAME'];?></td>
            <td><img src="party_symbol.php?id=<?php echo $row['CAND_ID']; ?>" height="30px" width="30px"></td>
            <td><?php echo $counting['vote'];?></td>

        </tr>            
    	<?php
    }
?>
        <?php

        $votes="SELECT count(VOTER_ID) as vote FROM vote_table WHERE CONS_ID='$const' AND CAND_ID is NULL ";
        $co=mysqli_query($con,$votes);
        $counting=mysqli_fetch_array($co);
 //       echo "<br><br><br>".''.'NOTA'.' : '.$counting['vote'];

?>
<tr>
            <td>--</td>
            <td>--</td>
            <td>NOTA</td>
            <td><img src="nota.jpg" height="30px" width="30px"></td>
            <td><?php echo $counting['vote'];?></td>
</tr>
</table>
</body>
</html>
