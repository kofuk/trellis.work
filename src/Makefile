PREFIX := $(PWD)/public
REGULAR_PAGES := $(PREFIX)/index.html $(PREFIX)/articles/start-emacs-with-systemd.html \
$(PREFIX)/articles/updated-website.html $(PREFIX)/articles/bc.html
ERROR_DOCS := $(PREFIX)/403.html $(PREFIX)/404.html $(PREFIX)/500.html
DEPENDENCY_ALL := loader.php $(PWD)/minify.py php-util/util.php inline-res/style.scss

.PHONY: dummy
dummy:
	@echo "Can't be called directly"

.PHONY: all
all: $(REGULAR_PAGES) $(ERROR_DOCS)

$(PREFIX)/index.html: index.php $(DEPENDENCY_ALL) articles/articles.json inline-res/index_expansion.js inline-res/index.scss
	php loader.php $< > $@

$(PREFIX)/%.html: %.php $(DEPENDENCY_ALL)
	php loader.php $< > $@
	$(PWD)/minify.py $@

$(PREFIX)/articles/%.html: articles/%.php $(DEPENDENCY_ALL) articles/template.php php-util/article.php
	php loader.php $< > $@
	$(PWD)/minify.py $@

$(PREFIX)/%.html: errdocs/%.php $(DEPENDENCY_ALL)
	php loader.php $< > $@
	$(PWD)/minify.py $@
