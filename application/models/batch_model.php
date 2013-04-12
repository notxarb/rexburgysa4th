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

    public function get_batches($user_id)
    {
      $query = $this->db->get_where('batches', array("user_id" => $user_id));
      return $query->results();
    }

    public function get($user_id, $id)
    {
      $query = $this->db->get_where('batches', array('id' => $id, "user_id" => $user_id));
      return $query->row();
    }

    public function insert($user_id, $points, $date)
    {
      $this->user_id = $user_id;
      $this->points = $points;
      $this->date = $date;
      $this->db->insert('batches', $this);
    }

    public function update($user_id, $points, $date, $id)
    {
      $this->user_id = $user_id;
      $this->points = $points;
      $this->date = $date;
      $this->db->update('batches', $this, array("id" => $id, "user_id" => $user_id));
    }

    public function delete($user_id, $id)
    {
      $this->db->delete('batches', array("id" => $id, "user_id" => $user_id));
    }

}
?>