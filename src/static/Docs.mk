PREFIX := $(PWD)/public
DOCS := $(PREFIX)/favicon.ico $(PREFIX)/googlecae95843b0249a37.html $(PREFIX)/manifest.json \
	$(PREFIX)/robots.txt $(PREFIX)/sitemap.xml

.PHONY: all
all: $(DOCS)

$(PREFIX)/%: $(CURDIR)/%
	cp $< $@
