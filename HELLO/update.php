<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UPDATE PROFILE</title>
</head>
<body>
 <div class="login-wrap">
	<?php
	session_start();
		include "dbconnection.php";
		 
		     $_Email=$_SESSION['Email'];
		     $_FirstName=$_SESSION['FirstName'];
		     $_LastName=$_SESSION['LastName'];
		     $_Password=$_SESSION['Password'];
		     $_mobile=$_SESSION['mobile'];
             $user="select * from loginDetails where Email='$_Email' ";
             $result=mysqli_query($conn,$user);
              
               while($row = mysqli_fetch_array($result))
        {
	?>
		
		
		<div class="login-form">
		 
		<form method="POST" action="register.php" enctype="multipart/form-data">

			<div class="sign-in-htm">
				<div class="group">
				</br></br>
				<div class="profile-pic-div">
  <?php echo "<img src='images/".$row['Profile_img']."' id='photo' >"; }?>
  <input type="file" id="file" name="fileToUpload">

 
  <label for="file" id="uploadBtn">Choose Photo</label>
</div>


<script src="app.js"></script>
<form method="POST" action="register.php" enctype="multipart/form-data">
	<div class="group">
					<input type="submit" align=center value="DELETE IMAGE" name="delete">
				</div>	

</form>

				<div class="group">
					<label for="pass" class="label">FirstName:</label>
					<input  id="pass"  name="FirstName" type="text" class="input" data-type="text" value=<?php echo $_FirstName;?>>
				</div>
				<div class="group">
					<label for="pass" class="label">LastName:</label>
					<input  id="pass"  name="LastName" type="text" class="input" data-type="text" value=<?php echo $_LastName;?>>
				</div>

					
								<div class="group">
					<label for="pass" class="label"></label>
					<input id="pass"  name="Email" type="hidden" class="input" data-type="Email" value=<?php echo $_Email;?>>
				</div>
			
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass"  name="password" type="password" class="input" data-type="password" value=<?php echo $_Password;?>>
				</div><div class="group">
					<label for="pass" class="label">Confirm Password:</label>
					<input id="pass"  name="confirmPassword" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<label for="pass" class="label">mobile number:</label>
					<input id="pass"  name="phoneNumber" type="phonenumber" class="input" data-type="int" value=<?php echo $_mobile;?>>
				</div>
				<div class="group">
					<input type="submit" class="button" value="UPDATE" name="update">
				</div>	
					
<div class="hr"></div>
</div>
</div>
</div>
</div>
</div>			
</form>
    </body>
</html>
