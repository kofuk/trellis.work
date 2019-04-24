<div class="card">
  ごみ箱と書いているのに訪問していただいてありがとうございます (これは煽ってるわけではないです)。ごみの山でもがっかりしないでください。<br>
  だいたい GitHub の kofuk/experiment に入ってるやつです。このリポジトリは GPL 3.0 ってことになってるので、ここに貼ったリンク先のコードはだいたい GPL になると思います。ここに書くのは BLOG POST という分類で書くより「内容がないよー」な感じでもよさそうなので楽だなと思いました。まあ今日作ったページなので今後どうなるか分からないですが。

  <h2>SecureScreen　(Androidアプリ)</h2>
  Android で画面は表示されてるけど操作はできないみたいな状況を作りたいときに使えるやつです。最初は1時間程度で雑にリリースしたんですが、なんでか海外の方にたくさんダウンロードいただいたりしたので調子に乗って何度か更新したりしました。<br>
  これは内輪以外で使うアプリを作るとき (っていうとほとんどのケースになると思うのですが) 実装上での制約とか最初作ったときの意図とかを Google Play の掲載情報じゃ伝えづらいので、そういったところでレビューで怒られたりしました。具体的にどういう状況かと言うと、あのアプリは Android の画面の固定という機能を使ってアプリが持ってる透明な Activity に画面固定してるだけのアプリなのですが、それをロック解除するときに PIN を要求しろというのは、Android が画面が固定されているか否か判定する API は提供しているものの解除したことを検出する API を提供していない都合上実装不可能なわけなんですが、これがないからということで☆1を付けられたりするわけです。<br>
  というわけで雑な実装なんですが、500ミリ秒ごとに画面固定されているかどうかの API をたたくという風になっています。で、Android の API で固定している都合上、固定するか確認するプロンプトが出ます。この間は固定されてないという結果が返ってくるので、仕方なく画面がタップされたら500ミ秒ごとに API たたくやつを実行するということにしてます。タップしたってことはその下の UI コンポーネントに対して何らかのアクションを起こそうとしたわけですが、まあ1回くらいだったらタップが効かなかったと解釈してくれるだろうと。<br>
  ……ということでこの更新というかワークアラウンドでこの間リリースしたんですが、まあ Android って IDE 重いわビルドは遅いわバイナリはマッチョってことで大変ですね。Android アプリばっかり作ってた時もあったわけですが、今後はなるべく作りたくないです。いい意味で (いい意味とかないですが)。こんな感じで書きましたが、私は Android 好きですよ。ただアプリ作るのは辛い。<br>
  これを書いてる間にも何やらレビューが来て、使ってもらえるのはありがたいかぎりなんですが、そこそこの辛さがあります。<br>
  <a href="https://github.com/kofuk/SecureScreen" class="inline">ソースコード</a><br>
  <a href="https://play.google.com/store/apps/details?id=com.chronoscoper.android.securescreen" class="inline">Google Play</a>

  <h2>LINEのトーク履歴をパースするやつ</h2>
  パース自体は雑実装ですがすぐできました。あとは使い道を考えれば完成ですがこれが難しい。あと、ライブラリとして使える感じになってないので適当に呼び出してやる必要があります、関数を。ここは後でなんとかしたい。でもまあ「後で」みたいな抽象的な言い方だといつまで経っても取り掛からない or 完成しないです。また、現時点ではパースする以上の能力はないです。つまり集計できたりとかそういう機能はない。このあたりも後々コンパイルオプションによっては CGI フロントエンドがつくみたいなことはやりたいです。CGI って黎明期の匂いがしますね。<br>
  <a href="https://github.com/kofuk/experiment/tree/master/lh" class="inline">ソースコード</a>
</div>
