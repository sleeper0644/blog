<?php
define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . "/public");
define("CORE", ROOT . "/core");
define("APP", ROOT . "/app");
define("CONTROLLERS", APP . "/controllers");
define("VIEWS", APP . "/views");
define("PATH", "http://stady.loc");

require CORE . "/func.php";

require CONTROLLERS . "/index.php";
