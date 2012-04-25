<h2>Editing Category</h2>
<br>

<?php echo render('admin/category/_form'); ?>
<p>
	<?php echo Html::anchor('admin/category/view/'.$category->id, 'View'); ?> |
	<?php echo Html::anchor('admin/category', 'Back'); ?></p>
