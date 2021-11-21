<?php

class Course extends DataObject
{
  protected $data = array(
    'id' => '',
    'title' => '',
    'content' => '',
    'price' => '',
    'created_date' => ''
  );

  public static function getAllCourses()
  {
    $conn = parent::connect();
    $sql = 'SELECT * FROM ' . TBL_COURSE;

    try {
      $st = $conn->query($sql);
      $courses = array();
      foreach ( $st->fetchAll() as $row ) {
        $courses[] = new Course($row);
      }
      parent::disconnect($conn);
      return $courses;
    } catch(PDOException $e) {
      parent::disconnect($conn);
      die('Query failed: ' . $e->getMessage());
    }
  }
}
?>
