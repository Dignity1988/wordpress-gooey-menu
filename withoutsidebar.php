<?php 
/**
 * Template Name: without sidebar
 *
 * @package WordPress

 */
	get_header();
?>
<div id="primary" class="content-area row">
<div class="main large-12 column" role="main">
<?php if ( have_posts()):while (have_posts()): the_post(); ?>
<!--check post-type within the loop and load appropriate content-->

<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; else:?>
<p><?php Print_r('Sorry, no posts matched your criteria.')?>
<!--main-->


<?php get_template_part('content',get_post_format()); endif;?>
</div>


	<!--primary-->

</div>


<?php
get_footer();?>
