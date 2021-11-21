<?php

class Account extends DataObject
{
  protected $data = array(
    'id' => '',
    'user_name' => '',
    'courses' => '',
    'completed' => '',
    'certificates' => '',
    'points' => '',
    'created_date' => '',
    'modified_date' => ''
  );

  public static function getStudentAccountById($id)
  {
    $conn = parent::connect();
    $sql = 'SELECT * FROM '.TBL_ACCOUNT.' WHERE id = :id';
    try {
      $st = $conn->prepare($sql);
      $st->bindValue(':id', $id, PDO::PARAM_STR);
      $st->execute();
      $row = $st->fetch();
      parent::disconnect($conn);
      if($row) return new Account($row);
    } catch (PDOException $e) {
      parent::disconnect($conn);
      die('Query failed: ' . $e->getMessage());
    }
  }
}

?>
