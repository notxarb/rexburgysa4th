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

    public function create()
    {

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