<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_rentz = "localhost";
$database_rentz = "rentz";
$username_rentz = "root";
$password_rentz = "";
$rentz = mysql_pconnect($hostname_rentz, $username_rentz, $password_rentz) or trigger_error(mysql_error(),E_USER_ERROR); 
?>