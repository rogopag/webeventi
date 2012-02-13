<?php 
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
	<?php if (!is_page()){ ?>
	<div class="date">
		<p>
		<strong><?php the_time("d");?></strong>
		<span><?php the_time("m");?>/<?php the_time("y");?></span>
		<br />
		<span><?php the_time("H:i") ?></span>
		</p>
	</div>
	<?php } ?>
	<div class="contentinner">
		<?php if (!is_page()){ ?>
		<h2 class="storytitle">
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			<?php edit_post_link(__('Edit This'), "<small>", "</small>"); ?>
		</h2>
		<div class="tags">
			<?php the_tags('Tags: ', ', '); ?> 
		</div>
		<?php } ?>
		<div class="storycontent">
			<?php the_content(__('(more...)')); ?>
		</div>
	
		<div class="feedback">
			<?php if (is_single()) wp_link_pages(); ?>
			<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
		</div>
	</div>
</div>

<?php //comments_template(); // Get wp-comments.php template ?>

<?php 
endwhile;
endif; 
?>
<div class="alignleft"><?php posts_nav_link('',__('&laquo; Newer Posts'),'') ?></div>
<div class="alignright"><?php posts_nav_link('','',__('Older Posts &raquo;')) ?></div>

<?php get_footer(); ?>
