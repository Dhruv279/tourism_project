<!-- It's Check connection with databases   -->
<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="tourism";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect");
}

