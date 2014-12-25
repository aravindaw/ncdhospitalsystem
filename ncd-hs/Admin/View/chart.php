<?php
$make_connection = mysqli_connect("localhost", "root", "", "patientdb");
$result = mysqli_query($make_connection, "select * from patient_attendance12");
$row = mysqli_fetch_array($result);
//print_r($row);

$result2 = mysqli_query($make_connection, "select * from patient_attendance13");
$row2 = mysqli_fetch_array($result2);

$result3 = mysqli_query($make_connection, "select * from patient_attendance14");
$row3 = mysqli_fetch_array($result3);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/account.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" title="stylsheet"/>
    <link href="css/layout.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/styles.css"/>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Year report</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="facebox/facebox.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="js/exporting.js"></script>
    <script type="text/javascript" charset="utf-8">

        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'NCD clinic patient attendance'
                },
                subtitle: {
                    text: 'Year report'
                },
                xAxis: {
                    type: 'datetime',
                    dateTimeLabelFormats: { // don't display the dummy year
                        month: '%e. %b',
                            year: '%b'
                    },
                    title: {
                        text: 'Date'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Patient attendance(x100)'
                    },
                    min: 0
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x:%e. %b}: {point.y:.2f}x1000'
                },


                series: [
                    {
                        name: 'Year 2012',
                        // Define the data points. All series have a dummy year
                        // of 2011/71 in order to be compared on the same x axis. Note
                        // that in JavaScript, months start at 0 for January, 1 for February etc.
                        data: [

                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                            [Date.UTC(<?php echo $row['yymmdd']?>), <?php echo $row['patient_count']?>   ],
                            <?php
                            }
                            ?>
                        ]
                    },
                    {
                        name: 'year 2013',
                        data: [
                            <?php
                            while ($row2 = mysqli_fetch_array($result2)) {
                            ?>
                            [Date.UTC(<?php echo $row2['yymmdd']?>), <?php echo $row2['patient_count']?>   ],
                            <?php
                            }
                            ?>
                        ]
                    },
                    {
                        name: 'Year 2014',
                        data: [
                            <?php
                            while ($row3 = mysqli_fetch_array($result3)) {
                            ?>
                            [Date.UTC(<?php echo $row3['yymmdd']?>), <?php echo $row3['patient_count']?>   ],
                            <?php
                            }
                            ?>
                        ]
                    }
                ]
            });
        });


    </script>
</head>
<body>
<?php require_once 'common/admin_header.php'; ?>
<div id="contentWrapper">
    <div id="content">
        <table>

            <div id="container" style="min-width: 310px; height: 480px; margin: 0 auto"></div>

        </table>
    </div>
</div>
<?php require_once 'common/admin_footer.php'; ?>
</body>
</html>