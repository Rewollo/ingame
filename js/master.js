window.onload=function(){

}

let header = document.querySelector('header');
let body = document.querySelector('body');
let timeout;


const mediaQuery = window.matchMedia('(min-width: 900px)')
if (mediaQuery.matches) {
    function hideHeader() {
        timeout = setTimeout(() => header.style.opacity = 0, 4000);
        header.style.transition = 'all 0.5s ease';
    }
    if(body.pageYOffset < 0) {
        hideHeader();
    }
    
    body.onscroll = function() {
        clearTimeout(timeout);
        header.style.opacity = 1;
        hideHeader();
    }
    
    header.onmouseover = function() {
        clearTimeout(timeout);
        header.style.opacity = 1;
    }
        
    header.onmouseleave =function() {
        hideHeader();
    }
}

let mobileList = document.querySelector('.mobile_list');

function mobileClick() {
    mobileList.classList.toggle('mobile_active');
}