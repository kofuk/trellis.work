document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('img')
        .forEach((e) => {
            if (e.getAttribute('data-delayed') === 'true'
                && e.getAttribute('data-src') !== null)
                e.setAttribute('src', e.getAttribute('data-src'));
        });
});
