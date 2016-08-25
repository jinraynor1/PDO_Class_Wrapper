<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

use Dbwrapper\PdoWrapper as PdoWrapper;
use Dbwrapper\PdoHelper as PdoHelper;

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

// Example -1

// where condition array
$aWhere = array('age'=>35);
// call update function
$q = $db->delete('test', $aWhere)->showQuery()->affectedRows();
// print affected rows
PDOHelper::PA($q);


// Example -2

// where condition array
$aWhere = array('age'=>45, 'first_name'=> 'Sonu');
// call update function
$q = $db->delete('test', $aWhere)->showQuery()->affectedRows();
// print affected rows
PDOHelper::PA($q);