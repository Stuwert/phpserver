<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Hi
    <?php echo htmlspecialchars($_POST['name']); ?>.
    You are <?php echo (int)$_POST['age']; ?> years old.
  </body>
</html>
