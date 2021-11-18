<?php
$db_host='localhost';
$db_database='db_solbud';
$db_username='root';
$db_password='';

// connect database
$db = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($db->connect_errno){
	die ("Could not connect to the database: <br />". $db->connect_error);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function make_query($query){
   global $db;
   $result = $db->query($query);
   if(!$result) die ("Could not query the database: <br />". $db->error ."<br>Query: ".$query);
   return $result;
}

function one_res($query){
   $result = make_query($query);
   $row = $result->fetch_object();
   return $row;
}
?>
