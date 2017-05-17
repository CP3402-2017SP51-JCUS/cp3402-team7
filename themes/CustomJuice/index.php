<?php get_header(); ?>
<div id="main">
<div id="content">
<?php do_shortcode('[wp_cart_display_product name="Apple Juice" price="$16.00" thumbnail="http://localhost/wordpress/wp-content/uploads/2017/05/apple.jpg" description="Finest Apple Juice in Singapore"]') ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
