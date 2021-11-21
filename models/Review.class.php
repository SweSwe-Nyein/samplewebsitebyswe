<?php

class Review extends DataObject
{
  protected $data = array(
    'id' => '',
    'name' => '',
    'message' => '',
    'img_link' => '',
    'created_date' => ''
  );

  public static function getAllReviews()
  {
    $conn = parent::connect();
    $sql = 'SELECT * FROM ' . TBL_REVIEW;

    try {
      $st = $conn->query($sql);
      $reviews = array();
      foreach ( $st->fetchAll() as $row ) {
        $reviews[] = new Review($row);
      }
      parent::disconnect($conn);
      return $reviews;
    } catch(PDOException $e) {
      parent::disconnect($conn);
      die('Query failed: ' . $e->getMessage());
    }
  }
}
?>
