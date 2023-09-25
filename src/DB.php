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

  public function find($table, $class, $id)
  {
    $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=$id");
    $stmt->execute();


    $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
    return $stmt->fetch();
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

  public function update($table, $fields){
    $id=$fields['id'];
    unset($fields['id']);
    $setText = '';
    foreach($fields as $field=>$value){
      $setText .= "$field='$value',";
    }
    $setText = rtrim($setText, ",");
    $sql ="UPDATE $table SET $setText WHERE id=$id";

    $stmt = $this->conn->prepare($sql);

  
  $stmt->execute();
  }
  public function delete($table, $id){
    $sql = "DELETE FROM $table WHERE id=$id";
    $this->conn->exec($sql);
  }
}
