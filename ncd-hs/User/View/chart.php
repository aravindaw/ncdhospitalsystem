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
                        text: 'Month,Date'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Patient attendance(x1000)'
                    },
                    min: 0
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x:%e. %b}: {point.y:.2f}x1000'
                },

                series: [
                    {
                        name: 'Year 2011-2012',
                        // Define the data points. All series have a dummy year
                        // of 2011/71 in order to be compared on the same x axis. Note
                        // that in JavaScript, months start at 0 for January, 1 for February etc.
                        data: [
                            [Date.UTC(2011, 9, 27), 0   ],
                            [Date.UTC(2011, 10, 10), 0.6 ],
                            [Date.UTC(2011, 10, 18), 0.7 ],
                            [Date.UTC(2011, 11, 2), 0.8 ],
                            [Date.UTC(2011, 11, 9), 0.6 ],
                            [Date.UTC(2011, 11, 16), 0.6 ],
                            [Date.UTC(2011, 11, 28), 0.67],
                            [Date.UTC(2012, 0, 1), 0.81],
                            [Date.UTC(2012, 0, 8), 0.78],
                            [Date.UTC(2012, 0, 12), 0.98],
                            [Date.UTC(2012, 0, 27), 1.84],
                            [Date.UTC(2012, 1, 10), 1.80],
                            [Date.UTC(2012, 1, 18), 1.80],
                            [Date.UTC(2012, 1, 24), 1.92],
                            [Date.UTC(2012, 2, 4), 2.49],
                            [Date.UTC(2012, 2, 11), 2.79],
                            [Date.UTC(2012, 2, 15), 2.73],
                            [Date.UTC(2012, 2, 25), 2.61],
                            [Date.UTC(2012, 3, 2), 2.76],
                            [Date.UTC(2012, 3, 6), 2.82],
                            [Date.UTC(2012, 3, 13), 2.8 ],
                            [Date.UTC(2012, 4, 3), 2.1 ],
                            [Date.UTC(2012, 4, 26), 1.1 ],
                            [Date.UTC(2012, 5, 9), 0.25],
                            [Date.UTC(2012, 5, 12), 0   ]
                        ]
                    },
                    {
                        name: 'year 2012-2013',
                        data: [
                            [Date.UTC(2011, 9, 18), 0   ],
                            [Date.UTC(2011, 9, 26), 0.2 ],
                            [Date.UTC(2011, 11, 1), 0.47],
                            [Date.UTC(2011, 11, 11), 0.55],
                            [Date.UTC(2011, 11, 25), 1.38],
                            [Date.UTC(2012, 0, 8), 1.38],
                            [Date.UTC(2012, 0, 15), 1.38],
                            [Date.UTC(2012, 1, 1), 1.38],
                            [Date.UTC(2012, 1, 8), 1.48],
                            [Date.UTC(2012, 1, 21), 1.5 ],
                            [Date.UTC(2012, 2, 12), 1.89],
                            [Date.UTC(2012, 2, 25), 2.0 ],
                            [Date.UTC(2012, 3, 4), 1.94],
                            [Date.UTC(2012, 3, 9), 1.91],
                            [Date.UTC(2012, 3, 13), 1.75],
                            [Date.UTC(2012, 3, 19), 1.6 ],
                            [Date.UTC(2012, 4, 25), 0.6 ],
                            [Date.UTC(2012, 4, 31), 0.35],
                            [Date.UTC(2012, 5, 7), 0   ]
                        ]
                    },
                    {
                        name: 'Year 2013-2014',
                        data: [
                            [Date.UTC(2011, 9, 9), 0   ],
                            [Date.UTC(2011, 9, 14), 0.15],
                            [Date.UTC(2011, 10, 28), 0.35],
                            [Date.UTC(2011, 11, 12), 0.46],
                            [Date.UTC(2012, 0, 1), 0.59],
                            [Date.UTC(2012, 0, 24), 0.58],
                            [Date.UTC(2012, 1, 1), 0.62],
                            [Date.UTC(2012, 1, 7), 0.65],
                            [Date.UTC(2012, 1, 23), 0.77],
                            [Date.UTC(2012, 2, 8), 0.77],
                            [Date.UTC(2012, 2, 14), 0.79],
                            [Date.UTC(2012, 2, 24), 0.86],
                            [Date.UTC(2012, 3, 4), 0.8 ],
                            [Date.UTC(2012, 3, 18), 0.94],
                            [Date.UTC(2012, 3, 24), 0.9 ],
                            [Date.UTC(2012, 4, 16), 0.39],
                            [Date.UTC(2012, 4, 21), 0   ]
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

