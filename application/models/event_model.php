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

    public function insert($date, $points, $description, $location)
    {
      $this->date = $date;
      $this->points = $points;
      $this->description = $this->db->escape($description);
      $this->$location = $this->db->escape($location);
      $this->db->insert("events", $this);
    }

}
?>