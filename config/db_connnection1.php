<?php

function OpenCon1()
 {
 $dbhost = "localhost";
 $dbuser = "alex";
 $dbpass = "1";
 $db = "test";


 $conn1 = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn1 -> error);

 
 return $conn1;
 }
 
function CloseCon1($conn1)
 {
 $conn1 -> close();
 }
   
?>