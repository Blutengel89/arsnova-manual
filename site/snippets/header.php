<!DOCTYPE html>

<html lang="<?php echo $site->language()->code() ?>">
<?php
  $value = "carousel";
  if (!isset($_COOKIE['view'])) {
    setcookie("view", $value);
  }
?>
<head>
<title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
  <meta charset="utf-8" />
  <meta name="description" content="<? echo $page->description()->html() ?>" />
  <meta name="keywords" content="<?= $page->keywords()->html() ?>" />
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
  <meta name="DC.Publisher" content="<?php echo $site->author()->html() ?>" />
  <meta name="DC.Description" content="<?php echo $page->description()->html() ?>" />
  <meta name="DC.Language" content="<$site->language()->code()" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <!--[if lt IE 9]> 
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php echo css("//netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css") ?>
  <?php echo css('assets/css/custom.css') ?>

</head>
<body style="max-width:100%">