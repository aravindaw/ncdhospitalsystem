<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ADMIN | Login</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/account.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" title="stylsheet"  />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include 'common/admin_header.php'; ?>
    <div id="contentWrapper">
        <div id="content"> 
            <div class="RegisterForm">
                <h1>admin | login </h1>
                <form action="../Controller/User.php" method='post' id="loginForm">
        <table>
            <tr>
                <td> Name:</td>
                <td> <input class="fieldInput" type='text' name="user_name" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input class="fieldInput" type='password' name="password"/></td>
            </tr>
            
            <tr align="center">
                <input type='hidden' name='action' value='login'/>
                <td colspan='2'><input type='submit' value='LOGIN' id="RegisterSingUp" name='login'/></td>
            </tr>
        </table>
    </form>
            </div>
        </div>
    </div>
    <?php include 'common/admin_footer.php'; ?>
</body>
</html>