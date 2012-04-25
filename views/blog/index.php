	<?php if ($posts): ?>
		
		<?php foreach ($posts as $post): ?>

			<h3><?php echo Html::anchor($post->slug, $post->title) ?></h3>
			<p><strong>Posted: </strong><?php echo Date::time_ago($post->created_at)?></p>
			
			<p><?php echo $post->body; ?></p>

		<?php endforeach; ?>

	<?php else: ?>
		
		<p>No Posts Found.</p>

	<?php endif; ?>