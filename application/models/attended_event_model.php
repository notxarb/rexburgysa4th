<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_attended_model extends CI_Model {

  var $event_id = "";
  var $user_id = "";

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

}
?>