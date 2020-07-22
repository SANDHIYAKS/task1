<?php 

$conn = new mysqli("localhost","root","","sample");
if($conn->connect_error) {
	die("Connection failed : ".$conn->connect_error);
} else {
	}
?>
<?php

if (isset($_POST['submit'])) {

          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $dob = $_POST['dob'];
          $gender = $_POST['gender'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $phone = $_POST['phone_no'];
          $name_of_institution = $_POST['name_of_institution'];
          $resume = $_POST['resume'];

$sql = "INSERT INTO sample1 (firstname,lastname,dob,gender,email,password,phone_no,name_of_institution,resume) VALUES ('$firstname','$lastname','$dob','$gender','$email','$password','$phone','$name_of_institution','$resume')";
$result = mysqli_query($conn,$sql);

if($result)
            {
                header("location:signin.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    
    else
    {
        header("location:signup.php");
    }


?>