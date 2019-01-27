<?php

require_once( __DIR__ . '/DAO.php');

class EventsDAO extends DAO {

  public function search($type= '', $search= '', $drop= '', $Dag){
    $sql = "SELECT * FROM `programma` WHERE `dag` = :Dag";

    if(!empty($type == 'voorstelling') || !empty($type == 'straatact')){
      $sql .= " AND `Type` = :type";
    }
    if(!empty($search)){
      $sql .= " AND (`Performer` LIKE :search OR `Act` LIKE :search2 )";
    }
    if(!empty($drop == 'tijdasc')){
      $sql .= " ORDER BY `Start uur` ASC";
    }elseif(!empty($drop == 'tijddesc')){
      $sql .= " ORDER BY `Start uur` DESC";
    }

    $stmt = $this->pdo->prepare($sql);
    if(!empty($search)){
      $stmt->bindValue(':search','%'.$search.'%');
      $stmt->bindValue(':search2','%'.$search.'%');
    }
    if(!empty($type == 'voorstelling') || !empty($type == 'straatact')){
      $stmt->bindValue(':type', $type);
    }
    $stmt->bindValue(':Dag', $Dag);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


  public function selectAll($Dag){
    $sql = "SELECT * FROM `programma` WHERE `Dag` = :Dag ORDER BY `Start uur` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':Dag', $Dag);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

  }


}