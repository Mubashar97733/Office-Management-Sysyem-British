<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "bisa";

$connect=mysqli_connect($server,$user,$password,$database);
if($connect)
{
   //echo "ok";
}
else{
    die("Database Connection Error");
   /* ?>
    <div class="container">
        <div class="alert alert-danger">
            Database Connection Error!
        </div>
    </div>
    <?php   */
}
