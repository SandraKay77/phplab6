<?php

require_once ('includes/login_constants.php');
?>

<!doctype html>
<html lang="en">
<head>
    <title>
        User Registration and Login
    </title>
    <link rel="stylesheet" type="text/css" href="includes/login.css.php">

</head>
<body>
<div id="login_block">
    <form method="post" action="login.php">
        <table class="login_table">
            <tr>
                <th colspan="2">Login to Your Account</th>
            </tr>
            <tr>
                <th>Username:</th><td>input type="text" name="<?php echo USERNAME_KEY; ?>"</td></tr>
            <tr>
                <th>Password:</th><td>input type="password" name="<?php echo PASSWORD_KEY; ?>"</td>
            </tr>
            <tr><td colspan="2"><input type="submit" name="LOGIN"></td> </tr>
        </table>
    </form>
</div>
</body>
</html>
