<h2>Viewing #<?php echo $post->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $post->title; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $post->body; ?></p>
<p>
	<strong>Category:</strong>
	<?php echo $post->category_id; ?></p>

<?php echo Html::anchor('admin/posts/edit/'.$post->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/posts', 'Back'); ?>