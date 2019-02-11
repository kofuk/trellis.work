<?php
require 'php-util/util.php';
add_inline_css ('style.css');
set_global_title ('Start Emacs with Systemd - TRELLIS WORK');
set_description ("Starting at Emacs 23, Emacs provides functionally to run Emacs as daemon. In this page, I'll introduce you to the way to start Emacs when GNU/Linux systems boot up.");
doctype ();
html ();
head ();
?>
  <body>
    <?php page_title (); ?>
    <main>
      <div class="card">
        Starting at Emacs 23, Emacs provides functionally to run Emacs as daemon.
        Neither my .emacs is so long nor my computer is too slow to use Emacs
        confortablly though, I decided to use Emacs in daemon mode (because I
        can't help using such functionally, from before).<br>
        Fortunately, Systemd allows us to add start up script without having
        root priviledge.<br>
        I did it on my Debian 9 and Emacs that I built by myself.<br>
        Create directory <code>~/.config/systemd/user</code> if not exists
        and write following code to file named <code>emacs.service</code>
        <pre><code>[Unit]
Description=Emacs text editor
Documentation=info:emacs man:emacs(1) https://gnu.org/software/emacs/

[Service]
Type=simple
ExecStart=/usr/local/bin/emacs --fg-daemon
ExecStop=/usr/bin/local/emacsclient --eval "(kill-emacs)"
Environment=SSH_AUTH_SOCK=%t/keyring/ssh
Restart=on-failure

[Install]
WantedBy=default.target</code></pre>
        After doing so, run following commnad on the terminal.
        <pre><code>$ systemctl user --enable emacs</code></pre>
        Different from usual work, such as restarting Apache, this
        shouldn't be run as root.<br>
        If the code dosn't work properly, please check your install
        location of Emacs. This can be done by
        <pre><code>$ which emacs</code></pre>
      </div>
    </main>
    <?php footer (); ?>
  </body>
</html>
