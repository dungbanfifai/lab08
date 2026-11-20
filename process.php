<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include 'header.inc';
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'Dung' && $password == '106396488') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
  } else {
    echo "Invalid login. <a href='login.php'>Try again</a>";
  }
  include 'footer.inc';
  ?>
</body>

</html>