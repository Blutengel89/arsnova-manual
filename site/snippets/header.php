<!DOCTYPE html>
<?php
  if (!isset($_COOKIE['view'])) {
    cookie::set('view', 'carousel');
  }
?> 
<html lang="<?php echo $site->language()->code() ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta charset="utf-8" />

  <meta name="description" content="<? echo $page->description()->html() ?>" />
  <meta name="keywords" content="<?= $page->keywords()->html() ?>" />
  <meta NAME="ROBOTS" CONTENT="NOYDIR,NOODP" />

  <meta property="og:site_name" content="TEXNIQ" />
  <meta property="og:title" content="<?php echo $page->title()->html() ?>" />
  <meta property="og:type" content="<?php echo $page->type() ?>" />
  <meta property="og:url" content="<?php echo $page->url() ?>" />
  <meta property="og:image" content="<?php echo url('assets/images/logo.svg'); ?>" />
  <?php 
    foreach($site->languages() as $language) :
      if(($site->language() == $language)) : ?>
        <meta property="og:locale" content="<?php echo $language->locale() ?>" />   
      <?php else : ?>
        <meta property="og:locale:alternate" content="<?php echo $language->locale() ?>" />
      <?php endif; 
    endforeach ?>
  <meta property="og:description" content="<?php echo $page->description() ?>" />



  <meta name="DC.Title" content="<?php echo $page->title()->html() ?> | <?php echo $site->title()->html()  ?>" />
  <meta name="DC.Creator" content="<?php echo $site->author()->html() ?>" />
  <meta name="DC.Rights" content="<?php echo $site->author()->html()  ?>" />
  <meta name="DC.Publisher" content="<?php echo $site->author()->html() ?>" />
  <meta name="DC.Description" content="<?php echo $page->description()->html() ?>"/ >
  <meta name="DC.Language" content="<$site->language()->code()" />

  <meta http-equiv="Cache-control" content="no-store" />
  <meta http-equiv="cleartype" content="on" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <script>
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?= url('feed') ?>" />  
  <link rel="shortcut icon" href="<?php echo url() ?>/assets/images/favicon.ico" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo url() ?>/assets/images/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo url() ?>/assets/images/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo url() ?>/assets/images/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo url() ?>/assets/images/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo url() ?>/assets/images/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo url() ?>/assets/images/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo url() ?>/assets/images/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo url() ?>/assets/images/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url() ?>/assets/images/apple-touch-icon-180x180.png" />
  <link rel="icon" type="image/png" href="<?php echo url() ?>/assets/images/favicon-192x192.png" sizes="192x192" />
  <link rel="icon" type="image/png" href="<?php echo url() ?>/assets/images/favicon-160x160.png" sizes="160x160" />
  <link rel="icon" type="image/png" href="<?php echo url() ?>/assets/images/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php echo url() ?>/assets/images/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo url() ?>/assets/images/favicon-32x32.png" sizes="32x32" />
  <meta name="msapplication-TileColor" content="#e64010" />
  <meta name="msapplication-TileImage" content="<?php echo url() ?>/assets/images/mstile-144x144.png" />
  <meta name="msapplication-config" content="<?php echo url() ?>/assets/images/browserconfig.xml" />
  <!--[if lt IE 9]> 
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php echo css("//netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css") ?>
  <?php echo css('assets/css/custom.css') ?>
  <?php echo css('assets/arsnova/style.css') ?>

</head>
<body>