<?php

namespace Fuel\Migrations;

class Add_email_to_comments
{
	public function up()
	{
    \DBUtil::add_fields('comments', array(
						'email' => array('constraint' => 255, 'type' => 'varchar'),

    ));	
	}

	public function down()
	{
    \DBUtil::drop_fields('comments', array(
			'email'    
    ));
	}
}