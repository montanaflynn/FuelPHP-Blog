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
			<td><?php echo STR::Truncate($post->body, 50); ?></td>
			<td><?php echo $post->category_id; ?></td>
			<td>
				<?php echo Html::anchor('/'.$post->slug, 'View'); ?> |
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
			<th>Website</th>
			<th>Email</th>
			<th>Body</th>
			<th>Post id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($comments as $comment): ?>		<tr>

			<td><?php echo $comment->name; ?></td>
			<td><?php echo $comment->website; ?></td>
			<td><?php echo $comment->email; ?></td>
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

<br/><br/>


<h2>Listing Categories</h2>
<br>
<?php if ($categories): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Slug</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($categories as $category): ?>		<tr>

			<td><?php echo $category->name; ?></td>
			<td><?php echo $category->description; ?></td>
			<td><?php echo $category->slug; ?></td>
			<td>
				<?php echo Html::anchor('admin/categories/view/'.$comment->id, 'View'); ?> |
				<?php echo Html::anchor('admin/categories/edit/'.$comment->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/categories/delete/'.$comment->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Categories.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/categories/create', 'Add new Category', array('class' => 'btn success')); ?>

</p>


