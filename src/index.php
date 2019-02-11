<?php
require 'php-util/util.php';
add_inline_css ('style.css');
add_inline_js ('index_expansion.js');
set_global_title ("KoFuk - TRELLIS WORK");
set_description ("KoFuk の個人的なウェブサイトです。小さい個人的なプロジェクトの Git リポジトリを置いたり、すこしずつ記事を書いたりしています。");
doctype ();
html ();
head ();
?>
  <body>
    <?php page_title ('TRELLIS WORK'); ?>
    <main>
      <div class="card">
	<h2>このサイトについて</h2>
	<div class="description">
	  こんにちは。<br>
	  このサイトは KoFuk の個人的なウェブサイトです。<br>
          このサイトは当分の間、GitHub に置くまでもないくらい小さな (完成するかも分らない)
          プロジェクトの Git リポジトリを置くのに使うつもりです。
	  <span id="more" class="more">もっと見る</span>
	  <div id="omitted" class="omit">
          ここ 3 年間は主に Chronoscope というグループを作って活動していたので、もし、興味がおありでしたら
          chronoscoper.com をご覧ください。<br>
          で、折角「もっと見る」みたいな機能つけてここで終わりというのもどうかと思うんですよ。
          私がこのドメインを取った経緯について少しここに書きたいと思います。<br>
          ある日私はある日本のレジストラのサイトを訪れたんですね。これは既に取得していた他のドメインの管理を
          するためです。すると、「.work 1円」みたいな広告が目に飛び込んできたんですよ。まあ
          .work 1円ってかれこれ 1 年以上続いてる気がするんですが。で、私は思ったんですよ。この work
          という単語を生かしてイカしたドメインをつくってやろう、なんちって。<br>
          すると、世界は広いもので、すでに私と同じことを考えた人がたくさんいたんですね。
          まあそのくらい狭ーい世界でも何人もの人が思いつきそうな話ではあるんですが。
          でですよ、辞書をめくって (というか電子辞書だった) /work$/ にマッチしそうな単語を
          探したんですが、なにせ世界は広いもので、取り尽くされてるんですよ。結局あったのは
          trellis-work ともう一個マイナーなやつだけでした。trellis work とかそのとき初めて聞いたんだけど。<br>
          で、しばらく放置していたんですが、ちょうどそのときに GCE がショボいやつだと無料だということを知ったので、
          それを利用してサイトを置いたという次第です。<br>
          GCE 使ってるなんてことは逆引きすればすぐわかりますからねぇ、
          私が固定の IP アドレスにするのを忘れていたので。<br>
          余談 (?) ですが、こういう調子で他の記事なども書いていくので口調が
          癪に障るって人はあまり期待しないでください……。
	  </div>
	</div>
	<hr>
	<a href="/cgit/">cgit でリポジトリを見る</a>
      </div>
      <div class="card">
        <h2>記事ども</h2>
        <ul>
          <li>
            <a href="/articles/start-emacs-with-systemd.html">Systemd で Emacs を起動する</a>
          </li>
          <li>
            <a href="/articles/updated-website.html">ウェブサイトをいじった話</a>
          </li>
        </ul>
      </div>
      <div class="card">
	<h2>リンク</h2>
	<a href="https://github.com/kofuk">GitHub</a><br>
	<a href="https://qiita.com/kofuk">Qiita</a><br>
	<a href="https://twitter.com/man_2_fork">Twitter</a><br>
      </div>
      <div class="card">
	<h2>Git でこのサイトを clone する</h2>
	<pre class="console">$ git clone https://trellis.work/cgit/trellis.work.git</pre>
        最適化厨になったりカスタマイズ厨になったりするので実際にサーブできるようになるまで
        面倒臭くなったりします。<br>
        しかし、cgit に HTTP 経由で clone させる機能がついてるってこと、実際に clone してみて初めて気づきました。
      </div>
    </main>
    <?php footer (); ?>
  </body>
</html>
