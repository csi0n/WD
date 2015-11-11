<?php
header('Content-Type:text/html; charset=utf-8');
error_reporting(E_ALL & ~E_NOTICE);

define('DB_HOST', '');
define('DB_USER', '');
define('DB_PWD', '');
define('DB_NAME', '');
define('DB_PREFIX', 'c_');

$conn = @mysql_connect(DB_HOST, DB_USER, DB_PWD) or die('数据库链接失败：' . mysql_error());

@mysql_select_db(DB_NAME) or die('数据库错误：' . mysql_error());

@mysql_query('SET NAMES UTF8') or die('字符集错误：' . mysql_error());
?>