
<html>
<head><link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<form name="form" action="process.php" method="POST" >
<div>
<label>Full name<label>
<input type="text" name="firstname" placeholder="Enter firstname" required autofocus>
<input type="text" name="lastname" placeholder="Enter lastname" required autofocus>
<label>Date of Birth<label>
<input type="date" name="dob" required>
<label>Gender<label>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<label>Email</label>
<input type="email" name="email" required>
<label>Password</label>
<input type="password" name="password" required>
<label>Phone number</label>
<input type="text" name="phone_no" id="phone" pattern="[7-9]{1}[0-9]{9}" placeholder ="Enter your num here" required>
<label>Name of the institution</label>
<input type="text" name="name_of_institution" placeholder="Enter institution name" required>
<label>Resume</label>
<input type="file" name="resume">
<input type="submit" name="submit" value="submit">
</div>
</form>

</body>
</html>
