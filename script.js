onload = () => {
    'use strict';
    const moreButton = document.getElementById('more');
    moreButton.onclick = () => {
	moreButton.style.display = 'none';
	document.getElementById('omitted')
	    .style.display = 'block';
    };
}
