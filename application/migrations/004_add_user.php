<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'user_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '20'
      ),
      'first_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '20'
      ),
      'last_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '20'
      ),
      'password' => array(
        'type' => 'VARCHAR',
        'constraint' => '32'
      ),
      'ward_id' => array(
        'type' => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE,
        'null' => TRUE
      )
    ));
    
    $this->dbforge->create_table('users');
  }

  public function down()
  {
    $this->dbforge->drop_table('users');
  }
?>