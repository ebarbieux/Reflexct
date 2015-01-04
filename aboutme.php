<?php
  require_once('config.php');
  
  $title = 'About me &#8211;  Refle(X)ction';
  $headertitle = '<strong>About</strong> me';
  $active = 'about';
  $subtitle = '<h2 class="cowboy">Hello, je me prenomme <strong>Ellen</strong></h2>';
  $cssFiles[] = 'aboutme.css';
  
  $template = 'aboutme.php';
  require_once('template/template.php');
?>