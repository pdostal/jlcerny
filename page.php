<?php
	include('header.php');
?>
<section id="main" class="<?php echo get_post_type( get_the_ID() ); ?>">
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
	<article>
		<div class="content"><?php the_content(__('(Whole article...)')); ?></div>
	</article>
<?php } } else { ?>
	<article>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	</article>
<?php } ?>
</section>
<?php
	include('footer.php');
?>