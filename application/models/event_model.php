<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_model extends CI_Model {

  var $date = "";
  var $points = "";
  var $description = "";
  var $location = "";

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_event_list()
    {
      $query = $this->db->get('events');
      return $query->result();
    }

    public function get($id)
    {
      $query = $this->db->get_where('events', array('id' => $id));
      return $query->row();
    }

    public function insert($date, $points, $description, $location)
    {
      $this->date = $date;
      $this->points = $points;
      $this->description = $this->db->escape($description);
      $this->location = $this->db->escape($location);
      $this->db->insert("events", $this);
    }

    public function update($date, $points, $description, $location, $id)
    {
      $this->date = $date;
      $this->points = $points;
      $this->description = $this->db->escape($description);
      $this->location = $this->db->escape($location);
      $this->db->update("events", $this, array("id" => $id));
    }

    public function delete()
    {
      $this->db->delete('events', array("id" => $id));
    }

}
?>