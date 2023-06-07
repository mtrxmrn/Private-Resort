<?php


class Database{

  protected function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=jimsresort", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // set the PDO fetch mode to fetch assoc
      $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      //echo "Connected successfully";
      return $conn;
    } catch(PDOException $e) {
      //echo "Connection failed: " . $e->getMessage();
    }
  }
}

?>