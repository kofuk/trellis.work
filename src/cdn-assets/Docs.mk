PREFIX := $(PWD)/assets
DOCS := $(PREFIX)/index.html $(PREFIX)/images/icon_192.png $(PREFIX)/images/icon_48.png \
	$(PREFIX)/images/icon_96.png $(PREFIX)/images/me.png

.PHONY: all
all: $(DOCS)

$(PREFIX)/%: $(CURDIR)/%
	cp $< $@
