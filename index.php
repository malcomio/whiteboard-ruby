<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<?php get_header(); ?>
<body>
<div id="container">
<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
   <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
   <p><?php bloginfo('description'); ?></p>
   <div class="post">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <p><?php the_date();?></p>
         <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

         <?php the_content(__('Read more'));?>

         <div class="postmeta">
            <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
            <p>Category <?php the_category(', ') ?> | Tags: <?php the_tags(' ', ',', ' '); ?></p>
         </div><!-- end .postmeta -->

         <?php endwhile; else: ?>
         <p>There has been an error. Please try refreshing the page.</p>
      <?php endif; ?>

      <div class="postnavigation">
         <p><?php next_posts_link('&laquo; Older Entries') ?><?php previous_posts_link(' | Newer Entries &raquo;') ?></p>
      </div> <!-- end .postnavigation -->
   </div> <!-- end .post -->

   <?php get_sidebar(); ?>
   <?php get_footer(); ?>
</div><!-- end #container -->
</body></html>