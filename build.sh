#!/usr/bin/env bash
set -eu
mkdir _public

# Create directory structure
(
    cd _public
    mkdir articles images
)

# Put static files
cp -r static/* _public

# Put preprocessed PHP files
cat preprocess_list | xargs -d '\n' ./preprocess.sh

if [ -d public/ ]; then
    mv public public.old/
fi
mv _public/ public/
rm -rf public.old/
