<?php
add_inline_css ('style.css');
add_inline_css ('code.css');
doctype ();
html ();
head ();
?>
  <body>
    <?php page_title (); ?>
    <main>
      <div class="card">
      <?php
        if (!isset ($ARTICLE_FILENAME))
        {
                exit (1);
        }
        include $ARTICLE_FILENAME;
      ?>
      </div>
    </main>
    <?php footer (); ?>
  </body>
</html>
