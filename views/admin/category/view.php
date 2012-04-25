<h2>Viewing #<?php echo $category->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $category->name; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $category->description; ?></p>
<p>
	<strong>Category parent:</strong>
	<?php echo $category->category_parent; ?></p>
<p>
	<strong>Slug:</strong>
	<?php echo $category->slug; ?></p>

<?php echo Html::anchor('admin/category/edit/'.$category->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/category', 'Back'); ?>