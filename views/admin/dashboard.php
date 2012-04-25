<h2>Listing Posts</h2>
<br>
<?php if ($posts): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Body</th>
			<th>Category</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $post): ?>		<tr>

			<td><?php echo $post->title; ?></td>
			<td><?php echo $post->body; ?></td>
			<td><?php echo $post->category_id; ?></td>
			<td>
				<?php echo Html::anchor('admin/posts/view/'.$post->id, 'View'); ?> |
				<?php echo Html::anchor('admin/posts/edit/'.$post->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/posts/delete/'.$post->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Posts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/posts/create', 'Add new Post', array('class' => 'btn success')); ?>

</p>

<br/><br/>


<h2>Listing Comments</h2>
<br>
<?php if ($comments): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Body</th>
			<th>Post id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($comments as $comment): ?>		<tr>

			<td><?php echo $comment->name; ?></td>
			<td><?php echo $comment->body; ?></td>
			<td><?php echo $comment->post_id; ?></td>
			<td>
				<?php echo Html::anchor('admin/comments/view/'.$comment->id, 'View'); ?> |
				<?php echo Html::anchor('admin/comments/edit/'.$comment->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/comments/delete/'.$comment->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Comments.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/comments/create', 'Add new Comment', array('class' => 'btn success')); ?>

</p>