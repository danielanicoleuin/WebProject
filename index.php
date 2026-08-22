<?php
include "db.php";

if (isset($_POST['save'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $block = $_POST['block'];
    $sql = "INSERT INTO new1 (firstname, middlename, lastname, course, year, block)
    values ('$firstname', '$middlename', '$lastname', '$course', '$year', '$block')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h1>Registration Form</h1>
        
        <div class="name-row">
            <div>
                <label>Firstname</label>
                <input type="text" name="firstname">
            </div>
            <div>
                <label>Middlename</label>
                <input type="text" name="middlename">
            </div>
            <div>
                <label>Lastname</label>
                <input type="text" name="lastname">
            </div>
        </div>
        
        <div class="course-row">
            <div>
                <label>Course</label>
                <input type="text" name="course">
            </div>
            <div>
                <label>Year</label>
                <input type="text" name="year">
            </div>
            <div>
                <label>Block</label>
                <input type="text" name="block">
            </div>
        </div>
        
       
        
        <button type="submit" name="save">Register</button>
        <div class="links">
            <a href="view.php">View User</a>
        </div>
    </form>
</body>
</html>