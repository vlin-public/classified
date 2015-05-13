// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
<?php
session_start();
//if(!session_is_registered(myusername)){
if(isset($_SESSION['myusername'])) {
	header("location: main_login.php");
}
?>

<html>
<body>
<p>Login Successful</p>
</body>
</html>