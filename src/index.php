<?php
require 'php-util/util.php';
add_inline_css ('style.css');
add_inline_css ('code.css');
add_inline_js ('index_expansion.js');
set_global_title ("KoFuk - TRELLIS WORK");
set_description ("Personal website for KoFuk. I'll put git repository for my tiny project or write article about what I interested.");
doctype ();
html ();
head ();
?>
  <body>
    <?php page_title (); ?>
    <main>
      <div class="card">
	<h2>About</h2>
	<div class="description">
	  Hello.<br>
	  This <span class="keyword">is</span> personal website
	  <span class="keyword">for</span> <span class="ident">KoFuk</span>.<br>
	  I'll use this site only to host my personal project
	  <span class="keyword">not</span> so important
	  <span class="keyword">as</span> I create repository on
	  <span class="ident">GitHub</span> for the time being.<br>
	  <span id="more" class="more">More</span>
	  <div id="omitted" class="omit">
	    Activities in about <span class="integer">3</span> years were mainly done on
	    <span class="ident">Chronoscope</span>. If you're interested
	    <span class="keyword">in</span> them, please
	    visit <span class="string">&quot;chronoscoper.com&quot;</span>.<br>
	  </div>
	</div>
	<hr>
	<a href="/cgit/">Browse Repository with cgit</a>
      </div>
      <div class="card">
	<h2>Further Reference</h2>
	<a href="https://github.com/kofuk">GitHub</a><br>
	<a href="https://qiita.com/kofuk">Qiita</a><br>
	<a href="https://twitter.com/man_2_fork">Twitter</a><br>
      </div>
      <div class="card">
	<h2>Clone this site using Git</h2>
	<pre class="console">$ git clone https://trellis.work/cgit/trellis.work.git</pre>
      </div>
      <div class="card">
        <h2>Articles</h2>
        <ul>
          <li>
            <a href="/articles/start-emacs-with-systemd.html">Start Emacs with Systemd</a>
          </li>
        </ul>
      </div>
    </main>
    <?php footer (); ?>
  </body>
</html>
