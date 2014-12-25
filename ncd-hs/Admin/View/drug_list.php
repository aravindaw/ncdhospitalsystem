<?php
/**
 * Created by IntelliJ IDEA.
 * User: aravindaweerasekara
 * Date: 7/19/14
 * Time: 11:54 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Patient drugs</title>
    <link href="../View/css/main.css" rel="stylesheet" type="text/css"/>
    <link href="../View/css/account.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../View/css/style.css" type="text/css" media="all" title="stylsheet"/>
    <link href="../View/css/layout.css" rel="stylesheet" type="text/css"/>
    <script src="../View/js/jquery.js"></script>
    <script type="text/javascript">

        function addNewDrug() {
            $('#drug_list_tbl').append("<tr><td>Drug list</td>" +
                "<td><select style='width: 150px' name='drug' id='drug'>" +
                "<option value='paracetamol'>Paracetamol</option>" +
                "<option value='Amoxicillin'>Amoxicillin</option>" +
                "<option value='chloropheniramine'>Chloropheniramine</option>" +
                "<option value='betamethasone'>Betamethasone</option>" +
                "<option value='salmeterol'>Salmeterol</option>" +
                "<option value='cefuroxime'>Cefuroxime</option>" +
                "<option value='piperacillin'>Piperacillin</option>" +
                "</select></td>" +
                "<td style='width: 90px' align='right'>Time period</td>" +
                "<td><input type='checkbox' name='time_period1' value='morning'>Morning<br>" +
                "<input type='checkbox' name='time_period2' value='afternoon'>Afternoon<br>" +
                "<input type='checkbox' name='time_period3' value='evening'>Evening<br>" +
                "<input type='checkbox' name='time_period4' value='night'>Night<br></td>" +
                "<td style='width: 90px' align='right'>How much</td>" +
                "<td> <input type='text' name='count'/></td>" +
                "<td style='width: 90px' align='right'>Note</td><td><input type='text'></td></tr>" +
                " <tr><td colspan='10'><hr></td></tr>");
            $('#removeDrug').css('display', 'block');
        }

        function removeLastDrug() {
            var Count = $('#drug_list_tbl tr').length;
            if (Count > 2) {
                $('#drug_list_tbl tr:last').remove();
                if (Count == 4) {
                    $('#removeDrug').css('display', 'none');
                }
            }
        }


    </script>
</head>
<body>
<?php include 'common/admin_header.php'; ?>
<div id="contentWrapper">
    <div id="content">
        <form action="../Controller/insert.php" method="post" enctype="multipart/form-data" name="drug_list"
              id="drug_list">
            <table id="drug_list_tbl">
                <tr>
                    <td>
                        patient ID
                    </td>
                    <td>
                        <input type="text" id="patientID" name="patientID">
                    </td>
                </tr>
                <tr>
                    <td>
                        User ID
                    </td>
                    <td>
                        <input type="text" id="userID" name="userID">
                    </td>
                </tr>
                <tr>
                    <td>Drug list</td>
                    <td>
                        <select style='width: 150px' name="drug" id="drug">
                            <option value='paracetamol'>Paracetamol</option>
                            <option value='Amoxicillin'>Amoxicillin</option>
                            <option value='chloropheniramine'>Chloropheniramine</option>
                            <option value='betamethasone'>Betamethasone</option>
                            <option value='salmeterol'>Salmeterol</option>
                            <option value='cefuroxime'>Cefuroxime</option>
                            <option value='piperacillin'>Piperacillin</option>
                        </select>
                    </td>
                    <td style="width: 90px" align="right">Time period</td>
                    <td>
                        <input type="checkbox" name="time_period1" value="morning">Morning<br>
                        <input type="checkbox" name="time_period2" value="afternoon">Afternoon<br>
                        <input type="checkbox" name="time_period3" value="evening">Evening<br>
                        <input type="checkbox" name="time_period4" value="night">Night<br>
                    </td>
                    <td style="width: 90px" align="right">How much</td>
                    <td>
                        <input type='text' name='count' id="count"/>
                    </td>
                    <td style="width: 90px" align="right">Note</td>
                    <td>
                        <input type='text' name="note" id="note">
                    </td>
                    <td>
                        <span id="addDrug"><img onclick="addNewDrug();" src="../View/images/plus.png"/> </span>
                        <span id="removeDrug" style="display:none"><img onclick="removeLastDrug();"
                                                                        src="../View/images/Minus.png"/></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="10">
                        <hr>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td colspan="2" align="right">
                        <input type="hidden" name="action" value="drug_list"/>
                        <input type="submit" name="submit" value="Submit Drug List"/>
                    </td>
                </tr>
            </table>
        </form>
        <br/>
        <br/>
    </div>
</div>

<?php include 'common/admin_footer.php'; ?>
</body>
</html>