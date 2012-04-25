<?php

namespace Fuel\Migrations;

class Add_slug_to_posts
{
	public function up()
	{
    \DBUtil::add_fields('posts', array(
						'slug' => array('type' => 'text'),

    ));	
	}

	public function down()
	{
    \DBUtil::drop_fields('posts', array(
			'slug'    
    ));
	}
}