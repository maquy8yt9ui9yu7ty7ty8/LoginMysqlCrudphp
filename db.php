<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  'MyNewPass',
  'uni_facultad'
) or die(mysqli_erro($mysqli));

?>
