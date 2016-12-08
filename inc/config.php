<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define("DB_Host", "localhost");
define("DB_Name", "sikes");
define("DB_User", "root");
define("DB_Pass", "");

$conn = mysql_connect(DB_Host, DB_User, DB_Pass);
$db = mysql_select_db(DB_Name, $conn);
if(!$conn) {header("location: error-page/e.conn.php"); exit();}
if(!$db) {header("location: error-page/e.db.php");exit();}