<?php
require_once '../Model/authores.php';

if(isset($_POST['authors']) && $_POST['authors'] != '' )
{
    $publisher = $_POST['publisher'];
    $obj_authors = new Authors();
    $results = $obj_authors->getAuthersById($publisher);
    while ($row = mysql_fetch_assoc($results)) {
        $data[] = $row;
    }
    echo json_encode($data);
}
?>
