<?php echo Form::open(array('class' => 'form-stacked')); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Name', 'name'); ?>

			<div class="input">
				<?php echo Form::input('name', Input::post('name', isset($category) ? $category->name : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Description', 'description'); ?>

			<div class="input">
				<?php echo Form::textarea('description', Input::post('description', isset($category) ? $category->description : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Category parent', 'category_parent'); ?>

			<div class="input">
				<?php echo Form::input('category_parent', Input::post('category_parent', isset($category) ? $category->category_parent : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Slug', 'slug'); ?>

			<div class="input">
				<?php echo Form::input('slug', Input::post('slug', isset($category) ? $category->slug : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>