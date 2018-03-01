<?php
$con=mysql_connect("localhost","root");
mysql_select_db("sasi",$con);
$qry="insert into student values('14761A05B3','sasi')";
mysql_query($qry);
?>