<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_batch extends CI_Migration {

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
      'points' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE,
        'null' => TRUE
      ),
      'date' => array(
        'type' => 'DATETIME'
      )
    ));
    
    $this->dbforge->create_table('batches');
  }

  public function down()
  {
    $this->dbforge->drop_table('batches');
  }
?>