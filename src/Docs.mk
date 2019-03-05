PREFIX := $(PWD)/public
REGULAR_PAGES := $(PREFIX)/index.html $(PREFIX)/articles/start-emacs-with-systemd.html \
$(PREFIX)/articles/updated-website.html $(PREFIX)/articles/bc.html
ERROR_DOCS := $(PREFIX)/403.html $(PREFIX)/404.html $(PREFIX)/500.html

.PHONY: all
all: $(REGULAR_PAGES) $(ERROR_DOCS)

$(PREFIX)/index.html: index.php loader.php $(PWD)/minify.py php-util/util.php articles/articles.json
	php loader.php $< > $@

$(PREFIX)/%.html: %.php loader.php $(PWD)/minify.py php-util/util.php
	php loader.php $< > $@
	$(PWD)/minify.py $@

$(PREFIX)/articles/%.html: articles/%.php loader.php $(PWD)/minify.php php-util/util.php \
		articles/template.php php-util/article.php
	php loader.php $< $@
	$(PWD)/minify.py $@

$(PREFIX)/%.html: errdocs/%.php loader.php $(PWD)/minify.py php-util/util.php
	php loader.php $< > $@
	$(PWD)/minify.py $@
