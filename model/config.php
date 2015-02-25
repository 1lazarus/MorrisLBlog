<?php
require_once (__DIR__."/database.php");
session_regenerate_id(true );
session_start();


$path = "/MorrisLBlog";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

if(!isset($_SESSION["connection"])){
    echo 'set';
$connection = new Database($host,$username,$password,$database);

$_SESSION["connection"] = $connection;
}