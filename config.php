<?php

/*	database connection details
 ******************************/
$db['host'] = getenv("MYSQL_DB_HOSTNAME");
$db['user'] = getenv("MYSQL_DB_USERNAME");
$db['pass'] = getenv("MYSQL_DB_PASSWORD");
$db['name'] = getenv("MYSQL_DB_NAME");

/**
 * php debugging on/off
 *
 * true  = SHOW all php errors
 * false = HIDE all php errors
 ******************************/
$debugging = false;

/**
 *	BASE definition if phpipam
 * 	is not in root directory (e.g. /phpipam/)
 *
 *  Also change
 *	RewriteBase / in .htaccess
 ******************************/
define('BASE', "/");

?>
