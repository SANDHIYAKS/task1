<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $dob = $_POST['dob'];
          $gender = $_POST['gender'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $phone = $_POST['phone_no'];
          $name_of_institution = $_POST['name_of_institution'];
          $resume = $_POST['resume'];


        $query = " update sample1 set firstname = '".$firstname."', lastname='".$lastname."',dob='".$dob."',gender='".$gender."',email='".$email."',password='".$password."',phone_no='".$phone."',name_of_institution='".$name_of_institution."',resume='".$resume."' where email='".$email."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo $conn->error;
        }
    }
    else
    {
        header("location:view.php");
    }


?>