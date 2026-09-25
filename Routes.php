<?php
use App\Router;

Router::addRoute('/', function () {
  $title = 'World';
  $posts = [
    [
      'title' => 'Some World title 1',
      'date' => 'January 1, 2021',
      'author' => 'ants',
      'body' => 'Some World content 1',
    ],
    [
      'title' => 'Some World title 2',
      'date' => 'January 3, 2021',
      'author' => 'svenw',
      'body' => 'Some World content 2',
    ],
    [
      'title' => 'Some World title 3',
      'date' => 'January 5, 2021',
      'author' => 'mats',
      'body' => 'Some World content 3',
    ],
    [
      'title' => 'Some World title 4',
      'date' => 'January 7, 2021',
      'author' => 'ken',
      'body' => 'Some World content 4',
    ],
  ];
  include __DIR__ . '/views/index.php';
});
Router::addRoute('/us', function () {
  $title = 'U.S.';
  $posts = [
    [
      'title' => 'Some U.S title 1',
      'date' => 'January 1, 2021',
      'author' => 'svenw',
      'body' => 'Some U.S content 1',
    ],
    [
      'title' => 'Some U.S title 2',
      'date' => 'January 3, 2021',
      'author' => 'bloob',
      'body' => 'Some U.S content 2',
    ],
    [
      'title' => 'Some U.S title 3',
      'date' => 'January 5, 2021',
      'author' => 'slime',
      'body' => 'Some U.S content 3',
    ],
    [
      'title' => 'Some U.S title 4',
      'date' => 'January 7, 2021',
      'author' => 'meow :3',
      'body' => 'Some U.S content 4',
    ],
  ];
  include __DIR__ . '/views/us.php';
});
Router::addRoute('/technology', function () {
  $title = 'Technology';
  $posts = [
    [
      'title' => 'Some Technology title 1',
      'date' => 'January 1, 2021',
      'author' => 'bleh',
      'body' => 'Some Technology content 1',
    ],
    [
      'title' => 'Some Technology title 2',
      'date' => 'January 3, 2021',
      'author' => 'mats',
      'body' => 'Some Technology content 2',
    ],
    [
      'title' => 'Some Technology title 3',
      'date' => 'January 5, 2021',
      'author' => 'groob',
      'body' => 'Some Technology content 3',
    ],
    [
      'title' => 'Some Technology title 4',
      'date' => 'January 7, 2021',
      'author' => 'gobr',
      'body' => 'Some Technology content 4',
    ],
  ];
  include __DIR__ . '/views/technology.php';
});