<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","test");
	$result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="float: right;">
	<form name="frmUser" method="post" action="">
		<input type="text" name="userName" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="submit" value="Login" class="btnSubmit"></td><br>
		<div class="message" style="color: red;"><?php if($message!="") { echo $message; } ?></div>
	</form>
	<br> Don't have an account yet? 
	<button id="myButton">Signup</button>
	</div>
	<br><br><br><br>
	<hr>

	<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
    	location.href = "/signup.php";
    };
</script>

</body>
</html>