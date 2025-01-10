<?php

use classes\Db;

require dirname(__DIR__). '/config/config.php';

require CORE . "/func.php";

require CORE . "/classes/Db.php";

$db_config = require CONFIG . "/db.php";

$db = (Db::getInstance())->getConnection($db_config);
//dd($db);



require CORE . "/router.php";



