<?php
/**
 * Created by PhpStorm.
 * User: rudinAS
 * Date: 03.06.2016
 * Time: 8:00
 */

$f3 = require(__DIR__."/lib/base.php");
$f3->set("DB", new Db\SQL("mysql:host=localhost;dbname=mysql;charset=utf8", "root", ""));
$f3->set("AUTOLOAD", "app/;classes/;actions/;models/;");
$f3->set("root", __DIR__);
$f3->set("LOGS", __DIR__."/logs/");
$f3->set("UI", __DIR__."/ui/");

$f3->set("GET /", "main->index");
$f3->run();
