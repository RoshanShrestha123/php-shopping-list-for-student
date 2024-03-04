<?php
session_start();
$isLogin = false;

if (isset($_SESSION['isLogin'])) {
  $sessionKoValue = $_SESSION['isLogin'];
  $isLogin = $sessionKoValue;
} else {
  $isLogin = false;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auth</title>
</head>

<body>
  <main>


    <?php
    if ($isLogin) {
      echo '<form action="/logout.php" method="post">
      <button type="submit">logout</button>
    </form>';
    } else {
      echo '   <form action="/login.php" method="post">
      <button type="submit">Login</button>
    </form>';
    }
    ?>
  </main>
</body>

</html>