<?php
$title = 'U.S';
$posts = [
  [
    'title' => 'Some U.S title 1',
    'date' => 'January 1, 2021',
    'author' => 'gob',
    'body' => 'Some U.S content 1',
  ],
  [
    'title' => 'Some U.S title 2',
    'date' => 'January 3, 2021',
    'author' => 'goobs',
    'body' => 'Some U.S content 2',
  ],
  [
    'title' => 'Some U.S title 3',
    'date' => 'January 5, 2021',
    'author' => 'meowser',
    'body' => 'Some U.S content 3',
  ],
  [
    'title' => 'Some U.S title 4',
    'date' => 'January 7, 2021',
    'author' => 'goob',
    'body' => 'Some U.S content 4',
  ],
];


?>

<?php include __DIR__ . '/partials/header.php'; ?>

  <main class="container"> 

      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>