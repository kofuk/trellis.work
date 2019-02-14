const initExpansion = () => {
    'use strict';
    const moreButton = document.getElementById('more');
    const omittedPart = document.getElementById('omitted');
    more.style.display = 'inline';
    omittedPart.style.display = 'none';
    moreButton.onclick = () => {
        moreButton.style.display = 'none';
        document.getElementById('omitted')
            .style.display = 'block';
    };
}

onload = () => {
    'use strict';
    initExpansion();
}
