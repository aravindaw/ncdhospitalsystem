<?php
require_once '../model/publishers.php';
$obj_publisher = new Publisher();
$publishers = $obj_publisher->getAllPublishers();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title></title>
    <style type="text/css" title="currentStyle">
        @import "css/main.css";
        @import "css/layout.css";
        @import "css/account.css";
        @import "css/style.css";
        @import "css/custom-theme/jquery-ui-1.9.2.custom.css";
        @import "css/validationEngine.jquery.css";
    </style>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.1.custom.js"></script>
    <script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="js/jquery.validationEngine.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $("#add_member").validationEngine({
                'custom_error_messages': {
                    '#title': {
                        'required': {'message': "Enter the Book Title"}
                    },
                    '#isbn': {
                        'required': {'message': "Enter the ISBN"}
                    },
                    '#date': {
                        'required': {'message': "Select Published date"}
                    },
                    '#price': {
                        'required': {'message': "Enter Book Price"}
                    },
                    '#publisher': {
                        'required': {'message': "Select Publisher"}
                    },
                    '#author': {
                        'required': {'message': "Select an Author"}
                    },
                    '#pic': {
                        'required': {'message': "Upload an Image file"}
                    }

                }
            })

        });

        $(function () {
            $("#date").datepicker({
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    showOn: "both",
                    buttonImage: "images/calendar.png",
                    buttonImageOnly: true,
                    buttonText: "Calender",
                    maxDate: '0'
//        minDate:'0'
                }
            )
        });

        function getAuthores(publisher_id) {
            $('#author').html('');
            $.ajax({
                url: "../Controller/ajaxfunctions.php",
                type: "POST",
                cache: false,
                data: {authors: true, publisher: publisher_id },
                success: function (theResponse) {
                    var authors = $.parseJSON(theResponse);
                    $.each(authors, function (i, val) {
                        $('#author').append("<option value=" + val.author_id + ">" + val.author_name + "</option>");
                    });
                }
            })
        }
    </script>
</head>
<body>
<?php require_once 'common/admin_header.php'; ?>
<div id="contentWrapper">
    <div id="content">
        <form method="post" action="../controller/member.php" enctype="multipart/form-data" id="add_member"
              onsubmit="chk_login_info();">
            <table align="center" id="personal_info">
                <th align="center">Add Books</th>
                <tr>
                    <td>Title :</td>
                    <td><input type="text" name="fname" id="title" data-validation-engine="validate[required]"/></td>
                </tr>
                <tr>
                    <td>ISBN :</td>
                    <td><input type="text" name="lname" id="isbn" data-validation-engine="validate[required]"/></td>
                </tr>
                <tr>
                    <td>Price :</td>
                    <td><input type="text" name="dob" id="price" data-validation-engine="validate[required]"/></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><input type="text" name="email" id="description"/></td>
                </tr>
                <tr>
                    <td>Date Published:</td>
                    <td><input type="text" name="phone" id="date" data-validation-engine="validate[required]"/></td>
                </tr>
                <tr>
                    <td>Publisher:</td>
                    <td>
                        <select name="publisher" id="publisher" onchange="getAuthores(this.value);"
                                data-validation-engine="validate[required]">
                            <option>Select</option>
                            <?php
                            while ($publisher = mysql_fetch_array($publishers)) {
                                ?>
                                <option
                                    value="<?php echo $publisher['publisher_id']; ?>"><?php echo $publisher['publisher_name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Author:</td>
                    <td>
                        <select name="author" id="author" data-validation-engine="validate[required]"></select>
                    </td>
                </tr>

                <tr>
                    <td>Image:</td>
                    <td><input type="file" name="pic" id="pic" data-validation-engine="validate[required]"/></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <input type="hidden" name="action" value="save_member"/>
                        <input type="submit" name="submit" id="submit" value="Add"/>
                        <input type="reset" name="reset" id="reset" value="Clear"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php require_once 'common/admin_footer.php'; ?>
</body>
</html>
