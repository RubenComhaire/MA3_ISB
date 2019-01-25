<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/EventsDAO.php';

class PagesController extends Controller {

  private $eventsDAO;

  function __construct() {
    $this->eventsDAO = new EventsDAO();
  }

  public function index() {
  }
  public function programma() {
    $eventsDAO = new EventsDAO();
    $events = $eventsDAO->selectAll();

    $this->set('events', $events);
    $this->set('currentPage', 'Programma');
  }

  public function detail() {

  }

}
?>