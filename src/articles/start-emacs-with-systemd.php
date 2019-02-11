<?php
require 'php-util/util.php';
add_inline_css ('style.css');
add_inline_css ('code.css');
set_global_title ('SystemdでEmacsを起動する - TRELLIS WORK');
set_description ('Emacs 23 から、Emacsにはデーモンモードが搭載されています。この記事ではEmacsを、GNU/Linuxシステムの起動と同時にデーモンとして起動する方法を説明します。');
doctype ();
html ();
head ();
?>
  <body>
    <?php page_title (); ?>
    <main>
      <div class="card">
        Emacs 23 以降の Emacs には Emacs をデーモンとして起動しておく機能があります。
        これは、Emacs の起動スクリプトが肥大化して何度も起動していたら日が暮れちゃうよ、という
        Lisp ハッカー (偏見) のための機能だと思うのですが、私はそういう機能を使わないではいられないタチなので、
        Systemd で起動する設定をしてみました。ちなみに私の Emacs は ミリ秒単位で起動します。<br>
        前置きはこれくらいにして……。<br>
        幸運にも、Systemd にはユーザーごとに (root じゃなくても) サービスを置ける機能があるんですね。
        知りませんでした。<br>
        OS は、Debian 9 で Emacs 26.1.91 ですが、適当にマスターブランチをビルドしたやつでも問題なく動きました。<br>
        <code>~/.config/systemd/user</code> というディレクトリを作って <code>emacs.service</code>
        というファイルに以下の内容を書いてください。
        <pre><code><span class=keyword>[Unit]</span>
<span class=keyword>Description</span>=<span class=string>Emacs text editor</span>
<span class=keyword>Documentation</span>=<span class=string>info:emacs man:emacs(1) https://gnu.org/software/emacs/</span>

<span class=keyword>[Service]</span>
<span class=keyword>Type</span>=<span class=string>simple</span>
<span class=keyword>ExecStart</span>=<span class=string>/usr/local/bin/emacs --fg-daemon</span>
<span class=keyword>ExecStop</span>=<span class=string>/usr/bin/local/emacsclient --eval "(kill-emacs)"</span>
<span class=keyword>Environment</span>=<span class=string>SSH_AUTH_SOCK=%t/keyring/ssh</span>
<span class=keyword>Restart</span>=<span class=string>on-failure</span>

<span class=keyword>[Install]</span>
<span class=keyword>WantedBy</span>=<span class=string>default.target</span></code></pre>
        その後で、以下のコマンドで有効化します。
        <pre><code>$ systemctl user --enable emacs</code></pre>
        ユーザー権限で動くので <code>sudo</code> はつけません。
        うまく動かない場合は Emacs がインストールされている場所が違う可能性があるので
        <pre><code>$ which emacs</code></pre>
        を実行して適宜修正してください。
      </div>
    </main>
    <?php footer (); ?>
  </body>
</html>
