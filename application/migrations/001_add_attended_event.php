<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_attended_event extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'user_id' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE
      ),
      'event_id' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE
      )
    ));
    
    $this->dbforge->create_table('attended_events');
  }

  public function down()
  {
    $this->dbforge->drop_table('attended_events');
  }
?>