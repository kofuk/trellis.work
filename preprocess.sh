#!/usr/bin/env bash
set -eu

process(){
    local src=$1
    local dst=$2
    echo "Preprocessing: $src => $dst"
    php loader.php "$BUILD_TYPE_OPTION" "$src" > "../_public/$dst"
}

process index.php index.html
process articles/start-emacs-with-systemd.php articles/start-emacs-with-systemd.html
process articles/updated-website.php articles/updated-website.html
process errdocs/403.php 403.html
process errdocs/404.php 404.html
process errdocs/500.php 500.html
