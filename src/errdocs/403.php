<?php
add_inline_css ('style.css');
add_inline_css ('index.css');
set_global_title ("Forbidden - TRELLIS WORK");
doctype ();
html ();
head ();
?>
<body>
<?php page_title (); ?>
<main>
    <div class="card">
        <h2>Forbidden</h2>
        リクエストされたファイルはご覧いただけません。<br>
        コード: 403
    </div>
</main>
<?php footer (); ?>
</body>
</html>