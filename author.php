<?php
	include('header.php');
	include('sidebar.php');
?>
<section id="main">
<?php
	if (have_posts()) {
?>
	<ul id="postsindex">
<?php
	while (have_posts()) {
		the_post();
?>
		<li id="post<?php echo the_ID(); ?>">
				<span class="date"><?php the_time('d. m. Y'); ?></span>
				<a href="<?php the_permalink(""); ?>"><h1 class="title"><?php the_title(); ?></h1></a>
				<div class="content"><?php echo strip_tags(get_the_content('(...)')); ?></div>
		</li>
<?php
	}
?>
	</ul>
<?php
	} else {
?>
	<article>
		<p><?php _e('Žádné články neodpovídají zadaným kritériím.'); ?></p>
	</article>
<?php
	}
?>
	<div class="counter">
<?php
	$current = get_query_var( 'paged' );
	if ($current == 0) { $current = 1; }
	echo paginate_links(array(
		'base' => str_replace('91919', '%#%', get_pagenum_link(91919)),
		'format' => 'page/%#%',
		'total' => ceil($wp_query->found_posts / get_settings('posts_per_page')),
		'current' => absint( $current ),
		'show_all' => false,
		'prev_next' => true,
		'prev_text' => __('&laquo; Předchozí'),
		'next_text' => __('Další &raquo;'),
		'end_size' => 3, 'mid_size' => 5,
		'type' => 'list', 'add_args' => false,
		'add_fragment' => ''
	));
?>
	</div>
</section>
<?php
	include('footer.php');
?>