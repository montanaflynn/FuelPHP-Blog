		<?php if ($posts): ?>

		<?php foreach ($posts as $post): ?>
				<div class="row">
					<h2><?php echo $post->title; ?></h2>
					<p><?php echo Str::truncate($post->body, 15); ?></p>
				</div>
				
		<?php endforeach; ?>

		<?php else: ?>
		<p>No Posts Found.</p>

		<?php endif; ?><p>

		</p>
