<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

  public function index()
  {
    $this->load->view('ward/index');
  }

  public function create()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
      $this->load->model('Event_model');
      $date = $_POST['date'];
      $points = $_POST['points'];
      $location = $_POST['location'];
      $description = $_POST['description'];
      $this->Event_model->insert($date, $points, $description, $location);
      redirect("user/index");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->view('event/create');
    }
  }

}

?>