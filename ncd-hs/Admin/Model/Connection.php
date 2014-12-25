<?php
class Connection
{
    public function query($sql)
    {
        mysql_connect('localhost','root','') or die ("connection error". mysql_error());
        mysql_select_db('ncdhs') or die ("database error". mysql_error());
        $results = mysql_query($sql);
        return $results;
    }
    
     public function query2($sql)
    {
        mysql_connect('localhost','root','') or die ("connection error". mysql_error());
        mysql_select_db('patientdb') or die ("database error". mysql_error());
        $results = mysql_query($sql);
        return $results;
    }

    public function query3($sql)
    {
        mysql_connect('localhost','root','') or die ("connection error". mysql_error());
        mysql_select_db('email_ntf') or die ("database error". mysql_error());
        $results = mysql_query($sql);
        return $results;
    }

    public function query4($sql)
    {
        mysql_connect('localhost','root','') or die ("connection error". mysql_error());
        mysql_select_db('TEST') or die ("database error". mysql_error());
        $results = mysql_query($sql);
        return $results;
    }


}

?>
