<?php $github_link = get_field('github', 'option') ?>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ios -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!--  Browser theme colour schema -->
	<meta name="theme-color" content="#B5225D">
  <title><?php wp_title(); ?></title>
  <link rel="icon" type="image/png" href="<?= get_template_directory_uri() . '/assets/images/favicon.png' ?>"/>

	<?php wp_head(); ?> 
</head>

<body <?php body_class() ?>>
<a class="skip-to-main-content" href="#main-content">Skip to main content</a>

<header class="header bg-dark-grey">
  <div class="header-inner default-width">
  <a class="header-home" href="<?= site_url() ?>" title="Go Home" ><?= file_get_contents(get_template_directory() . '/assets/images/icons/home.svg');?></a>
  <?php 
    
    $nav_menu_args = array(
      'theme_location'  => 'header-menu',
      'menu'            => 'header-menu',
      'container'       => 'nav',
      'container_class' => 'header-desktop-menu desktop',
      'depth'           => 0,
     );
     
     wp_nav_menu( $nav_menu_args );
  
  ?>
  
    <?php 
    
    $nav_menu_args = array(
      'theme_location'  => 'header-menu',
      'menu'            => 'header-mobile-menu',
      'container'       => 'nav',
      'container_class' => 'header-mobile-menu mobile',
      'depth'           => 0,
     );
     
     wp_nav_menu( $nav_menu_args );
  
    ?>
    <?php if(!empty($github_link)): ?>
    <a href="<?= $github_link ?>" title="Go to GitHub page" target="_blank" ><?= file_get_contents(get_template_directory() . '/assets/images/icons/github.svg');?></a>
    <?php endif; ?>

    <button aria-expanded="false" aria-label="Open the Navigation Menu" class="hamburger hamburger--spring mobile">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

  </div>
</header>