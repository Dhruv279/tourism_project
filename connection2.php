<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="tourism";
$email = $_SESSION['Email'];
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(isset($_POST["submit"]))
{
    $placeid=$_POST['my_html_input_tag'];
    $sql = "select LocationID,Place,Rating,Cost from main_database where LocationID='$placeid'";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result); //It fetch one row of data from the result set and return it as an associative array.
    $placeid = $row['LocationID'];
    $placename = $row['Place'];
    $ratings = $row['Rating'];
    $price = $row['Cost'];


    $qry = "INSERT INTO user_place(Email,PlaceID,PlaceName,Ratings,Price) values('$email','$placeid','$placename','$ratings','$price')";
    $res=mysqli_query($conn,$qry); //excecute given query on database.
    if($res)
    {
        header("Location: search-box.php");
    }
    header("Location: search-box.php");

}
?>
