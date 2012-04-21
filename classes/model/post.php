<?php
class Model_Post extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'title',
		'body',
		'category',
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
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('body', 'Body', 'required');
		$val->add_field('category', 'Category', 'required');

		return $val;
	}

}
