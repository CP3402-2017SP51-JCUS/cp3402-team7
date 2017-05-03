<html>
<head>
<title>Fresh Juice Singapore</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<style>
#header
{
  background: url("<?php bloginfo('stylesheet_directory'); ?>/theme_images/fresh_juice.png")
  repeat bottom center;
}
/*
#icon
{
  height: 200px;
  width: 200px;
  background: url("<?php bloginfo('stylesheet_directory'); ?>/theme_images/icon.png");
}
*/
</style>
</head>
<body>
<div id="wrapper">
  <div id="header">
   <!-- <div id="icon"> </div>  //-->
      <div class="header_title">
       <h1>
        <a href="<?php echo get_option('home'); ?>">
           <?php bloginfo('name'); ?></a>
       </h1>
      </div>
       <div class="description">
         <?php bloginfo('description'); ?>
       </div>
    <nav class="skew-menu">
      <?php wp_nav_menu( array( 'theme_location' => 'skew-menu' ) ); ?>
    </nav>
  </div>
</div>
