<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_ward extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'name' => array(
        'type' => 'VARCHAR',
        'constraint' => '30'
      ),
      'goal' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE,
        'null' => TRUE
      )
    ));
    
    $this->dbforge->create_table('wards');
    $wards = array();
    $wards[] = array('name' => 'Rexburg YSA 1st Ward', 'goal' => 100);
    $wards[] = array('name' => 'Rexburg YSA 2nd Ward', 'goal' => 100);
    $wards[] = array('name' => 'Rexburg YSA 3rd Ward', 'goal' => 100);
    $wards[] = array('name' => 'Rexburg YSA 86th Ward', 'goal' => 100);
    $wards[] = array('name' => 'Rexburg YSA 87th Ward', 'goal' => 100);
    foreach($wards as $ward)
    {
      $this->db->insert('wards', $ward);
    }
  }

  public function down()
  {
    $this->dbforge->drop_table('wards');
  }
?>