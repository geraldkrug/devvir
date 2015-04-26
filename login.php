<?php

// URL for auto login http://geraldkrug.mypressonline.com/cgi/OCR/login.php?username=test&password=test
//include("upgrade.php");
$username = stripslashes($_GET['username']);

$password = stripslashes($_GET['password']);

if ($username == "test") {
echo success;
}else{
exit("No username inputted exiting NOW");
}

?>

<form action="http://geraldkrug.mypressonline.com/cgi/OCR/authorize.php" method="post" name="login" id="form">
Username
<input type="text" name="username" value="<?php echo $username ?>">
Password
<input type="text" name="password" value="<?php echo $password ?>">

<script Xlanguage="JavaScript">

function Validate()

{

document.login.submit();

}

Validate();

</script>

</form>';

 





<html>
<center>
<action="http://geraldkrug.mypressonline.com/cgi/OCR/authorize.php" method="post" name="preval" id="preval">
Username
<input type="text" name="username">
Password
<input type="password" name="password">

<p><input type="submit" name="Login" value="Login">

			  
</body>
</html>
