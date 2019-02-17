.PHONY: build-local
build-local:
	./build.sh --local

.PHONY: build-product
build-product:
	./build.sh --product

.PHONY: product
# https://qiita.com/cuzic/items/8c034cef48b50e29f1a8
product: build-product
	find public -name "*.html" -o -name "*.css" -o -name "*.js" \
	-o -name "*.png" -not -name "googlecae95843b0249a37.html" | \
	xargs -ifile sh -c "gzip --best -c file > file.gz"

.PHONY: serve
serve: build-local
	cd public && python3 -m http.server

.PHONY: clean
clean:
	rm -rf ./_public/ ./public/ ./assets/ ./_assets/
