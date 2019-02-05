<?php

$GLOBAL_TITLE = 'TRELLIS WORK';

function set_global_title (string $title)
{
    global $GLOBAL_TITLE;
    $GLOBAL_TITLE = $title;
}

function doctype ()
{
    echo '<!doctype html>';
}

function html (string $lang = 'en')
{
?>
<html lang="<?= $lang; ?>">
<?php
}

function head (string $title = NULL)
{
    if ($title === NULL)
    {
        global $GLOBAL_TITLE;
        $title =  $GLOBAL_TITLE;
    }
    $type = rand (0, 1);
?>
<head prefix="og: http://ogp.me/ns#">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= $title ?></title>
  <?php
  if ($type === 0):
  ?>
  <link rel="stylesheet" href="/style-modern.css">
  <link rel="stylesheet" href="/code-modern.css">
  <meta name="theme-color" content="#000000">
  <?php
  else:
  ?>
  <link rel="stylesheet" href="/style-legacy.css">
  <link rel="stylesheet" href="/code-legacy.css">
  <meta name="theme-color" content="#ffff99">
  <?php
  endif
  ?>
  <link rel="icon" href="/images/icon_192.png" sizes="192x192">
  <script src="/script.js" async></script>
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:image" content="/images/icon_192.png">
</head>
<?php
}

function page_title (string $title = NULL)
{
    if ($title === NULL)
    {
        global $GLOBAL_TITLE;
        $title = $GLOBAL_TITLE;
    }
?>
<h1 id="pageTitle"><?= $title; ?></h1>
<?php
}

function footer ()
{
?>
<footer class="description">
  &copy; 2019, Koki Fukuda&lt;ko.fu.dev (at) gmail.com&gt;
  <div id="footerNote">
      Contents but noted are available under the condition of CC BY-SA.
  </div>
</footer>
<?php
}
