<?php 
    session_start();
    require_once("connection.php");
    $query = " select * from sample1 ";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
    <style type="text/css">
        .btn
        {
            margin-left : 1100px;
            margin-bottom: 20px;
            align : right;
        }
    </style>
</head>
<body class="bg-dark">
        <div><a href="logout.php"><button class="btn">Logout</button></a><?php echo $_SESSION['firstname']; ?></div>

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                                 
                        <table class="table table-bordered">
                            <tr>
                                <td> Firstname </td>
                                <td> Lastname </td>
                                <td> dob </td>
                                <td> gender </td>
                                <td> email </td>
                                <td> password </td>
                                <td> phone </td>
                                <td> name of institution </td>
                                <td> resume </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>
                        
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $firstname = $row['firstname'];
                                        $lastname = $row['lastname'];
                                        $dob = $row['dob'];
                                        $gender = $row['gender'];
                                        $email = $row['email'];
                                        $password = $row['password'];
                                        $phone = $row['phone_no'];
                                        $name_of_institution = $row['name_of_institution'];
                                        $resume = $row['resume'];
                            ?>
                                    <tr>
                                        <td><?php echo $firstname ?></td>
                                        <td><?php echo $lastname ?></td>
                                        <td><?php echo $dob ?></td>
                                        <td><?php echo $gender ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $password ?></td>
                                        <td><?php echo $phone ?></td>
                                        <td><?php echo $name_of_institution ?></td>
                                        <td><?php echo $resume ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $email ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $email ?>">Delete</a></td>
                                    </tr>        

                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                                 
                         </div>
                </div>
            </div>
        </div>
    
</body>
</html>