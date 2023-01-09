<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbName = "mainForum";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dbName);

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}