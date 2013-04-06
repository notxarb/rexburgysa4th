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

  public function get_points()
  {
      
  }

  public function is_logged_in()
  {

  }

}
?>