<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/EventsDAO.php';

class PlayersController extends Controller {

  private $eventsDAO;

  function __construct() {
    $this->eventsDAO = new EventsDAO();
  }

  public function index() {

    $eventsDAO = new EventsDAO();
    $events = $toursDAO->selectAll();

    $this->set('events', $events);
    $this->set('currentPage', 'Programma');

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($events);
      exit();
    }
  }
}