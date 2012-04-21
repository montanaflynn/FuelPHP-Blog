<?php

/**
 * The Error Controller.
 *
 * An error controller example. 
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_Error extends Controller
{

	/**
	 * The 404 action for the application.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(ViewModel::forge('error/404'), 404);
	}
}
