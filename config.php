<?php
$conn = mysqli_connect("localhost", "root", "", "bluebirdhotel");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>