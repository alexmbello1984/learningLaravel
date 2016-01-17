<?php
require_once __DIR__ . './vendor/autoload.php';

use Illuminate\Http\Request;
use PlatziPHP\Http\Controllers\HomeController;

$request = Request::capture();
$controller = new HomeController();
echo $controller->index($request);
