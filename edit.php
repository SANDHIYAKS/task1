<?php 
    require_once("connection.php");
    $email = $_GET['GetID'];
    
    $query = " select * from sample1 where email='".$email."'";
    $result = mysqli_query($conn,$query);

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
    }

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
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form name="myform" action="update.php?ID=<?php echo $email ?>" method="post">
                                <label>Full name<label>
                                <input type="text" name="firstname" placeholder="Enter firstname" value="<?php echo $firstname ?>" />
                                <input type="text" name="lastname" placeholder="Enter lastname" value="<?php echo $lastname ?>" />
                                <label>Date of Birth<label>
                                <input type="date" name="dob" value="<?php echo $dob ?>" />
                                <label>Gender<label>
                                <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"; ?> />Male
                                <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"; ?> />Female
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $email ?>" />
                                <label>Password</label>
                                <input type="text" name="password" value="<?php echo $password ?>" />
                                <label>Phone number</label>
                                <input type="text" name="phone_no" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $phone ?>" />
                                <label>Name of the institution</label>
                                <input type="text" name="name_of_institution" placeholder="Enter institution name" value="<?php echo $name_of_institution ?>" />
                                <label>Resume</label>
                                <input type="file" name="resume"value="<?php echo $resume ?>" />
                                <!--<input type="text" class="form-control mb-2" placeholder=" firstname " name="name" value="<?php echo $UserName ?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $UserEmail ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Age " name="age" value="<?php echo $UserAge ?>">-->
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>