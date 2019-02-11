<?php
require 'php-util/util.php';
require 'php-util/article.php';
set_global_title ('SystemdでEmacsを起動する - TRELLIS WORK');
set_description ('Emacs 23 から、Emacsにはデーモンモードが搭載されています。この記事ではEmacsを、GNU/Linuxシステムの起動と同時にデーモンとして起動する方法を説明します。');
$ARTICLE_FILENAME = 'articles/start-emacs-with-systemd/article.php';

include 'articles/template.php';
