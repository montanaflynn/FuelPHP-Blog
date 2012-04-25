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
		
		$post = Model_Post::find_by_slug($slug, array('related' => array('comments')));
		
		// Lazy validation
		if (Input::post('name') AND Input::post('email') AND Input::post('body'))
		{
		  // Create a new comment
		  $post->comments[] = new Model_Comment(array(
		     'name' => Input::post('name'),
		     'website' => Input::post('website'),
		     'email' => Input::post('email'),
		     'body' => Input::post('body')
		  ));

		  // Save the post and the comment will save too
		  if ($post->save())
		  {
		     $comment = end($post->comments);
		     Session::set_flash('success', 'Added comment #'.$comment->id.'.');
		  }
		  else
		  {
		     Session::set_flash('error', 'Could not save comment.');
		  }

		  Response::redirect($slug);
		}

		// Did not have all the fields
		else
		{
				
		$data['post'] = Model_Post::find_by_slug($slug, array('related' => array('comments')));
		$this->template->title = 'Blog Tutorial';
		$this->template->content = View::factory('blog/post', $data);
				
		}
	}
	
}
