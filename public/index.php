<?php

use classes\Db;

require dirname(__DIR__). '/config/config.php';

require CORE . "/func.php";

require CORE . "/classes/Db.php";

$db_config = require CONFIG . "/db.php";

$db = new Db($db_config);



require CORE . "/router.php";



