<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name') ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#57a2d7">
    <meta name="msapplication-TileColor" content="#57a2d7">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:url" content=<?php get_permalink(); ?> />
    <meta property="og:title" content=<?php get_the_title(); ?> />
    <meta property="og:site_name" content=<?php bloginfo('name') ?> />
    <meta property="og:description" content="Our sports medicine and rehab specialists are here to help you feel better, not just today, but for the rest of your life." />
    <meta property="og:image" content="http://synergy.studiocartogram.com/wp-content/uploads/2017/10/IMG_7100.jpg" />
    <?php
    $formid = get_sub_field('form');
    gravity_form_enqueue_scripts( $formid, false );?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('site scene js-is-loading'); ?> >
