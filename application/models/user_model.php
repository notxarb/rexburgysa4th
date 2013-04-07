<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

  var $user_name = "";
  var $first_name = "";
  var $last_name = "";
  var $password = "";
  var $ward_id = "";

  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
  }

  public function create($first_name, $last_name, $ward_id, $user_name, $password)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->ward_id = $ward_id;
    $this->user_name = $user_name;
    $this->password = md5($password);
    $this->db->insert('users', $this);
  }

  public function update()
  {

  }

  public function log_in($user_name, $password)
  {
    $this->db->select('id, first_name, last_name, ward_id');
    $this->db->from('users');
    $this->db->where('user_name', $user_name);
    $this->db->where('password', md5($password));
    $query = $this->db->get();
    if ($query->num_rows() == 1)
    {
      return $query->row();
    }
    else
    {
      return false;
    }
  }

  public function get_points()
  {
    $batch_points = "0";
    $event_points = "0";
    $user_id = $this->session->userdata('user_id');
    $query = $this->db->query('SELECT SUM(points) as points FROM batches WHERE user_id =' . $user_id );
    if ($query->num_rows() == 1)
    {
      $batch_points = $query->row()->points;
    }
    $query = $this->db->query('SELECT SUM(e.points) as points FROM events e, attended_events ae WHERE e.id = ae.event_id AND ae.user_id = ' . $user_id);
    if ($query->num_rows() == 1)
    {
      $event_points = $query->row()->points;
    }

    return array('batch_points' => $batch_points, 'event_points' => $event_points);
  }

  public function is_logged_in()
  {
    return ( $this->session->userdata('logged_in') == true );
  }

}
?>