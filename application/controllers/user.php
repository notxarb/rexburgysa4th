<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

  public function index()
  {

    $this->load->view('user/index', $data);
  }

  public function log_in()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {

    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->view('user/log_in');
    }
  }

  public function update()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {

    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      
    }
  }

  public function log_out()
  {
    $this->session->sess_destroy();
  }

  public function new_user()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
      $this->load->model("User_model");
      $this->load->helper('url');
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $ward_id = $_POST['ward_id'];
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];
      $this->User_model->create($first_name, $last_name, $ward_id, $user_name, $password);
      redirect("user/log_in");
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->model('Ward_model');
      $data['wards'] = $this->Ward_model->get_wards();
      $this->load->view('user/new', $data);
    }
  }
  
}

?>