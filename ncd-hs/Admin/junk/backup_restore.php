<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'backup') {
        if (!is_dir('backups/')) {
            mkdir('backups');
        }

        $backup = 'backups\Clinic_data_' . date('Y') . '_' . date('m') . '_' . date('d') . '.sql';
        /*
         * for XAMPP
         */

        $cmd = 'C:\xampp\mysql\bin\mysqldump -uroot  ncd-hs > ' . $backup;
        /*
         * for WAMP
         *  $cmd="C:\wamp\bin\mysql\mysql5.5.16\bin\mysqldump -uroot -p -ncd-hs > $backup";
         */

        try {
            system($cmd);
            $error = false;
            $message ['error'] = false;
            $message ['message'] = 'Backup successfuly downloaded to ' . $backup . '';
            $msg_bk = "<b>Backup successfuly downloaded to <br/> '.$backup.'</b>";
        } catch (PDOExceptions $e) {
            $error = true;
            $message ['error'] = true;
            $message ['message'] = $e->getMessage();
            print_r($e->getMessage());
        }
    } else if ($_GET['action'] == 'restore') {
        $fname = 'backups/' . date('Y-m-d') . '_' . $_FILES['backup']['name'];
        $file_name = $_FILES['backup']['name'];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if (isset($ext) && $ext == 'sql') {
            move_uploaded_file($_FILES['backup']['tmp_name'], $fname);
            $cmd = 'C:\xampp\mysql\bin\mysql.exe -uroot  ncd-hs <' . $fname;

            try {
                exec($cmd);
                $error = false;
                $message['error'] = false;
                $message['message'] = 'Restore Successfuly Completed';
                $msg_restore = "<b>Database has been restored Successfuly</b>";
            } catch (PDOException $e) {
                $eror = true;
                $message['error'] = true;
                $message['message'] = $e->getMessage();
                print_r($e->getMessage());
            }
        } else {
            $msg_restore = "<b>The file format you chose is invalid</b>";
        }
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Backup & Restore</title>
        <link href="../View/css/main.css" rel="stylesheet" type="text/css" />
        <link href="../View/css/account.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../View/css/style.css" type="text/css" media="all" title="stylsheet"  />
        <link href="../View/css/layout.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include 'common/admin_header.php'; ?>
        <div id="contentWrapper">
            <div id="content">
                <h1>admin | login </h1>
                <fieldset>
                    <legend>Admin | Backup</legend>
                    <form name="backup" method="post" action="backup_restore.php?action=backup" enctype="multipart/formdata">
                        <table border=0 align="center">
                            <tr>
                                <td width="52%">In order to take a backup of the current database click here</td>
                                <td width="10%"> &nbsp;&nbsp;<input type="submit" name="submit" value="Backup"></input></td>
                                <td>
                                    <?php
                                    if (isset($msg_bk)) {
                                        echo $msg_bk;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
                <fieldset>
                    <legend>Restore</legend>
                    <form name="restore" method ="post" action="backup_restore.php?action=restore" enctype="multipart/form-data">
                        <table border="0" align="center">
                            <tr>
                                <td width ="25%">Select a backup file :</td>
                                <td colspan="2"><input type="file" name="backup"/></td>
                                <td width="45%" align="center" rowspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center">
                                    <input type="submit" value="Restore"/>
                                </td>
                                <td>
                                    <?php
                                    if (isset($msg_restore)) {
                                        echo $msg_restore;
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
        </div>
        <?php include 'common/admin_footer.php'; ?>
    </body>
</html>