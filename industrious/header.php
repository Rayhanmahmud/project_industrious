<!DOCTYPE HTML>
<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<?php wp_head();?>

	</head>
	<body <?php body_class('is-preload');?>">

		
            
		<?php
		 // Fix #WpAdminBarmenu overlap
		 if ( is_admin_bar_showing() ) echo 
		'<style>
  		 header#header {margin-top: 32px;}
	   	 section#banner {margin-top: -22px;}
		 nav#menu {margin-top: 32px;}
		 </style>'; 
		?>
