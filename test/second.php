<?php

//fetch.php

include('connection.php');
$output[] = '';
//$row=5;
if(true)
{
 $query = "
 	SELECT count(Age),Age
 	FROM Member 
 	GROUP BY
 		case
 	WHEN (Age >= 10 AND Age <= 20) THEN
    	'10-20'
	WHEN (Age >= 21 AND Age <= 30) THEN
    	'21-30'
    WHEN (Age >= 31 AND Age <= 40) THEN
    	'31-40'
  	WHEN (Age >= 41 AND Age <= 50) THEN
    	'41-50'
	ELSE
    	'51-'
    END";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
  	'Age'=>$row["Age"],
  	'Count'=>$row["count(Age)"]);
 }
}
echo json_encode($output);
?>