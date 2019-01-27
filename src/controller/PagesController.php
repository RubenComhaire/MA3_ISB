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


    if (!empty($_GET['action']) && $_GET['action'] == 'filter'){
        $events = $eventsDAO->search($_GET["type"], $_GET['search'], $_GET['drop'], $_GET['Dag']);
        $this->set('type', $_GET["type"]);
        $this->set('search', $_GET['search']);
        $this->set('drop', $_GET['drop']);
        $this->set('Dag', $_GET['Dag']);
        $this->set('events', $events);


    }elseif (!empty($_GET['Dag'])){
        $events = $eventsDAO->selectAll($_GET['Dag']);
        $this->set('Dag', $_GET['Dag']);
        $this->set('search','');
        $this->set('type','alles');
        $this->set('drop','tijdasc');
        $this->set('events', $events);
      }

      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

        header('Content-Type: application/json');
        echo json_encode($events);
        exit();
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