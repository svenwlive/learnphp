<?php
$title = 'World';
$posts =[
  [
    'title' => 'Some World title 1',
    'date' => 'Januray 1, 2021',
    'author' => 'goober',
    'body' => 'Some World content 1'
  ],
  [
    'title' => 'Some World title 2',
    'date' => 'Januray 2, 2021',
    'author' => 'goober',
    'body' => 'Some World content 2'
  ],
  [
    'title' => 'Some World title 3',
    'date' => 'Januray 3, 2021',
    'author' => 'goober',
    'body' => 'Some World content 3'
  ]
]
?>

<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <?php include __DIR__ . '/partials/hero.php'; ?>
  <?php include __DIR__ . '/partials/featured.php'; ?>

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