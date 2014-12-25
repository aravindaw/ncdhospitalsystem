
<?php
require_once '../Model/member.php';

$user_id = $_GET['user_id'];

if (isset($user_id)) {
    $obj = new member();
    $results = $obj->getUserNameByID($user_id);
    echo $results;
}
?>