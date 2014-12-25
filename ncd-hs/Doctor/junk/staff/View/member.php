<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/account.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" title="stylsheet"  />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require_once 'common/admin_header.php'; ?>
<div id="contentWrapper">
  <div id="content">
      <?php
        echo "Hello ".$_SESSION['cur_name'];
    echo "<br>";
    echo "Your logged in as ".$_SESSION['role_type'];
      ?>
  </div>
</div>
 <?php require_once 'common/admin_footer.php'; ?>
</body>
</html>