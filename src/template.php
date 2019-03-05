<!doctype html>
<html lang="<?= $lang; ?>">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="dns-prefetch" content="//fonts.gstatic.com">
    <meta name="dns-prefetch" content="//assets.trellis.work">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $page_title; ?></title>
    <meta name="theme-color" content="#303030">
    <link rel="icon" href="<?= asset ('images/icon_192.png'); ?>" sizes="192x192">
    <meta name="description" content="<?= $description; ?>">
    <meta property="og:description" content="<?= $description; ?>">
    <meta property="twitter:description" content="<?= $description; ?>">
    <meta property="og:site_name" content="TRELLIS WORK">
    <meta property="og:title" content="<?= $page_title; ?>">
    <meta property="og:image" content="<?= asset ('images/me.png'); ?>">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="<?= $page_title; ?>">
    <meta property="twitter:site" content="@man_2_fork">
    <link rel="manifest" href="/manifest.json">
    <?php
        if (count ($inline_css) > 0)
        {
            echo '<style>';
            foreach ($inline_css as $f)
            {
                if (preg_match ('@^https?://@', $f) === 1)
                {
                    safe_passthru ("bash -c '../tmp/dart-sass/sass -s compressed <(curl $f)'");
                }
                else
                {
                    safe_passthru ("../tmp/dart-sass/sass -s compressed inline-res/$f");
                }
            }
            echo '</style>';
        }
        if (count ($inline_js) > 0)
        {
            echo '<script>';
            foreach ($inline_js as $f)
            {
                if (preg_match ('@^https?://@', $f) === 1)
                {
                    echo file_get_contents ($f);
                }
                else
                {
                    safe_passthru ("java -jar ../bin/closure-compiler.jar inline-res/$f");
                }
            }
            echo '</script>';
        }
    ?>
</head>
<body>
    <h1 id="pageTitle"><?= $nav_title; ?></h1>
    <main>
        <?php
            if ($type === 'regular') include __DIR__ . '/' . $name;
            else if ($type === 'article') include __DIR__ . '/articles/template.php';
            else exit (1);
        ?>
    </main>
    <div id="social-section">
        <a href="mailto:ko.fu.dev+website@gmail.com">
            <?php inline_png ('email.png', ['class'=>'social-logo', 'title'=>'Mail']) ?>
        </a>
        <a href="https://github.com/kofuk">
            <?php inline_png ('github.png', ['class'=>'social-logo', 'title'=>'GitHub']) ?>
        </a>
        <a href="https://twitter.com/man_2_fork">
            <?php inline_png ('twitter.png', ['class'=>'social-logo', 'title'=>'Twitter']) ?>
        </a>
        <a href="https://qiita.com/kofuk">
            <?php inline_png ('qiita.png', ['class'=>'social-logo', 'title'=>'Qiita']) ?>
        </a>
        <a href="https://mstdn.jp/@kofuk">
            <?php inline_png ('mastodon.png', ['class'=>'social-logo', 'title'=>'Mastodon']) ?>
        </a>
    </div>
    <footer class="description">
        &copy; 2019, Koki Fukuda
        <div id="footerNote">
            特に記載がない場合はページの内容は CC BY-SA の条件で使用可能です。
        </div>
    </footer>
    <a href="#"><div id="topThumb">BACK TO TOP</div></a>
</body>
</html>
