const initCardExpansion = () => {
    'use strict';
    document.querySelectorAll('h2.has-expand-thumb')
        .forEach((e) => {
            e.onclick = () => {
                const expandablePart = e;
                expandablePart.setAttribute(
                    'data-expanded',
                    expandablePart.getAttribute('data-expanded') === 'yes'
                        ?'no'
                        :'yes');
            }
        })
}

addEventListener('load', () => {
    'use strict';
    initCardExpansion();
});
