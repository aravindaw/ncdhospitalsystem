<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>GOOD BYE</title>
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/account.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" title="stylsheet"/>
    <link href="css/layout.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div align="center">

    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>

    <td colspan="1">
        <hr>
    </td>


    <table align="center">
        <h1>
            Good Bye
            <?php echo $_SESSION['cur_name'] . '..!!!'; ?>
        </h1>

</div>
<br>

<div align="center">
    <br>
    go to the,
    <h1>
        <a href="../../../../front_page">Main Page</a>
    </h1>
</div>
<div>
    <h1>
        <a href="../../index/view/Login.php">User Login</a>
    </h1>
</div>
<div>
    <br><br>
</div>
<div>
    <td>
        <a href="#"><img src="images/logo.png"/></a>
    </td>
    </table>
</div>
<?php include 'common/admin_footer.php'; ?>
</body>
<?php
session_destroy();
?>
</html>