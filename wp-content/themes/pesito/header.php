<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php if(!is_front_page()){?>style=""<?php } ?>>