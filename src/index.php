<?php
add_inline_css ('style.scss');
add_inline_css ('index.scss');
add_inline_css ('https://fonts.googleapis.com/css?family=Poiret+One');
add_inline_js ('index_expansion.js');
set_global_title ("KoFuk - TRELLIS WORK");
set_description ("KoFuk の個人的なウェブサイトです。");
doctype ();
html ();
head ();
?>
<body>
<?php page_title ('TRELLIS WORK'); ?>
<main>
    <div class="card">
        <h2>ABOUT</h2>
        <div class="description">
            こんにちは。<br>
            このサイトは KoFuk の個人的なウェブサイトです。
            <span id="more" class="more">もっと見る</span>
            <div id="omitted">
                ここ 3 年間は主に Chronoscope というグループを作って活動していたので、もし、興味がおありでしたら
                <a href="https://www.chronoscoper.com" class="inline">プロジェクトのウェブサイト</a> をご覧ください。<br>
                で、折角「もっと見る」みたいな機能つけてここで終わりというのもどうかと思うんですよ。
                余談 (?) ですが、こういう調子で他の記事なども書いていくので口調が
                癪に障るって人はあまり期待しないでください……。
            </div>
        </div>
    </div>
    <div class="card">
        <h2 class="has-expand-thumb" data-expanded="no">BLOG POSTS</h2>
        <div>
            <?php
                $articles_json = file_get_contents ("articles/articles.json");
                if ($articles_json === FALSE)
                {
                    exit (1);
                }
                $articles = json_decode ($articles_json, TRUE);
                foreach ($articles as $article):
                    if (!isset ($article['title'], $article['to'])):
                        exit (1);
                    endif
            ?>
            <a href="<?= $article['to'] ?>" class="article-list-link">
                <div class="article-list-item">
                    <?= htmlspecialchars ($article['title']) ?>
                </div>
            </a>
            <?php endforeach ?>
        </div>
    </div>
    <div class="card">
        <h2 class="has-expand-thumb" data-expanded="no">CLONE WITH GIT</h2>
        <div>
            <pre class="console">$ git clone https://github.com/kofuk/trellis.work.git</pre>
            最適化厨になったりカスタマイズ厨になったりするので実際にサーブできるようになるまで
            面倒臭くなったりします。<br>
        </div>
    </div>
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
<?php footer (); ?>
</body>
</html>
