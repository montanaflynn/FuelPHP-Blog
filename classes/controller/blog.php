<?php

/**
 * The Blog Controller.
 *
 * A blog controller example.  Has examples of how to set the
 * response body and status.
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_Blog extends Controller_Base
{
	
	public $template = 'template';
	
	/**
	 * The index page
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$data['posts'] = Model_Post::find('all');
		$data['comments'] = Model_Comment::find('all');
		$this->template->title = 'Blog Tutorial';
		$this->template->content = View::factory('blog/index', $data);
	}
	
	/**
	 * The post page
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_post($slug)
	{
				
		$data['post'] = Model_Post::find_by_slug($slug, array('related' => array('comments')));
		$this->template->title = 'Blog Tutorial';
		$this->template->content = View::factory('blog/post', $data);
		
		
		
	}
	
	
	
}
