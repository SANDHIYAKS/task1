<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $email = $_GET['Del'];
            $query = " delete from sample1 where email = '".$email."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view.php");
        }

?>