<!DOCTYPE html>
<html>
   <head>
    <meta name="viewport" content="width=device-width initial-scale=1.0">
  
  <link rel="shortcut icon" href="India.ico" />
      <title></title>
   </head>
   <body>
      <?php
         $cons=$_POST['data'];
         $con=mysqli_connect('localhost','root','12345');									           //code for database connectivity 
         if(!$con) echo 'cannot connect';
         if(!mysqli_select_db($con,'dvs'))                                             //code for selecting database
         
           echo 'cannot connect';
           $can="SELECT distinct c.CAND_ID,c.FNAME,c.MNAME,c.LNAME,ct.CT_CONS_ID 				
           		 FROM candidate_table c JOIN cand_cons_table ct ON c.CAND_ID=ct.CAND_ID 
           		 WHERE ct.CT_CONS_ID='$cons'";												                   //query for extracting candidates contesting in a constituency     


               $result=mysqli_query($con,$can);												                 //to execute query on database and store records in 'result' variable 

         ?>
      		<option id="cand" value="Select Candidate"
      						  selected="true"
      						  disabled="true" 
      						  readonly="true"> Select Candidate</option>
     

      <?php
         while($row=mysqli_fetch_array($result))											                 //to fetch records into a 'row' variable
         {?>
      		<option id="cand" value="<?php echo $row['CAND_ID']?>">
      								 <?php echo $row['CAND_ID'].'-'.$row['FNAME'].' '.$row['MNAME'].' '.$row['LNAME']?></option>
     	 <?php
         }
         ?>
   </body>
</html>