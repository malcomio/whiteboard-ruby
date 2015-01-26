<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<?php get_header(); ?>
<body>
<div id="container">

<div class="post">
 <h2>Error 404 - Not Found</h2>
 <p><strong>We're very sorry, but that page doesn't exist or has been moved.</strong><br />
 Please make sure you have the right URL.</p>
 <p>If you still can't find what you're looking for, try using the search form below.</p>
 <p>We're sorry for any inconvenience.</p>

 <div id="searchform">
   <?php include (TEMPLATEPATH . '/searchform.php'); ?>
 </div><!-- end #searchform -->
</div> <!-- end .post -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div><!-- end #container -->
</body>
</html>