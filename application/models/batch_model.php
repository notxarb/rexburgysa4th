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

}
?>