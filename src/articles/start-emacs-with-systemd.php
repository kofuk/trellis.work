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

<?php include_code ('articles/start-emacs-with-systemd/emacs-service.ini'); ?>

その後で、以下のコマンドで有効化します。
<pre><code>$ systemctl user --enable emacs</code></pre>
ユーザー権限で動くので <code>sudo</code> はつけません。
うまく動かない場合は Emacs がインストールされている場所が違う可能性があるので
<pre><code>$ which emacs</code></pre>
を実行して適宜修正してください。
