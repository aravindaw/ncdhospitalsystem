<?php
/**
 * Created by IntelliJ IDEA.
 * User: aravindaweerasekara
 * Date: 11/8/14
 * Time: 11:08 AM
 * To change this template use File | Settings | File Templates.
 */

require_once 'Connection.php';

class date_form
{

    public function q1()
    {
        $sql = "SELECT MRNNumber FROM MRN WHERE MRNDATE='October'";
        $db = new Connection();
        $result = $db->query4($sql);
        return $result;
    }

    public function q2()
    {
        $sql = "SELECT MDN.MDNQTY, i.itemname
                FROM MRNDETAILS MDN
                INNER JOIN item i
                ON MDN.MDNITEMID=i.itemid
                INNER JOIN MRN
                ON MRN.MRNNumber=MDN.MRNNumber
                WHERE MRN.MRNDATE='October'";
        $db = new Connection();
        $result = $db->query4($sql);
        return $result;
    }

    public function q3()
    {
        $sql = "SELECT * FROM MRN WHERE MRN.MRNDATE='October'";
        $db = new Connection();
        $result = $db->query4($sql);
        return $result;
    }
    public function q4()
    {
        $sql = "SELECT MDN.MRNNumber, MDN.MDNQTY, i.itemname, MRN.MRNtotal
                FROM MRNDETAILS MDN
                INNER JOIN item i
                ON MDN.MDNITEMID = i.itemid
                INNER JOIN MRN
                ON MRN.MRNNumber = MDN.MRNNumber
                WHERE MRN.MRNDATE='October'";
        $db = new Connection();
        $result = $db->query4($sql);
        return $result;
    }

    public function q5()
    {
        $sql = "SELECT num FROM data_test LIMIT 1";
        $db = new Connection();
        $result = $db->query4($sql);
        return $result;
    }

    public function q6()
    {
        $sql = "SELECT num FROM data_test LIMIT 10,11";
        $db = new Connection();
        $result = $db->query4($sql);
        return $result;
    }
}