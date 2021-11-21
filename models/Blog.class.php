<?php

class Blog extends DataObject
{
  protected $data = array(
    'id' => '',
    'title' => '',
    'content' => '',
    'tag' => '',
    'img_link' => '',
    'created_date' => ''
  );

  public static function getAllBlogs()
  {
    $conn = parent::connect();
    $sql = 'SELECT * FROM ' . TBL_BLOG;

    try {
      $st = $conn->query($sql);
      $blogs = array();
      foreach ( $st->fetchAll() as $row ) {
        $blogs[] = new Blog($row);
      }
      parent::disconnect($conn);
      return $blogs;
    } catch(PDOException $e) {
      parent::disconnect($conn);
      die('Query failed: ' . $e->getMessage());
    }
  }
}

?>
