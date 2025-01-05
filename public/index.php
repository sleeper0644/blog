<?php
define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . "/public");
define("CORE", ROOT . "/core");
define("APP", ROOT . "/app");
define("CONTROLLERS", APP . "/controllers");
define("VIEWS", APP . "/views");
define("PATH", "http://stady.loc");

require CORE . "/func.php";

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'],'/');

if ($uri === "")
{
    require CONTROLLERS . "/index.php";
} elseif ($uri == "about")
{
    require CONTROLLERS . "/about.php";
}elseif ($uri == "post") {
    //require CONTROLLERS . "/about.php";
    dd('show post');
} else {
    abort();
}


