<?php
add_inline_css ('style.css');
add_inline_css ('index.css');
set_global_title ("Internal Server Error - TRELLIS WORK");
doctype ();
html ();
head ();
?>
<body>
<?php page_title (); ?>
<main>
    <div class="card">
        <h2>Internal Server Error</h2>
        サーバーでエラーが発生しました。<br>
        コード: 500
    </div>
</main>
<?php footer (); ?>
</body>
</html>