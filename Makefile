build:
	./build.sh

# https://qiita.com/cuzic/items/8c034cef48b50e29f1a8
product: build
	find public -name "*.html" -o -name "*.css" -o -name "*.js" -o -name "*.png" | \
	xargs -ifile sh -c "gzip --best -c file > file.gz"

serve: build
	cd public && python3 -m http.server

clean:
	rm -rf ./_public/ ./public/
