<?php

namespace Fuel\Migrations;

class Add_summary_to_posts
{
	public function up()
	{
    \DBUtil::add_fields('posts', array(
						'summary' => array('type' => 'text'),

    ));	
	}

	public function down()
	{
    \DBUtil::drop_fields('posts', array(
			'summary'    
    ));
	}
}