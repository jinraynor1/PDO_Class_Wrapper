<?php
require_once dirname(__DIR__).'/vendor/autoload.php';

use Jinraynor1\DbWrapper\PdoWrapper as PdoWrapper;
use Jinraynor1\DbWrapper\PdoHelper as PdoHelper;

// database connection setings
$dbConfig = array("host"=>"localhost", "dbname"=>'sampledb', "username"=>'root', "password"=>'');
// get instance of PDO Wrapper object
$db = new PdoWrapper("mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']}",
    $dbConfig['username'],$dbConfig['password'],array(
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));

// get instance of PDO Helper object
$helper = new PDOHelper();

// set error log mode true to show error on screen or false to log in log file
$db->setErrorLog(true);

// select query with limit
$q = $db->pdoQuery('select * from customers;')->results();
// print array result
$helper->PA($q);

// select query with limit
$q = $db->pdoQuery('select * from customers;')->results('xml');
// print xml result
echo $q;

// select query with limit
$q = $db->pdoQuery('select * from customers;')->results('json');
// print json result
echo $q;