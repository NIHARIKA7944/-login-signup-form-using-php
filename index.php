<!DOCTYPE.html>
<html>
<head>
	<title>
		web chat
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
		<div id ="info">
			<h2> Login here </h2>
			<form action ="login.php" method="post">
			<lable> <b> Username</b></lable> 
			<input type="text" name="uname" placeholder="user name"></br></br>
			<lable> <b>Password </b></lable> 
			<input type="text" name="pass" placeholder="password"></br></br>
		    <button style="background-color:#FF0000;color: white;"type="submit" > <b>Login </b>
            </button> 
			<form action="signup.php" method="post">
			<h2>Dont have an account sign up here </h2>
			<lable> <b>username:</b> </lable>
			<input type="text" name="uname" placeholder="Username"><br> <br>
			<lable><b> email add</b> </lable>
			<input type="text" name="Email" placeholder="Email"><br> <br>

		    <lable><b>password:</b></lable>
		    <input type="text" name="Password" placeholder="Password"><br> <br>
            <button style="background-color:#FF0000;color: white;"type="submit"> <b> Signup</b>
             </button>
                </form>
	   </div>
	</div>
</body>
</html>
