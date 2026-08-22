<?php
$conn = mysqli_connect("localhost", "root", "", "New");

if (!$conn){
    die ("Connection failed:" .mysqli_error());
}
?>