<?php

require_once( __DIR__ . '/DAO.php');

class EventsDAO extends DAO {


  public function selectAll($Dag){
    $sql = "SELECT * FROM `programma` WHERE `Dag` = :Dag";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':Dag', $Dag);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

  }


}