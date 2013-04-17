<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attended_event extends CI_Controller {

  public function index()
  {
    $this->load->view('ward/index');
  }

  public function create()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
      $this->load->model('Attended_event_model');
      $user_id = $this->session->userdata('user_id');
      $event_id = $this->input->post('event_id');
      $this->Attended_event_model->insert($user_id, $event_id);
      redirect("user/index");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->view('attended_event/create');
    }
  }

  public function delete()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
      $this->load->model('Attended_event_model');
      $user_id = $this->session->userdata('user_id');
      $event_id = $this->input->post('event_id');
      $this->Attended_event_model->delete($user_id, $event_id);
      redirect("user/index");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->view('attended_event/delete');
    }
  }

}

?>