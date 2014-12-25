<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ADMIN</title>
<link href="../View/css/main.css" rel="stylesheet" type="text/css" />
<link href="../View/css/account.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../View/css/style.css" type="text/css" media="all" title="stylsheet"  />
<link href="../View/css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include 'common/admin_header.php'; ?>
    <form method="get" action="../Controller/member.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Add Role</td>
            <td> <input type="text" name="new_role"> </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="action" value="role_add" />
                <input type="submit" value="Submit"/>
            </td>
        </tr>

    </table>
    </form>




<?php include 'common/admin_footer.php'; ?>
</body>
</html>