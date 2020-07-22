<html>
<head><link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<form action="" method="POST">
<label>Email</label>
<input type="email" name="email" required>
<label>Password</label>
<input type="password" name="password" required>
<input type="submit" name="submit" value="login">
</form>
<?php
	session_start();
	require_once("connection.php");
	if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password']))
    {
		$email = $_POST['email'];
    	$password = $_POST['password'];
		$user = "SELECT * FROM sample1 where email='".$email."' and password='".$password."' LIMIT 1";

		$result = mysqli_query($conn,$user);
		$rowcount=mysqli_num_rows($result);
		if($rowcount>0)
		{
    		$authenticate = mysqli_fetch_assoc($result);
			if($authenticate['email'] === 'admin@gmail.com' && $authenticate['password'] === 'admin')
        	{
        		$_SESSION['firstname'] = $authenticate['firstname'];
            	header("location:view.php");
        	}
        	else
        	{
        		//echo $password;
           		 header("location:signin.php");
        	}
        }
        else
        {
        	echo "<br>User Not Found"; 
        }
   }

?>


</body>
</html>