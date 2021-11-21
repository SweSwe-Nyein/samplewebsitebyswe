<?php
require('./config.php');
require('./models/DataObject.class.php');
require('./htmlstructureconfig.php');

$controller = $_GET['controller'];
$action = isset($_GET['action']) ? $_GET['action'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';

// require('./models/MovieCategories.class.php');
// require('./models/SeriesCategories.class.php');
#Loading model
switch ($controller)
{
  case 'home':
    require('./models/Blog.class.php');
    require('./models/Book.class.php');
    require('./models/Course.class.php');
    require('./models/Review.class.php');
    break;
  case 'about' :

  break;
  case 'account':
    require('./models/Account.class.php');
    break;
  case 'contact':

  break;
  case 'courses':
    require('./models/Course.class.php');
    break;

  default:
    require('./views/error_display.php');
}

#Loading controller
  $controller = "./controllers/${controller}.php";
  if(file_exists($controller) and !is_dir($controller))
    require($controller);
  else
    exit("models -> ${controller} not found");
 ?>
