#!/usr/bin/env bash
set -eu
mkdir _public

# Create directory structure
(
    cd _public
    mkdir articles images
)

# Put static files
cp -r src/static/* _public/

# Put preprocessed PHP files
(
    cd src/
    ../preprocess.sh
)

# Minify *.html under _public/
find _public/ -name '*.html' -not -name 'googlecae95843b0249a37.html' | xargs ./minify.py

if [ -d public/ ]; then
    mv public public.old/
fi
mv _public/ public/
rm -rf public.old/
