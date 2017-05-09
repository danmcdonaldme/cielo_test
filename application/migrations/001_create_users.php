<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Users extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'user_email' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'favourite_color' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'user_dob' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
            'user_created' => array(
                'type' => 'TIMESTAMP'
            )
        ));
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('users');

    }

    public function down() {
        $this->dbforge->drop_table('users');
    }

}
