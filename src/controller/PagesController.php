<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/EventsDAO.php';
require_once __DIR__ . '/../dao/DetailDAO.php';

class PagesController extends Controller {

  private $eventsDAO;
  private $detailDAO;

  function __construct() {
    $this->eventsDAO = new EventsDAO();
    $this->detailDAO = new DetailDAO();
  }

  public function index() {
  }
  public function programma() {
    $eventsDAO = new EventsDAO();
    $this->set('currentPage', 'Programma');

    if (!empty($_GET['Dag'])){
      $events = $eventsDAO->selectAll($_GET['Dag']);
      $this->set('events', $events);
    }
  }

  public function detail() {
    $detailDAO = new DetailDAO();
    $this->set('currentPage', 'Detail');

    if (!empty($_GET['id'])){
      $details = $detailDAO->selectById($_GET['id']);
      $this->set('details', $details);
    }
  }

}
?>