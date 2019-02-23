<?php
add_inline_css ('style.scss');
add_inline_css ('code.scss');
add_inline_css ('https://fonts.googleapis.com/css?family=Poiret+One');
doctype ();
html ();
head ();
?>
<body>
    <?php page_title (); ?>
    <main>
        <div class="card">
            <?php
                if (!isset ($ARTICLE_FILENAME))
                {
                    exit (1);
                }
                include $ARTICLE_FILENAME;
            ?>
        <hr>
            最終更新: <?= $LAST_MOD ?>
        </div>
    </main>
    <?php footer (); ?>
</body>
</html>
