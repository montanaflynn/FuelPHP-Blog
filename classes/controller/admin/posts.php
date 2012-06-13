<?php
class Controller_Admin_Posts extends Controller_Admin 
{

	public function action_index()
	{
		$data['posts'] = Model_Post::find('all');
		$this->template->title = "Posts";
		$this->template->content = View::forge('admin/posts/index', $data);

	}

	public function action_view($id = null)
	{
		$this->template->title = "Post";
    $view->set('post', Model_Post::find($id), false);
		$this->template->content = View::forge('admin/posts/view', $data);

	}

	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Post::validate('create');
			
			if ($val->run())
			{
				$post = Model_Post::forge(array(
					'title' => Input::post('title'),
					'body' => Input::post('body'),
					'category_id' => Input::post('category_id'),
				));

				if ($post and $post->save())
				{
					Session::set_flash('success', 'Added post #'.$post->id.'.');

					Response::redirect('admin/posts');
				}

				else
				{
					Session::set_flash('error', 'Could not save post.');
				}
			}
			else
			{
				Session::set_flash('error', $val->show_errors());
			}
		}

		$this->template->set_global('categories', Arr::assoc_to_keyval(Model_Category::find('all'), 'id', 'name'));
		$this->template->title = "Posts";
		$this->template->content = View::forge('admin/posts/create');

	}

	public function action_edit($id = null)
	{
		$post = Model_Post::find($id);
		$val = Model_Post::validate('edit');

		if ($val->run())
		{
			$post->title = Input::post('title');
			$post->body = Input::post('body');
			$post->category_id = Input::post('category_id');

			if ($post->save())
			{
				Session::set_flash('success', 'Updated post #' . $id);

				Response::redirect('admin/posts');
			}

			else
			{
				Session::set_flash('error', 'Could not update post #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$post->title = $val->validated('title');
				$post->body = $val->validated('body');
				$post->category = $val->validated('category');

				Session::set_flash('error', $val->show_errors());
			}
			
			$this->template->set_global('post', $post, false);
		}

		$this->template->set_global('categories', Arr::assoc_to_keyval(Model_Category::find('all'), 'id', 'name'));
		$this->template->title = "Posts";
		$this->template->content = View::forge('admin/posts/edit');

	}

	public function action_delete($id = null)
	{
		if ($post = Model_Post::find($id))
		{
			$post->delete();

			Session::set_flash('success', 'Deleted post #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete post #'.$id);
		}

		Response::redirect('admin/posts');

	}


}