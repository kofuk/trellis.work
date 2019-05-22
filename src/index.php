<div class="card">
  <h2>ABOUT</h2>
  <p>
    <img
        data-src="https://assets.trellis.work/images/icon_192.png"
        data-delayed="true"
        align="left"
        id="avatar">
    こんにちは。<br>
    このサイトは KoFuk の個人的なウェブサイトです。
    ここ 3 年間は主に Chronoscope というグループを作って活動していたので、もし、興味がおありでしたら
    <a href="https://www.chronoscoper.com" class="inline">プロジェクトのウェブサイト</a> をご覧ください。<br>
    で、折角「もっと見る」みたいな機能つけてここで終わりというのもどうかと思うんですよ。
    とか言っていたにも関わらず「もっと見る」を消したってのが最近のChangeLogです。
    余談 (?) ですが、こういう調子で他の記事なども書いていくので口調が
    癪に障るって人はあまり期待しないでください……。
  </p>
</div>
<div class="card">
  <h2>BLOG POSTS</h2>
  <div>
    <?php
    $articles_json = file_get_contents ("articles/articles.json");
    if ($articles_json === FALSE)
        exit (1);
    $articles = json_decode ($articles_json, TRUE);
    foreach ($articles as $article)
    {
        if (!isset ($article['title'], $article['to']))
            exit (1);
    ?>
      <a href="<?= $article['to'] ?>" class="article-list-link">
        <div class="article-list-item">
          <?= htmlspecialchars ($article['title']) ?>
        </div>
      </a>
    <?php } ?>
  </div>
</div>
<div class="card">
  <h2>TRASH CAN</h2>
  <div>
    ごみ箱です。適当に作ったものなどを載せようと思います。
    不定期で焼却処分される可能性があります。<br>
    <a href="/trash.html" class="inline">ごみ箱をあさる</a>
  </div>
</div>
<div class="card">
  <h2 class="has-expand-thumb" data-expanded="no">CLONE WITH GIT</h2>
  <div>
    <pre class="console">$ git clone https://github.com/kofuk/trellis.work.git</pre>
    同じURLにアクセスすることでリポジトリをブラウザで閲覧できます。(GitHubだし当たり前だよなぁ)<br>
    最適化厨になったりカスタマイズ厨になったりするので実際にサーブできるようになるまで
    面倒臭くなったりします。<br>
  </div>
</div>
<div class="card">
  <h2 class="has-expand-thumb" data-expanded="no">MISC</h2>
  <div>
    <img src="https://static.fsf.org/nosvn/associate/crm/2890875.png"><br>
  </div>
</div>
