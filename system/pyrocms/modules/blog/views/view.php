<div class="blog_post">
	<!-- Post heading -->
	<div class="post_heading">
		<h2><?php echo $post->title; ?></h2>
		<p class="post_date"><?php echo lang('blog_posted_label');?>: <?php echo format_date($post->created_on); ?></p>
		<?php if($post->category->slug): ?>
		<p class="post_category">
			<?php echo lang('blog_category_label');?>: <?php echo anchor('blog/category/'.$post->category->slug, $post->category->title);?>
		</p>
		<?php endif; ?>
	</div>
	<div class="post_body">
		<?php echo stripslashes($post->body); ?>
	</div>
</div>
<?php echo display_comments($post->id); ?>
