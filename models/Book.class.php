<?php

class Book extends DataObject
{
  protected $data = array(
    'id' => '',
    'title' => '',
    'content' => '',
    'price' => '',
    'img_link' => '',
    'created_date' => ''
  );

  public static function getAllBooks()
  {
    $conn = parent::connect();
    $sql = 'SELECT * FROM ' . TBL_BOOK;

    try {
      $st = $conn->query($sql);
      $books = array();
      foreach ( $st->fetchAll() as $row ) {
        $books[] = new Book($row);
      }
      parent::disconnect($conn);
      return $books;
    } catch(PDOException $e) {
      parent::disconnect($conn);
      die('Query failed: ' . $e->getMessage());
    }
  }
}
?>
