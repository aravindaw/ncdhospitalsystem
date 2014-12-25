<?php

require_once 'Connection.php';

class wrk_sch
{

    public function get_wrk_sch()
    {
        $sql = "SELECT * FROM work_schedule";
        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }

    public function add_wrk_sch($user_id, $schedule, $date_time, $attendance)
    {
        $sql = "INSERT INTO work_schedule VALUES (null , '$user_id', '$schedule', '$date_time', '$attendance')";
        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }

    Public function get_wrk_sch_by_id($clinic_id)
    {
        $sql = "SELECT *
        FROM work_schedule
        WHERE clinic_id='$clinic_id'";
        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }

    Public function update_wrk_sch($user_id, $schedule, $date_time, $attendance, $clinic_id)
    {

        $sql = "UPDATE work_schedule
        SET user_id='$user_id', schedule='$schedule',  date_time='$date_time', attendance='$attendance'
        WHERE clinic_id= '$clinic_id'";

        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }

    Public function delete_wrk_sch($clinic_id) {
        $sql = "DELETE FROM work_schedule WHERE clinic_id='$clinic_id'";
        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }
}