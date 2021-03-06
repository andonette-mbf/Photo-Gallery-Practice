<?php
/*
 * This is for the database connection
 */

 //create an array for the database
 $db['db_host'] = 'localhost';
 $db['db_user'] = 'root';
 $db['db_pass'] = 'root';
 $db['db_name'] = 'galleryoop';

 //convert values to uppercase
 foreach ($db as $key => $value) {
     define(strtoupper($key), $value);
 }

 //connect to database
 $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 if (!$connection) {
     die('failed to connect');
     echo '<div class="alert">no connection</div>';
 } else {
    echo '<div class="alert alert-success text-right">true</div>';
 }

 //check for errors in mysql connection
 function sql_error_check($result)
 {
     global $connection;
     if (!$result) {
         die('query failed' . mysqli_error($connection));
     }
 }
