<?php

$connect = mysql_connect("localhost", "gemmovem_GC", "gemmovem_GC");
mysql_select_db("gemmovem_GC",$connect)
or die (mysql_error());

?>