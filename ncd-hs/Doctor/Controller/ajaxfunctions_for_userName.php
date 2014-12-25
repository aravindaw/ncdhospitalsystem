
<?php
require_once '../Model/member.php';

$user_name = $_GET['user_name'];

if (isset($user_name)) {
    $obj = new member();
    $results = $obj->getUserNameByName($user_name);
    echo $results;
}
?>