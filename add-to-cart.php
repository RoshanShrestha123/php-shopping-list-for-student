<?php
session_start();

$item = $_POST['shopping'];

if (isset($_SESSION['anjan'])) {
  array_push($_SESSION['anjan'], $item);
} else {
  $_SESSION['anjan'] = [$item];
}

header("Location: /");