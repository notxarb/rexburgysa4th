<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

  public function index()
  {
    $this->load->model('Ward_model');
    $ward = $this->Ward_model->get_ward($this->session->userdata('ward_id'));
    $points = $this->User_model->get_points();
    $data = array();
    $data['first_name'] = $this->session->userdata('first_name');
    $data['last_name'] = $this->session->userdata('last_name');
    $data['ward_name'] = $ward->name;
    $data['ward_goal'] = $ward->goal;
    $data['event_points'] = $points['event_points'];
    $data['batch_points'] = $points['batch_points'];
    $this->load->view('user/index', $data);
  }

  public function log_in()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];
      $user = $this->User_model->log_in($user_name, $password);
      if ($user != false)
      {
        $user_data = array("first_name" => $user->first_name, "last_name" => $user->last_name, "user_id" => $user->id, "logged_in" => true, 'ward_id' => $user->ward_id);
        $this->session->set_userdata($user_data);
        redirect("user/index");
      }
      else
      {
        redirect('user/log_in');
      }
    }
    elseif ($this->input->server('REQUEST_METHOD') == 'GET')
    {
      $this->load->model('Ward_model');
      $data['wards'] = $this->Ward_model->get_wards();
      $this->load->view('user/log_in', $data);
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
    redirect('user/log_in');
  }

  public function new_user()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
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