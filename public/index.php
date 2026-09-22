<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
  return false;
}

function dump(...$values) {
  echo '<pre>';
  var_dump(...$values);
  echo '</pre>';
}

switch ($_SERVER['REQUEST_URI']) {
  case '/':
    include __DIR__ . '/../views/index.php';
    break;
  case '/us':
    include __DIR__ . '/../views/us.php';
    break;
  default:
    echo '<p style="text-align: center; font-weight: bold; font-size: 48px;">404</p>';
    echo '<br>';
    echo '<img src=404.jpg style="width: 35%; height: auto; align: center; display: block; margin-left: auto; margin-right: auto;">';
}