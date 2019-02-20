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

const initExpansion = () => {
    'use strict';
    const moreButton = document.getElementById('more');
    const omittedPart = document.getElementById('omitted');
    moreButton.onclick = () => {
        moreButton.style.display = 'none';
        omittedPart.style.display = 'block';
    };
}

onload = () => {
    'use strict';
    initExpansion();
    initCardExpansion();
}
