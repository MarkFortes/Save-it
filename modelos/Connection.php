<?php

  class Connection{

    private $conn;

    function __construct(){
      try {
        $this->conn = new PDO("mysql:host=localhost;dbname=save_it_db", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion establecida";
      } catch (\Exception $e) {
        echo "Se ha producido un error: " . $e->getMessage();
      }
    }

    function getConnection(){
      return $this->conn;
    }


  }


?>