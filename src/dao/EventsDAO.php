<?php

require_once( __DIR__ . '/DAO.php');

class EventsDAO extends DAO {


  public function selectAll(){
    $sql = "SELECT * FROM `programma`";
    $stmt = $this->pdo->prepare($sql);
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


}