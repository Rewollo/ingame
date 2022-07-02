function scrollTop() {
    let arrowTop = document.querySelector('.arrow_top');

    arrowTop.onclick = function() {
        window.scrollTo(0, 0);
    };

    window.addEventListener('scroll', function() {
        arrowTop.hidden = (arrowTop.pageYOffset < window.clientHeight);
        
    });
}

document.addEventListener("DOMContentLoaded", scrollTop);