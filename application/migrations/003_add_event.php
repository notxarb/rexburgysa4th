<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_event extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'date' => array(
        'type' => 'DATETIME'
      ),
      'points' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE,
        'null' => TRUE
      ),
      'description' => array(
        'type' => 'TEXT'
      ),
      'location' => array(
        'type' => 'TEXT'
      )
    ));
    
    $this->dbforge->create_table('events');
  }

  public function down()
  {
    $this->dbforge->drop_table('events');
  }
?>