<?php
  $input = fgets(STDIN);
  $input = rtrim($input, "\n\r");
  fwrite(STDOUT, sprintf("PHP script processed queue message '$input'", $string));
?>