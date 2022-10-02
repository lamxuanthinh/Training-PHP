<?php
$db_user = 'root';
$db_password ='';
$db_name = 'phprest';
$db = new PDO( "mysql: host=127 .0.0.1; dbname= '. $db_name. '; charset=utf8 ',$db_user, $db_password) ;
I/set some db attributes
$db->setAttribute (PDO::ATTR_EMULATE_PREPARES, false) ;
$db->setAttribute (PD0::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$db->setAttribute (PD0::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
define ApP NAME", "PHP REST API TUTORIAL ")
?>