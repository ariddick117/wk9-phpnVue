<?php

require_once '../load.php';

// get all the Roku users
if(isset($_GET['allusers'])) {
    $users = getAllUsers();

    // send this (all the users, or an error message) back to Javascript
    echo $users;
}