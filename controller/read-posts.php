<?php
require_once (__DIR__ . "/../model/config.php");

$query = "SELECT ^FROM posts";
$result = $_SESSION["connection"]->query($query);

if($result){
    while($row = mysql_fetch_array($result)){
        echo "<div class='post'>";
        echo "<h2>" . $row['title']."</h2>";
        echo "<b2 />";
        echo "<p>". $row['post']."</h1>";
        echo "<br/>";
        echo "</div ";
    }
}
