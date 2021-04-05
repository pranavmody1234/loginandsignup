<?php 
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","test");
	$sql = "INSERT INTO users (username, password, mobileno, address, dob) VALUES ('$_POST[userName]', '$_POST[password]', $_POST[phone], '$_POST[address]', $_POST[date])";
	if(mysqli_query($conn, $sql)){
    	$message = "You are signed up successfully";
	} else{
    	$message = "There was some error!";
	}
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<center>
 	<div>
 		<h1>Welcome to the Signup Page</h1><br>
 		<div class="message" style="color: red;"><?php if($message!="") { echo $message; } ?></div><br>
 		<form name="frmUser" method="post" action="">
 			<label for="username">Username:</label> <br><input type="text" id="userName" name="userName"><br><br>
 			<label for="password">Password</label><br> <input type="password" id="password" name="password"><br><br>
  			<label for="phone">Phone number:</label> <br><input type="text" id="phone" name="phone"><br><br>
 			<label for="address">Address</label><br> <input type="textbox" id="address" name="address"><br><br>
  			<label for="date">Date of Birth:</label><br> <input type="Date" id="date" name="date"><br><br>
  			<input type="submit" name="submit" value="Submit" class="btnSubmit"></td><br>
 		</form>
 		</div><br><br>
 		<button id="myButton">Back to Home</button>
	</div>
	</center>
	<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
    	location.href = "/index.php";
    };
</script>

 </body>
 </html>