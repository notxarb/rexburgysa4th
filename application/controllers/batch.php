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
      $points = $this->input->post('points');
      $date = $this->input->post('date');
      $this->Batch_model->insert($user_id, $points, $date);
      redirect("user/index");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->view('batch/create');
    }
  }

  public function update()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
      $this->load->model('Batch_model');
      $user_id = $this->session->userdata('user_id');
      $points = $this->input->post('points');
      $date = $this->input->post('date');
      $id = $this->input->post('id');
      if ($points == 0) {
        $this->Batch_model->delete($user_id, $id);
      }
      else
      {
        $this->Batch_model->update($user_id, $points, $date, $id);
      }
      redirect("user/index");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->model('Batch_model');
      $user_id = $this->session->userdata('user_id');
      $id = $this->input->get('id');
      $data = array("batch" => $this->Batch_model->get($user_id, $id));
      $this->load->view('batch/update', $data);
    }
  }

  public function delete()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
      $this->load->model('Batch_model');
      $user_id = $this->session->userdata('user_id');
      $id = $this->input->post('id');
      $this->Batch_model->delete($user_id, $id);
      redirect("user/index");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->model('Batch_model');
      $user_id = $this->session->userdata('user_id');
      $id = $this->input->get('id');
      $data = array("batch" => $this->Batch_model->get($user_id, $id));
      $this->load->view('batch/delete', $data);
    }
  }

}

?>