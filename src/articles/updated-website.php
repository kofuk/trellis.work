<?php
require 'php-util/util.php';
add_inline_css ('style.css');
add_inline_css ('code.css');
set_global_title ('ウェブサイトをいじった話 - TRELLIS WORK');
set_description ('ウェブサイトをいじった結果良くなったことと辛くなったことについて書きます。');
doctype ();
html ();
head ();
?>
  <body>
    <?php page_title (); ?>
    <main>
      <div class="card">
      ウェブサイトをいじりました。まあこれはタイトルを見れば分かるとおもうのですが、
      具体的に何をやったのかを書こうと思います。
      <h2>あらかじめHTMLに変換するようにした</h2>
      このサイトは最初 HTML だけで書いていて、その後 PHP を使うようになったのですが、
      PHP で動的に生成している、もしくは生成する必要があるところが特に見当たらなかったので
      「じゃああらかじめ PHP を実行して HTML にしておけばいいじゃん」という軽率な考えで、
      あらかじめ HTML に変換しておくようにしました。<br>
      とはいっても、PHP の実行が速度のネックになるのって割と裏で DB と通信してたり
      PHP が魔術みたいだったりというサイトだと思うので、そもそも裏でほぼ何も PHP にやらせてなかった
      ので特に速度の面での優位性はないです。強いていうなら <code>Etag</code> が使えるようになった
      ことくらいかな。それでもページを送り返すことで目立って早くなるほどページが大きくないので
      ほとんど優位性はないです。
      <h2>CSSやJSをインライン化した</h2>
      なぜインラインにしたかといえば、それは Google の PageSpeed Insights がスコアを微妙にあげてくれるからです。
      やっぱり、点数をつけられると上げたくなっちゃうじゃないですか (?)。
      <h2>辛くなった点</h2>
      ローカルで、ブラウザで気軽に見られなくなったことです。これが非常に辛い。<br>
      あとは、デプロイはサーバーで Cron のジョブを動かすという適当な方法でやっていたので
      設定の変更を余儀なくされたということです。10 秒くらい溶かしました。
      <h2>今後やること</h2>
      article の内容と PHP のファイルを分離する。更新が非常に面倒なので。やっぱり HTML は人が書くものじゃないな、
      とまでは思いませんが、Lisp 並に括弧だらけ (ネストはしないですが) になるので閉じたりするのが面倒臭いですね。
      </div>
    </main>
    <?php footer (); ?>
  </body>
</html>
