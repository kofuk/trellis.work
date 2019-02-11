#!/usr/bin/env bash
set -eu
for f in "$@"; do
    src=$(echo "$f" | awk '{print $1}')
    dist=$(echo "$f" | awk '{print $2}')
    echo "$src => $dist"
    php "src/$src" > "_public/$dist"
done
