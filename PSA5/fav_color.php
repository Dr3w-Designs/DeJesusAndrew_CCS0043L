<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Color - De Jesus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="page-shell">
    <form method="post" action="color_results.php" class="form-card">
      <h1>Favorite Colors</h1>
      <p class="subtitle">Enter five colors and see them reflected in the results page.</p>

      <label>
        Color 1
        <input type="text" name="c1" placeholder="e.g. red or #ff0000">
      </label>

      <label>
        Color 2
        <input type="text" name="c2" placeholder="e.g. blue or #0000ff">
      </label>

      <label>
        Color 3
        <input type="text" name="c3" placeholder="e.g. green or #00ff00">
      </label>

      <label>
        Color 4
        <input type="text" name="c4" placeholder="e.g. orange or #e87d1e">
      </label>

      <label>
        Color 5
        <input type="text" name="c5" placeholder="e.g. brown or #b47b5a">
      </label>

      <input type="submit" value="Send Colors">
    </form>
  </div>

<footer class="site-footer">
        <p>For educational purposes only &copy; 2026 Andrew De Jesus</p>
</footer>
         
</body>
</html>