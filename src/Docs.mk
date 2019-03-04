PREFIX := $(PWD)/public
REGULAR_PAGES := $(PREFIX)/index.html $(PREFIX)/articles/start-emacs-with-systemd.html \
	$(PREFIX)/articles/updated-website.html
ERROR_DOCS := $(PREFIX)/403.html $(PREFIX)/404.html $(PREFIX)/500.html

.PHONY: all
all: $(REGULAR_PAGES) $(ERROR_DOCS)

$(PREFIX)/%.html: %.php
	php loader.php --product $< > $@
	$(PWD)/minify.py $@

$(PREFIX)/%.html: errdocs/%.php
	php loader.php --product $< > $@
	$(PWD)/minify.py $@
