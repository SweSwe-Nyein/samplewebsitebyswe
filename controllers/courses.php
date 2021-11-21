<?php
switch ($action) {
  case '':
  case 'display':
    require('./views/courses/display.php');
    break;

  default:
    require('./views/error_display.php');
    break;
}

?>
