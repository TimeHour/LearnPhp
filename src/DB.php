<?php

namespace App;

use App\Models\Article;
use \PDO;
use \PDOException;



class DB
{
  private $conn;
  public function __construct()
  {

    try {
      $this->conn = new PDO("sqlite:db.sqlite");

      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function all($table, $class)
  {
    $stmt = $this->conn->prepare("SELECT * FROM $table");
    $stmt->execute();


    $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
    return $stmt->fetchAll();
  }

  public function insert($tabel, $fields){
    unset($fields['id']);
    $fieldNameText = implode(', ', array_keys($fields));
    $fieldValueText = implode("', '",$fields);
    $sql = "INSERT INTO $tabel ($fieldNameText)
  VALUES ('$fieldValueText')"; 
   // use exec() because no results are returned
  $this->conn->exec($sql);
  }
}