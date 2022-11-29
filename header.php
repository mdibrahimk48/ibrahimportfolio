<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ibrahimportfolio
 */

	?>

	<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name="description" content="Start your development with JohnDoe landing page.">
			<meta name="author" content="Devcrud">
			<title>IbrahimKhalil Landing page | Software Engineer</title>
			<!-- font icons -->
			<?php wp_enqueue_style( 'fontstyle', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css', array(), null, 'all'); ?>
			<!-- <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css"> -->
			
			
			<!-- Bootstrap + JohnDoe main styles -->
			<?php wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/css/johndoe.css', array(), null, 'all'); ?>
			<!-- <link rel="stylesheet" href="assets/css/johndoe.css"> -->

			<?php wp_head(); ?>
		</head>

	<?php

?>
