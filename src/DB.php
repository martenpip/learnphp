<?php

namespace App;

use \PDO;
use \PDOException;

class DB
{
  private $conn;

  public function __construct()
  {
    try {
      $this->conn = new PDO("sqlite:db.sqlite");
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function all($table, $fields)
  {
    $stmt = $this->conn->prepare("SELECT * FROM $table");
    $stmt->execute();

    // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_CLASS, $fields);
    return $stmt->fetchAll();
  }

  public function insert($table, $fields){


    $sql = "INSERT INTO $table MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    var_dump($sql);
    die();

    $this->conn->exec($sql);
  }
}
