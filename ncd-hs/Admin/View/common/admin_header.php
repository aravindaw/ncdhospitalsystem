<div id="headerWrapper">
    <div class="header">
        <table width="100%">
            <tr>
                <td>
                    <a href="#"><img src="images/logo.png"/></a>
                </td>
                <td>


                    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                        <title>Untitled Document</title>

                        <style type="text/css">
                            ul.submenu {
                                list-style: none;
                                padding: 0px;
                                margin: 0px;
                                z-index: 999;
                            }

                            ul li {
                                display: block;
                                position: relative;
                                float: left;
                                border: 1px solid #000
                            }

                            li ul {
                                display: none;
                            }

                            ul li a {
                                display: block;
                                background: #000;
                                padding: 12px 20px 10px 20px;
                                text-decoration: none;
                                white-space: nowrap;
                                color: #fff;
                            }

                            ul li a:hover {
                                background: #f00;
                            }

                            li:hover ul {
                                display: block;
                                position: absolute;
                            }

                            li:hover li {
                                float: none;
                            }

                            li:hover a {
                                background: #f00;
                            }

                            li:hover li a:hover {
                                background: #000;
                            }

                            #drop-nav li ul li {
                                border-top: 0px;
                            }
                        </style>

                    </head>

                    <body>

                    <ul id="drop-nav">
                        <li><a href="member.php">Home</a></li>
                        <li><a href="#">Patients</a>
                            <ul class="submenu">
                                <li><a href="../view/patient_data.php">Add</a></li>
                                <li><a href="../view/view_patients.php">View/edit patient</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Channeling history</a>
                            <ul class="submenu">
                                <li><a href="../view/new_patient_note.php">Add</a></li>
                                <li><a href="../view/view_patient_notes.php">View/edit patient</a></li>
<!--                                <li><a href="../view/drug_list.php">Add Drug</a></li>-->
<!--                                <li><a href="../view/view_patient_notes.php">View drugs</a></li>-->
                            </ul>
                        </li>
                        <li><a href="#">Users</a>
                            <ul class="submenu">
                                <li><a href="../View/new_user.php">Add User</a></li>
                                <li><a href=../View/view_members.php>View/Update User</a></li>
                            </ul>
                        </li>
                        <li><a href="#">EMP Schedule</a>
                            <ul class="submenu">
                                <li><a href="../View/new_wrk_sch.php">Add</a></li>
                                <li><a href="../View/view_wrk_sch.php">View/Edit</a></li>
                                <li><a href="http://127.0.0.1:8000/simulator" target="_blank">SMS Alerts</a></li>
                            </ul>
                        <li><a href="#">Contact</a>
                            <ul class="submenu">
                                <li><a href="../../../ncd-hs/Index/View/contact_info.php">General Inquiries</a></li>
<!--                                <li><a href="../../../ncd-hs/Index/View/phone_num.php">phone numbers</a></li>-->
                            </ul>
                        </li>
                        <li><a href="../../../ncd-hs/Index/View/logout.php">Log Out</a></li>
                    </ul>


                    </body>
                    </html>
                </td>
                <!--                <td>
                                    <a href="../../Index/Controller/User.php?action=log_out"/>
                                    <input type ="button" value="Logout" align ="right"/>
                                </td>-->
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
</div>
