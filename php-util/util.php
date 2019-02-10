<?php
$SITE_NAME = 'TRELLIS WORK';
$GLOBAL_TITLE = 'TRELLIS WORK';
$SITE_DESC = '';

function set_global_title (string $title)
{
    global $GLOBAL_TITLE;
    $GLOBAL_TITLE = $title;
}

function set_description (string $description)
{
        global $SITE_DESC;
        $SITE_DESC = $description;
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
    global $SITE_NAME;
    global $SITE_DESC;
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
  <?php
  if ($SITE_DESC !== ''):
  ?>
  <meta name="description" content="<?= $SITE_DESC ?>">
  <meta property="og:description" content="<?= $SITE_DESC ?>">
  <meta property="twitter:description" content="<?= $SITE_DESC ?>">
  <?php
  endif
  ?>
  <meta property="og:site_name" content="<?= $SITE_NAME ?>">
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:image" content="/images/me.png">
  <meta property="twitter:card" content="summary">
  <meta property="twitter:title" content="<?= $title ?>">
  <meta property="twitter:site" content="@man_2_fork">
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
