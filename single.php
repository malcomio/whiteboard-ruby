<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<?php get_header(); ?>
<body>
<div id="container">
   <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
   <p><?php bloginfo('description'); ?></p>
   <div class="post" id="post-<?php the_ID(); ?>">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h2><a href="<?php echo get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
         <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

         <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

         <div id="postmeta">
            <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
            <p>Categories <?php the_category(', ') ?> | Tags: <?php the_tags(' ', ', ', ' '); ?></p>

            <p>You can follow any follow up comments to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.</p>
         </div><!-- end #postmeta -->

         <?php comments_template(); ?>
         <?php endwhile; else: ?>
         <p>There has been an error. Please try refreshing the page.</p>
      <?php endif; ?>
   </div><!-- end #post -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div><!-- end #container -->
</body>
</html>