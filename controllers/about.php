<?php
switch ($action) {
  case '':
  case 'display':
    require('./views/about/display.php');
    break;

  default:
    require('./views/error_display.php');
    break;
}

?>
