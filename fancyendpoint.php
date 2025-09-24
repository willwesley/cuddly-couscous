<?php

$num = $_GET['base'];

$arr = array(
  'a'=> 1 * $num,
  'b'=> 2 * $num,
  'c'=> 3 * $num,
  'd'=> 4 * $num,
  'e'=> 5 * $num,
);

echo json_encode($arr);

?>
