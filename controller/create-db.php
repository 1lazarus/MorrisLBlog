<?php

require_once (__DIR__ . "/../model/config.php");


$connection = new mysqli($host, $username, $password);




if ($connection->connect_error) {
    die("<p>Error:" . $connection->connect_error . "</p>");
}


$exists = $connection->select_db($database);




if ($exists) {
    $query = $connection->$query("CREATE DATABASE $databse");
   
    
    if ($query) {
        echo"<p>Successfully created database:" . $databse . "<p/>";
    }
} 

else {
    echo "<p>Database has already been created</p>";
}
$query = $connection->query("Create Table posts("
        . "id int(11) NOT NULL AUTO_INCREMENT "
        . "title varchar (225) NOT NULL"
        . "post text NOT NULL"
        . "PRIMARY KEY (id)");
if ($query) {
    echo "<p>Succesfully create table posts</p>";
} else {
    echo" <p>$connection->error</P>";
}



$connection->close();
