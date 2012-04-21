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
class Controller_Blog extends Controller
{

	/**
	 * The index page
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('blog/index'));
	}

}
