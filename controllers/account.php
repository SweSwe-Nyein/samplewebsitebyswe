<?php
switch ($action) {
  case '':
  case 'display':
    require('./views/account/display.php');
    break;

  default:
    require('./views/error_display.php');
    break;
}

?>
