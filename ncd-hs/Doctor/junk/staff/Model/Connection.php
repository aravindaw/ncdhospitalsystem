<?php
class Connection
{
    public function query($sql)
    {
        mysql_connect('localhost','root','') or die ("connection error". mysql_error());
        mysql_select_db('ncd-hs') or die ("database error". mysql_error());
        $results = mysql_query($sql);
        return $results;
    }
}

?>
