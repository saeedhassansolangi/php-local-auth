<?php

require "./db.php";
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$password = md5($password);

if (isset($username) && isset($password) && isset($email)) {
    $insertRecord = "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$username','$password','$email')";
    if (mysqli_query($connection, $insertRecord)) {
        echo '<p class="alert alert-success mt-3" role="alert"> Registered Successfully </p>';
    } else {
        echo '<p class="alert alert-danger mt-3" role="alert">Error adding data</p>';
        echo "ERROR: Could not able to execute $insertRecord. " . mysqli_error($connection);
    }
}