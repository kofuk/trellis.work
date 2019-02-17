#!/usr/bin/env bash
set -eu
if [ "$#" -ne 1 ]; then
    echo '--product or --local must be specified' >&2
fi
assets_path='_public/assets/'
if [ "$1" = '--product' ]; then
    assets_path='_assets/'
fi
mkdir _public
mkdir "$assets_path"

# Create directory structure
mkdir _public/articles

# Put static files
cp -r src/static/* _public/
cp -r src/cdn-assets/* "$assets_path"

# Put preprocessed PHP files
(
    cd src/
    export BUILD_TYPE_OPTION="$1"
    ../preprocess.sh
)

# Minify *.html under _public/
find _public/ -type d -name 'assets' -prune -o -name '*.html' \
     -not -name 'googlecae95843b0249a37.html' -print | \
    xargs ./minify.py

if [ -d public/ ]; then
    mv public/ public.old/
fi
if [ -d assets/ ]; then
    mv assets/ assets.old
fi
mv _public/ public/
if [ "$1" = '--product' ]; then
    mv _assets/ assets/
fi
rm -rf public.old/ assets.old/
