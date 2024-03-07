<?php
require "./connect.php";

$data = $_POST['momo'];

$sql = "insert into momos (name) values ('$data')";
mysqli_query($conn, $sql);

header('Location: /');
