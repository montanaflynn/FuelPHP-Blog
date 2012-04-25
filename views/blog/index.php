	<?php if ($posts): ?>
		
		<?php foreach ($posts as $post): ?>

		   <h3><?php echo Html::anchor($post->slug, $post->title) ?></h3>

		   <p><?php echo $post->summary ?></p>

		<?php endforeach; ?>

	<?php else: ?>
		
		<p>No Posts Found.</p>

	<?php endif; ?>