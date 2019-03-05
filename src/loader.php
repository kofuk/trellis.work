<?php
include 'php-util/util.php';
include 'php-util/die-on-error.php';

if (count ($argv) < 2)
{
    echo 'Filename must be given.';
    exit (1);
}

$pages = json_decode (file_get_contents (__DIR__ . '/pages.json'), true);
if ($pages === FALSE)
{
    fwrite (STDERR, 'Cannot load src/pages.json');
    exit (1);
}

$name = preg_replace ('?' . __DIR__ . '/?', '', $argv[1]);

$page = NULL;
foreach ($pages as $e)
{
    if ($e['file'] === $name)
    {
        $page = $e;
        break;
    }
}
if ($page === NULL)
{
    fwrite (STDERR, '"' . $name . '"' . ' is not registered to src/pages.json');
    exit (1);
}

$type = $page['type'];

$page_title = $nav_title = $page['page_title'];
if (isset ($page['nav_title'])) $nav_title = $page['nav_title'];

$description = $page['description'];

$inline_css = [];
if (isset ($page['style_sheets'])) $inline_css = $page['style_sheets'];
array_push ($inline_css, 'style.scss');
array_push ($inline_css, 'https://fonts.googleapis.com/css?family=Poiret+One');

$inline_js = [];
if (isset ($page['scripts'])) $inline_js = $page['scripts'];

$lang = 'ja';
if (isset ($page['lang'])) $lang = $page['lang'];

$lastmod = '';
if (isset ($page['lastmod'])) $lastmod = $page['lastmod'];
else $lastmod = date ('Y/m/d');

include __DIR__ . '/template.php';
