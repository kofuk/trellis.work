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
?>
    <!doctype html>
<?php
}

function html (string $lang = 'ja')
{
?>
    <html lang="<?= $lang; ?>">
<?php
}

$INLINE_CSS = [];
$INLINE_JS = [];

function add_inline_css (string $name)
{
    global $INLINE_CSS;
    array_push ($INLINE_CSS, $name);
}

function add_inline_js (string $name)
{
    global $INLINE_JS;
    array_push ($INLINE_JS, $name);
}

function head (string $title = NULL)
{
    global $SITE_NAME;
    global $SITE_DESC;
    global $INLINE_CSS;
    global $INLINE_JS;
    if ($title === NULL)
    {
        global $GLOBAL_TITLE;
        $title =  $GLOBAL_TITLE;
    }
?>
    <head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $title ?></title>
    <meta name="theme-color" content="#303030">
    <link rel="icon" href="/images/icon_192.png" sizes="192x192">
    <?php if ($SITE_DESC !== ''): ?>
        <meta name="description" content="<?= $SITE_DESC ?>">
        <meta property="og:description" content="<?= $SITE_DESC ?>">
        <meta property="twitter:description" content="<?= $SITE_DESC ?>">
    <?php endif ?>
    <meta property="og:site_name" content="<?= $SITE_NAME ?>">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:image" content="/images/me.png">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="<?= $title ?>">
    <meta property="twitter:site" content="@man_2_fork">
    <link rel="manifest" href="/manifest.json">
    <?php if (count ($INLINE_CSS) > 0): ?>
        <style>
            <?php
                foreach ($INLINE_CSS as $f):
                    echo file_get_contents ("inline-res/$f");
                endforeach
            ?>
        </style>
    <?php endif ?>
    <?php if (count ($INLINE_JS) > 0): ?>
        <script>
            <?php foreach ($INLINE_JS as $f): ?>
                <?= file_get_contents ("inline-res/$f") ?>
            <?php endforeach ?>
        </script>
    <?php endif ?>
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
    <h1 id="pageTitle"><?= $title ?></h1>
<?php
}

function footer ()
{
?>
    <footer class="description">
        &copy; 2019, Koki Fukuda&lt;ko.fu.dev (at) gmail.com&gt;
        <div id="footerNote">
            特に記載がない場合はページの内容は CC BY-SA の条件で使用可能です。
        </div>
    </footer>
<?php
}

function inline_png (string $name, $attrs = NULL)
{
    $src = file_get_contents ("inline-res/images/$name");
    if ($src === FALSE)
    {
        exit (1);
    }
?>
    <img src="data:image/png;base64,<?= base64_encode ($src) ?>"
        <?php
            if ($attrs !== NULL)
            {
                foreach ($attrs as $k => $v)
                {
                    echo "{$k}=\"{$v}\" ";
                }
            }
        ?>
    ><?php /* img */ ?>
<?php
}
