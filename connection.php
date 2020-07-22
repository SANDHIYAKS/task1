<?php 
/*
    $con = mysqli_connect("localhost","root","","sample");

    if(!$con)
    {
        die(" Connection Error ");
    }

*/?>

<?php 
/* Template Name: Login*/
$conn = new mysqli("localhost","root","","sample");
if($conn->connect_error) {
	die("Connection failed : ".$conn->connect_error);
} else {
	
}
?>