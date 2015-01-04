<?php
  require_once('config.php');
  
  $title = 'The Blog &#8211;  Refle(X)ction';
  $headertitle = 'The <strong>Blog</strong>';
  $active = 'blog';
  
  $cssFiles[] = 'blog.css';
  $cssFiles[] = 'blog.js.css';
  
  $template = 'blog.php';
  require_once('template/template.php');
?>