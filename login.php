<?php

session_start();


require('./partials/header.php');
require('./db.php');

$username = $_GET['username'];
$password = $_GET['password'];

$password = md5($password);

$sql = "SELECT `username`, `password` FROM `users` WHERE `username` = '$username'";

if($result = mysqli_query($connection, $sql)) {
    if (mysqli_num_rows($result) > 0)   {
       while($row = mysqli_fetch_array($result)){
           if ($row['password'] == $password) {
                  $_SESSION['username'] = $username;
               echo '<p class="alert alert-success mt-3" role="alert">success</p>';
           } else {
               echo '<p class="alert alert-danger mt-3" role="alert">wrong password</p>';
           }
       }
    }else {
        echo '<p class="alert alert-danger mt-3" role="alert">user not found</p>';
    }
}
else {
    echo '<p class="alert alert-danger mt-3" role="alert">Error adding data</p>';
    echo "ERROR: Could not able to execute $insertRecord. " . mysqli_error($connection);
}
    ?>