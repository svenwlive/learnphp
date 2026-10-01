<?php include __DIR__ . '/partials/header.php'; ?>

  <main class="container"> 
    <form action="/form" method="POST">
      <label for="name">Name:</label>
      <input name="name" type="text" id="name" placeholder="Name">
      <label for="age">Age:</label>
      <input name="age" type="text" id="age" placeholder="Age">
      <input type="submit" value="Send">
      <input type="reset" value="Reset">
      <button>Submit</button>
    </form>
  </main>

<?php include __DIR__ . '/partials/footer.php'; ?>