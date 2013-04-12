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
      $date = $this->input->post('date');
      $points = $this->input->post('points');
      $location = $this->input->post('location');
      $description = $this->input->post('description');
      $this->Event_model->insert($date, $points, $description, $location);
      redirect("user/index");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->view('event/create');
    }
  }

  public function view()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
      $this->load->model('Event_model');
      $date = $this->input->post('date');
      $points = $this->input->post('points');
      $location = $this->input->post('location');
      $description = $this->input->post('description');
      $this->Event_model->insert($date, $points, $description, $location);
      redirect("user/index");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $id = $this->input->get('id');
      $this->load->model('Event_model');
      $data = array("event" => $this->Event_model->get($id));
      $this->load->view('event/view', $data);
    }
  }

}

?>