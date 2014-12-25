<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact Information</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/account.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" title="stylsheet"  />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include 'common/admin_header.php'; ?>
    <form method="get" action="../Controller/member.php" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <th>
                Conntact informations <br> Phone: <br> +94 36 22 234 123 <br>  +94 36 22 234 124 <br>  +94 36 22 234 125
                <td>
            </th>
        </tr>
        <tr>
            <th>
                E-mail: <br> basehospital@slt.lk
            </th>
        </tr>
        <tr>
            <th>
                FAX: <br> +94 36 22 234 133
            </th>
        </tr>

        <br>
        <br>


        <tr>
            <td>
            View in Google map
            </td>
        </tr>
        <tr> <th>
            <!-- Map -->
    <div id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.lk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=base+hospital+avissawella&amp;aq=&amp;sll=6.829237,80.099398&amp;sspn=2.045218,2.438965&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=6.957085,80.207381&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>
        <br />
        <smalle>
            <a href="https://maps.google.lk/maps?q=base+hospital+avissawella&hl=en&sll=6.829237,80.099398&sspn=2.045218,2.438965&t=m&z=17&iwloc=A"></a>
        </smalle>
    </div>
    <!-- /Map -->

            </th></tr>
        <tr> <th>

        <ul id="drop-nav">
                                    <li><a href="../../Admin/View/member.php">Home</a></li>
                                    <li><a href="../../../ncd-hs/Index/View/logout.php">Log Out</a></li>
                                </ul>
            </th></tr>
    </table>
    </form>
<?php include 'common/admin_footer.php'; ?>
</body>
</html>