<?php

// URL for auto login http://php-gkrug.rhcloud.com?username=test&password=test
// // https://openshift.redhat.com/  created with github geraldkrug/app/index.php http://php-gkrug.rhcloud.com?username=test&password=test
//include("upgrade.php");  https://github.com/geraldkrug/app.git
$username = stripslashes($_GET['username']);

$password = stripslashes($_GET['password']);

if ($username == "test") {
echo success;
}else{
echo "or use API http://perl-gkrug.rhcloud.com?username=test&password=test";
//exit("No username inputted exiting NOW");
exit;
}

?>

<form action="http://devvir.com" method="post" name="login" id="form">
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
