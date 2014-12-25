<?php

require_once 'Connection.php';

class patient_att
{
    public function get_patients($month_id)
    {
        $sql = "SELECT * FROM patient_attendance12 WHERE ID='$month_id'";
        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }
}

