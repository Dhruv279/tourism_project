<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="tourism";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(isset($_POST["submit"]))
{
    $placeid=$_POST['my_html_input_tag'];
    $qry="INSERT INTO user_place(PlaceID,PlaceName,Ratings,Price) SELECT LocationID,Place,Rating,Cost FROM main_database WHERE LocationID='$placeid'";
    $res=mysqli_query($conn,$qry);
    if($res)
    {
        header("Location: search-box.php");
    }
    header("Location: search-box.php");

}
?>