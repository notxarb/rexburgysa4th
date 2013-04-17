<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_attended_model extends CI_Model {

  var $event_id = "";
  var $user_id = "";

  function __construct()
  {
      // Call the Model constructor
      parent::__construct();
  }

  public function create($user_id, $event_id)
  {
    $this->event_id = $event_id;
    $this->user_id = $user_id
    $this->Attended_event_model->insert("attended_events", $this);
  }

  public function delete($user_id, $event_id)
  {
    $this->load->model('Attended_event_model');
    $this->Attended_event_model->delete("attended_events", array("user_id" => $user_id, "event_id" => $event_id));
  }

}
?>