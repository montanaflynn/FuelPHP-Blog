<h2><?php echo $post->title ?></h2>
 
<p><strong>Posted: </strong><?php echo date('nS F, Y', $post->created_at) ?> (<?php echo Date::time_ago($post->created_at)?>)</p>
 
<p><?php echo nl2br($post->body) ?></p>

<hr />
 
<h3 id="comments">Comments</h3>
 
<?php foreach ($post->comments as $comment): ?>
 
   <p><?php echo Html::anchor($comment->website, $comment->name) ?> said "<?php echo $comment->body?>"</p>
 
<?php endforeach; ?>
 
<h3>Write a comment</h3>
 
<?php echo Form::open($post->slug) ?>
 
<div class="row">
   <label for="name">Name:</label>
   <div class="input"><?php echo Form::input('name'); ?></div>
</div>
 
<div class="row">
   <label for="website">Website:</label>
   <div class="input"><?php echo Form::input('website'); ?></div>
</div>
 
<div class="row">
   <label for="email">Email:</label>
   <div class="input"><?php echo Form::input('email'); ?></div>
</div>
 
<div class="row">
   <label for="body">Comment:</label>
   <div class="input"><?php echo Form::textarea('body'); ?></div>
</div>
 
<div class="row">
   <div class="input"><?php echo Form::submit('submit'); ?></div>
</div>
 
<?php echo Form::close() ?>