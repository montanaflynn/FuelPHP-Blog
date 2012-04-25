<?php

namespace Fuel\Migrations;

class Add_website_to_comments
{
	public function up()
	{
    \DBUtil::add_fields('comments', array(
						'website' => array('type' => 'text'),

    ));	
	}

	public function down()
	{
    \DBUtil::drop_fields('comments', array(
			'website'    
    ));
	}
}