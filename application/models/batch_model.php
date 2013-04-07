<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Batch_model extends CI_Model {

  var $date = "";
  var $points = "";
  var $user_id = "";

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function insert($user_id, $points, $date)
    {
      $this->user_id = $user_id;
      $this->points = $points;
      $this->date = $date;
      $this->db->insert('batches', $this);
    }

    public function update()
    {

    }

    public function delete()
    {
      
    }

}
?>