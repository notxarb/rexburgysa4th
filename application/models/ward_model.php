<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ward_model extends CI_Model {

    var $name = '';
    var $goal = '';
    var $date = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_wards()
    {
        $query = $this->db->get('wards');
        return $query->result();
    }

    function get_ward($ward_id)
    {
        $query = $this->db->get_where('wards', array('id' => $ward_id));
        return $query->result();
    }

    function insert_entry()
    {
        $this->name = $_POST['name']; // please read the below note
        $this->goal = $_POST['goal'];
        $this->date = time();

        $this->db->insert('wards', $this);
    }

    function update_entry()
    {
        $this->name = $_POST['name'];
        $this->goal = $_POST['goal'];
        $this->date = time();

        $this->db->update('wards', $this, array('id' => $_POST['id']));
    }

}
?>