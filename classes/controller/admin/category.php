<?php
class Controller_Admin_Category extends Controller_Admin 
{

	public function action_index()
	{
		$data['categories'] = Model_Category::find('all');
		$this->template->title = "Categories";
		$this->template->content = View::forge('admin/category/index', $data);

	}

	public function action_view($id = null)
	{
		$data['category'] = Model_Category::find($id);

		$this->template->title = "Category";
		$this->template->content = View::forge('admin/category/view', $data);

	}

	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Category::validate('create');
			
			if ($val->run())
			{
				$category = Model_Category::forge(array(
					'name' => Input::post('name'),
					'description' => Input::post('description'),
					'category_parent' => Input::post('category_parent'),
					'slug' => Input::post('slug'),
				));

				if ($category and $category->save())
				{
					Session::set_flash('success', 'Added category #'.$category->id.'.');

					Response::redirect('admin/category');
				}

				else
				{
					Session::set_flash('error', 'Could not save category.');
				}
			}
			else
			{
				Session::set_flash('error', $val->show_errors());
			}
		}

		$this->template->title = "Categories";
		$this->template->content = View::forge('admin/category/create');

	}

	public function action_edit($id = null)
	{
		$category = Model_Category::find($id);
		$val = Model_Category::validate('edit');

		if ($val->run())
		{
			$category->name = Input::post('name');
			$category->description = Input::post('description');
			$category->category_parent = Input::post('category_parent');
			$category->slug = Input::post('slug');

			if ($category->save())
			{
				Session::set_flash('success', 'Updated category #' . $id);

				Response::redirect('admin/category');
			}

			else
			{
				Session::set_flash('error', 'Could not update category #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$category->name = $val->validated('name');
				$category->description = $val->validated('description');
				$category->category_parent = $val->validated('category_parent');
				$category->slug = $val->validated('slug');

				Session::set_flash('error', $val->show_errors());
			}
			
			$this->template->set_global('category', $category, false);
		}

		$this->template->title = "Categories";
		$this->template->content = View::forge('admin/category/edit');

	}

	public function action_delete($id = null)
	{
		if ($category = Model_Category::find($id))
		{
			$category->delete();

			Session::set_flash('success', 'Deleted category #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete category #'.$id);
		}

		Response::redirect('admin/category');

	}


}