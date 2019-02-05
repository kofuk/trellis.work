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
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= $title ?></title>
  <?php
  if ($type === 0):
  ?>
  <link rel="stylesheet" href="/style-modern.css">
  <link rel="stylesheet" href="/code-modern.css">
  <?php
  else:
  ?>
  <link rel="stylesheet" href="/style-legacy.css">
  <link rel="stylesheet" href="/code-legacy.css">
  <?php
  endif
  ?>
  <script src="/script.js" async></script>
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
