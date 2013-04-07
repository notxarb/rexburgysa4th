<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Batch extends CI_Controller {

  public function index()
  {
    $this->load->view('ward/index');
  }

  public function create()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
      $this->load->model('Batch_model');
      $user_id = $this->session->userdata('user_id');
      $points = $_POST['points'];
      $date = $_POST['date'];
      $this->Batch_model->insert($user_id, $points, $date);
      redirect("user/index");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->view('batch/create')
    }
  }

}

?>