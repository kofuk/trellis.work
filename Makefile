.PHONY: all
all: tmp/dart-sass/dart-sass
	mkdir -p public/articles
	$(MAKE) -C src -f Docs.mk
	$(MAKE) -C src/static -f Docs.mk
	mkdir -p assets/images
	$(MAKE) -C src/cdn-assets -f Docs.mk

tmp/dart-sass/dart-sass: lib/dart-sass-linux-x64.tar.gz
	mkdir -p tmp
	tar -xf lib/dart-sass-linux-x64.tar.gz -C tmp
	touch tmp/dart-sass/dart-sass  # to nofify make of correct updated time

.PHONY: serve
serve: all
	cd public && python3 -m http.server

.PHONY: clean
clean:
	$(RM) -r public/ assets/ tmp/
