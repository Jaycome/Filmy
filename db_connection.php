<?php

function OpenCon($dbname)
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = $dbname;


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
/*function Search(){
    $connect=OpenCon("Member");
    if(!$connect){
        die("error!!!!".mysqli_connect_error());
    }
    mysqli_select_db($connect,"Member")or
        die("error!!!".mysqli_error($connect));
    $sql="SELECT * FROM UserName";
    $rows=mysqli_query($connect,$sql);
    $num=mysqli_num_rows($rows);
    CloseCon($connect);
    return $rows;
}*/
?>