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
    	<br><br><br>

    	<label><?php 
        $v=$row['CAND_ID'];
        $votes="SELECT count(VOTER_ID) as vote FROM vote_table WHERE CONS_ID='$const' AND CAND_ID='$v' ";
        $co=mysqli_query($con,$votes);
        $counting=mysqli_fetch_array($co);
        echo $row['CAND_ID'].' '.$row['FNAME'].' '.$row['MNAME'].' '.$row['LNAME'].' '.$row['PARTY_NAME'].' : '.$counting['vote']?>
            
        </label>
    	<?php
    }
?>
        <label><?php

        $votes="SELECT count(VOTER_ID) as vote FROM vote_table WHERE CONS_ID='$const' AND CAND_ID is NULL ";
        $co=mysqli_query($con,$votes);
        $counting=mysqli_fetch_array($co);
        echo "<br><br><br>".''.'NOTA'.' : '.$counting['vote'];

?></label>