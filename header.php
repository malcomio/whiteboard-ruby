<head profile="http://gmpg.org/xfn/11">
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <title><?php 
 if ( is_home() ) 
 { 
 	bloginfo('name'); ?> | <?php bloginfo('description');
 } 
 
 if ( is_search() ) 
 { ?>Search Results for <?php 
 /* Search Count */ 
 $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); echo $key; _e(' &mdash; '); echo $count . ' '; _e('articles'); wp_reset_query(); 
  } 
  
  if ( is_404() ) { 
  bloginfo('name'); ?> | 404 Nothing Found<?php } 
  
  if ( is_author() ) { 
   bloginfo('name'); ?> | Author Archives<?php } 
   
   if ( is_single() ) 
   { 
    wp_title(''); ?> | <?php 
$category = get_the_category();
echo $category[0]->cat_name;
?> | <?php bloginfo('name'); 
 } 
 if ( is_page() ) 
 { 
 bloginfo('name'); ?> | <?php 
if($category = get_the_category())
echo $category[0]->cat_name . '|';  
wp_title(''); 
 } 
 
 if ( is_category() ) { ?><?php single_cat_title(); ?> | <?php $category = get_the_category(); 
echo $category[0]->category_description; ?> | <?php bloginfo('name'); ?><?php } ?> 
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archive | <?php the_time('F, Y'); ?><?php } ?>
<?php if ( is_day() ) { ?><?php bloginfo('name'); ?> | Archive | <?php the_time('F j, Y'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php single_tag_title("", true); } } ?> | <?php bloginfo('name'); ?>
</title>
<!--  title script via ProBlogDesign.com | http://www.problogdesign.com/wordpress/automatic-seo-titles-for-all-your-pages/  -->
 <meta name="generator" content="WordPress" /> <!-- leave this for stats -->
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
 <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 <?php wp_head(); ?>	
</head>


