#!/usr/bin/env bash
set -eu

process(){
    local src=$1
    local dst=$2
    echo "$src => $dst"
    php "$src" > "../_public/$dst"
}

process index.php index.html
process articles/start-emacs-with-systemd.php articles/start-emacs-with-systemd.html
process articles/updated-website.php articles/updated-website.html

