<h2>Listing Categories</h2>
<br>
<?php if ($categories): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Category parent</th>
			<th>Slug</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($categories as $category): ?>		<tr>

			<td><?php echo $category->name; ?></td>
			<td><?php echo $category->description; ?></td>
			<td><?php echo $category->category_parent; ?></td>
			<td><?php echo $category->slug; ?></td>
			<td>
				<?php echo Html::anchor('admin/category/view/'.$category->id, 'View'); ?> |
				<?php echo Html::anchor('admin/category/edit/'.$category->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/category/delete/'.$category->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Categories.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/category/create', 'Add new Category', array('class' => 'btn success')); ?>

</p>
