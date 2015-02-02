<?php
require_once ("../modle/database.php");
$connection = new mysqli($host,$username,$password);

if($connection->connect_error){
  die("Error:" . $connection->connect_error);  
}
$exists=$connection->select_db();



$connection->close($databse);
if($exists){
 $query = $connection->query("CREATE DATABASE $databse");
 if($query){
     echo"Successfully created database:".$databse;
     
 }
}
else{
    echo "Database has already been created";
    
}