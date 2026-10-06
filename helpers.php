<?php

function dump(...$values)
{
  echo '<pre>';
  var_dump(...$values);
  echo '</pre>';
}

function view($viewName, $variables=[]) {
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}

function dd(...$values)
{
  dump(...$values);
  die();
}

function redirect($url) {
    header("Location: $url");
}