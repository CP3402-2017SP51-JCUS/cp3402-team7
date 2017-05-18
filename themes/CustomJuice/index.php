<?php get_header(); ?>
<div id="main">
<?php function p_shortcode( $atts, $content = null) {
  return '<span class="custom_p"?'.$content.'</span>';}
  add_shortcode('custom_p', 'p_shortcode'); ?>
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
