<?php

require_once 'Connection.php';

class email
{

    public function add_email($receiver, $subject, $sender, $sendDate, $approved_by)
    {
        $sql = "INSERT INTO email_notf
            VALUES ('' ,'$sender', '$receiver', '$sendDate', '$approved_by', '$subject', 'no')";
        $db = new Connection();
        $result = $db->query3($sql);
        return $result;
    }

    public function get_emails()
    {
        $sql = "SELECT * FROM email_notf";
        $db = new Connection();
        $result = $db->query3($sql);
        return $result;
    }

    public function email_count()
    {
        $sql = "SELECT * FROM email_notf
        WHERE approval='no'";
        $db = new Connection();
        $result = $db->query3($sql);
        $emails = mysql_num_rows($result);
        return $emails;
    }

    public function update_approve($ID)
    {
        $sql = "UPDATE email_notf
        SET approval= 'yes'
        WHERE ID='$ID'";
        $db = new Connection();
        $db->query3($sql);

    }
}