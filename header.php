<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">   
<head profile="http://gmpg.org/xfn/11">  
 
<!--
This site is built using Wordpress with
 _       ______  ______      ___     
| |     / / __ \/ ____/___  / (_)___ 
| | /| / / /_/ / /_  / __ \/ / / __ \
| |/ |/ / ____/ __/ / /_/ / / / /_/ /
|__/|__/_/   /_/    \____/_/_/\____/ 
The free Wordpress Theme for Artists
Free Software under the GPLv3 
http://wpfolio.visitsteve.com/wiki
-->   

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<!-- calling wp_head -->
<?php wp_head(); ?> 
<!-- done calling wp_head -->
<!-- calling monthly archives -->
<?php wp_get_archives('type=monthly&format=link'); ?>  
 <?php global $options;
    	foreach ($options as $value) {
   	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
   		?>
<!-- done calling monthly archives -->
  
	<title>
	<?php if ( is_page() ) { ?><?php bloginfo('name'); ?><?php wp_title('|'); ?><?php } ?>
	<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
	<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
	<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
	<?php if ( is_year() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php the_time('Y'); ?><?php } ?>
	<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php  single_tag_title("Tag Archive:", true); } } ?>
	</title>  

 <style type="text/css" media="all">
 /* CSS inserted by theme options */
	body { 
		font-family : <?php echo $WPFolio_body_font; ?>;
		color: #<?php echo $WPFolio_body_color; ?>;}
	h1,h2,h3,h4,h5,h6 {
		font-family: <?php echo $WPFolio_headline_font; ?>;}
	h1 { 
		font-size: <?php echo $WPFolio_headline_size; ?>;}
	h2,h3 {
		color: #<?php $WPFolio_highlight_color; ?>;}
	h4 {
		color: #<?php echo $WPFolio_second_color; ?>;}
	.headertext {
		visibility:<?php echo$WPFolio_visible; ?>; }
	.headertext h1 a {
		color: #<?php echo $WPFolio_highlight_color;?>; }
	.container {
		background-color: #<?php echo $WPFolio_foreground_color; ?>;
		color: #<?php echo $WPFolio_body_color; ?>;}
	.container p {
		color: #<?php echo $WPFolio_body_color; ?>; }
	a:active  {
		color: #<?php echo $WPFolio_highlight_color; ?>; }
	a:hover  {
		color: #<?php echo $WPFolio_highlight_color; ?>; }
	#content {
		font-family : <?php echo $WPFolio_body_font; ?>; }
	.title {
		font-family : <?php echo $WPFolio_body_font; ?>;}
	.nav, .widgettitle {
		font-family : <?php echo $WPFolio_body_font; ?>; 
		text-transform:<?php echo $WPFolio_text_transform ?>;}
	div.nav a {
		color: #<?php echo $WPFolio_second_color; ?>;}
	.nav a:active {
		color: #<?php echo $WPFolio_highlight_color; ?>;}
	.nav a:hover {
		color: #<?php echo $WPFolio_highlight_color; ?>;}
	div.notable-post {
		color: #<?php echo $WPFolio_body_color; ?>;}
	div.notable-post h3 a, link {
		color: #<?php echo $WPFolio_highlight_color; ?>;}
	div.notable-post a {
		color: #<?php echo $WPFolio_second_color; ?>;}
	div.notable-post a:hover {
		color: #<?php echo $WPFolio_highlight_color; ?>;}
	#sidebar h2.widgettitle {
		color: #<?php echo $WPFolio_second_color; ?>;}
	#content {
		color: #<?php echo $WPFolio_body_color; ?>; }
	#links{
		color: #<?php echo $WPFolio_highlight_color; ?>;}
	#links h1, h2 {
		color: #<?php echo $WPFolio_highlight_color; ?>;}
	#links ul {
		color: #<?php echo $WPFolio_second_color; ?>;}
	#links ul li {
		color: #<?php echo $WPFolio_second_color; ?>;}
	#links ul li ul {
		color: #<?php echo $WPFolio_second_color; ?>;}
	#links a {
		color: #<?php echo $WPFolio_second_color; ?>;}
	#links a:hover {
		color: #<?php echo $WPFolio_highlight_color; ?>;}
	div.prevnext{
		text-transform:<?php echo $WPFolio_text_transform ?>;}
	div.prevnext a:hover {
		background-color: #<?php echo $WPFolio_highlight_color; ?>;}
	div.footer {
	background-color: #<?php echo $WPFolio_foreground_color; ?>;
	border-top: solid 1px #<?php echo $WPFolio_body_backgroundcolor; ?>;}
 </style>

<!-- Superfish Support -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/superfish.css" type="text/css" media="screen"/>
<!--
Add if you want to enable the SuperFish Navbar. It will need styling! 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/superfish-navbar.css" type="text/css" media="screen"/> -->

<script type="text/javascript">
$(document).ready(function() {
$('ul.sf-menu').superfish();
});
</script>
<!-- end superfish -->



</head>   

<body <?php body_class(); ?>>  
<div class="container">  
	<div id="header">  
		<div class="headertext">   
		<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1> 		 
		<h4><?php bloginfo('description'); ?></h4>  
		</div><!-- .headertext -->
	</div><!-- #header -->

<!-- MENU  --> 
	<div class="nav">
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<?php if ( has_nav_menu( 'navbar' ) ) { ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'menu_class' => 'sf-menu sf-navbar', 'theme_location' => 'navbar' ) ); 
		} else { ?>
		<?php wp_page_menu( 'depth=1&show_home=Home&menu_class=default-navbar' );
		} ?>
		
	</div><!-- .nav -->
<!-- END MENU -->  

