<?php
add_inline_css ('style.scss');
add_inline_css ('index.scss');
set_global_title ("Not Found - TRELLIS WORK");
doctype ();
html ();
head ();
?>
<body>
<?php page_title (); ?>
<main>
    <div class="card">
        <h2>Not Found</h2>
        リクエストされたファイルは見つかりませんでした。<br>
        コード: 404
        <hr>
        考えられる原因:
        <ul>
            <li>ページが削除された、または移動した</li>
            <li>URL が間違っている</li>
        </ul>
    </div>
</main>
<?php footer (); ?>
</body>
</html>
