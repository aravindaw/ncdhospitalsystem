<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title></title>
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/account.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" title="stylsheet"/>
    <link href="css/layout.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/styles.css"/>

    <style>
        .btn1 {
            width: 100px;
            position: relative;
            line-height: 50px;
        }

        .notification {
            position: absolute;
            right: -7px;
            top: -7px;
            background-color: red;
            line-height: 20px;
            width: 20px;
            height: 20px;
            border-radius: 10px;
        }
    </style>

</head>
<body>
<?php require_once 'common/admin_header.php'; ?>
<div id="contentWrapper" align="right">
    <div id="content">
        <?php
        echo "Hello " . $_SESSION['cur_name'];
        echo "<br>";
        echo "Your logged in as " . $_SESSION['role_type'];
        ?>

        <?php
        require_once '../Model/email.php';
        $obj_email = new email();
        $email = $obj_email->email_count();
        ?>
    </div>
</div>

<div style="width:100%;">
    <div style="float:left; width:300px;">
        <table align="right">

            <tr>
                <td>
                    <link href='css/btn.css' rel='stylesheet' type='text/css'></link>
                    <a href="../view/view_members.php" class="button">
                        <span>View Users</span>
                    </a>

                </td>
            </tr>
            <tr>
                <td>

                    <link href='css/btn.css' rel='stylesheet' type='text/css'></link>
                    <a href="view_patients.php" class="button">
                        <span>View Patients</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>

                    <link href='css/btn.css' rel='stylesheet' type='text/css'></link>
                    <a href="view_patient_notes.php" class="button">
                        <span>View Patient nt</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>

                    <link href='css/btn.css' rel='stylesheet' type='text/css'></link>
                    <a href="view_wrk_sch.php" class="button">
                        <span>Work Schedules</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>

                    <link href='css/btn.css' rel='stylesheet' type='text/css'></link>
                    <a href="patient_data.php" class="button">
                        <span>Add Patient</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>

                    <link href='css/btn.css' rel='stylesheet' type='text/css'></link>
                    <a href="new_patient_note.php" class="button">
                        <span>New Clinic Nt</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <link href='css/btn.css' rel='stylesheet' type='text/css'></link>
                    <a href="new_wrk_sch.php" class="button">
                        <span>New Wrk Sch</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <link href='css/btn.css' rel='stylesheet' type='text/css'></link>
                    <a href="chart.php" class="button">
                        <span>Year Report</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <link href='css/btn.css' rel='stylesheet' type='text/css'></link>
                    <a href="email_notification_request.php" class="button">
                        <span>Send monthly mail</span>
                    </a>
                </td>
            </tr>
        </table>
    </div>

    <div style="float:left; width:910px;">
        <div align="right">
            <button class="btn1" style="height: 40px; width: 80px;"><a
                    href="email_notification_html.php">Notification</a>

                <div class="notification"><?php echo $email; ?></div>
            </button>
        </div>


        <section id="slideshow">


            <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
            <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>

            <div class="container">
                <div class="c_slider"></div>
                <div class="slider">
                    <figure><img src="images/img/dummy-640x310-1.jpg" alt="" width="640" height="310"/>
                        <figcaption>The mirror of soul</figcaption>
                    </figure>
                    <figure><img src="images/img/dummy-640x310-2.jpg" alt="" width="640" height="310"/>
                        <figcaption>Let's cross that bridge when we come to it</figcaption>
                    </figure>
                    <figure><img src="images/img/dummy-640x310-3.jpg" alt="" width="640" height="310"/>
                        <figcaption>Sushi<em>(do)</em> time</figcaption>
                    </figure>
                    <figure><img src="images/img/dummy-640x310-4.jpg" alt="" width="640" height="310"/>
                        <figcaption>Waking Life</figcaption>
                    </figure>
                </div>
            </div>

            <span id="timeline"></span>

        </section>

        <section id="main" role="main">
            <p class="download">
                <a href="dwnld_ptnt_nts_excel.php"><span class="arrow">&#8681;</span> Download full patient notes<span
                        class="file">as .xls formay</span></a>
            </p>
        </section>
        <section id="main" role="main">
            <p class="download">
                <a href="dwnld_wrk_sch_excel.php"><span class="arrow">&#8681;</span> Download work schedule<span
                        class="file">as .xls formay</span></a>
            </p>
        </section>
        <section id="main" role="main">
            <p class="download">
                <a href="dwnld_user_dtils_excel.php"><span class="arrow">&#8681;</span> Download user Details<span
                        class="file">as .xls formay</span></a>
            </p>
        </section>

    </div>
</div>
<?php require_once 'common/admin_footer.php'; ?>
</body>
</html>