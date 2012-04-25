<?php
class Model_Category extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'description',
		'category_parent',
		'slug',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
		'Orm\\Observer_Slug' => array(
        'events' => array('before_insert'),
        'source' => 'name',   
        'property' => 'slug',  
    ),
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required');

		return $val;
	}

}
