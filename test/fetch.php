<?php

//fetch.php

include('connection.php');
$output[] = '';
//$row=5;
if(true)
{
 $query = "SELECT Category,SUM(ClickTimes) FROM Film_Buy GROUP BY Category";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
  	'Category'=>$row["Category"],
  	'ClickTimes'=>$row["SUM(ClickTimes)"]);
 }
}
echo json_encode($output);
?>
