<html>
<head>
	<meta charset="utf-8">
	<title>Tuto Theme</title>
	<?php wp_head(); ?>
</head>
<?php if( is_front_page() ):
	$awesome_classes=array('awesome_class','my_class');
else:
	$awesome_classes=array('no_awesome_class');
endif;
?>


<body <?php body_class($awesome_classes);?> >

<img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>" alt="" />

<?php wp_nav_menu(array('theme_location'=>'primary')); ?>


