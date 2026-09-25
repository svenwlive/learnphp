<?php

use App\Router;

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
  return false;
}

function dump(...$values)
{
  echo '<pre>';
  var_dump(...$values);
  echo '</pre>';
}

spl_autoload_register(function ($class) {
  $class = substr($class, strlen('App\\'));
  $class = str_replace('\\', '/', $class);
  require_once __DIR__ . "/../src/$class.php";
});

require __DIR__ . '/../Routes.php';

$router = new Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match) {
  call_user_func($match->getAction());
} else {
  echo '<p style="text-align: center; font-weight: bold; font-size: 48px;">404</p>';
  echo '<br>';
  echo '<img src=404.jpg style="width: 35%; height: auto; align: center; display: block; margin-left: auto; margin-right: auto;">';
}