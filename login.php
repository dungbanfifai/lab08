<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<!-- the login page extension should be php because we cannot use include function with html extension -->

<body>
  <?php include 'header.inc'; ?>
  <form method="post" action="process.php">
    <label for="username">Username :</label>
    <input type="text" name="username" required><br>

    <label for="password">Password :</label>
    <input type="password" name="password" required><br>

    <input type="hidden" name="token" value="abc123">
    <input type="submit" value="Login">
  </form>

  <?php include 'footer.inc'; ?>
  </form>
</body>

</html>