window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');
    navSlide();
});

const navSlide = () => {
    const burger = document.getElementById('burger-button');
    const nav = document.getElementById('nav-container');
    const navLinks1 = document.getElementById('nav-container-links1');
    const navLinks2 = document.getElementById('nav-container-links2');
    const navLinks3 = document.querySelector('.subnav');

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        navLinks1.classList.toggle('nav-active');
        navLinks2.classList.toggle('nav-active');
        navLinks3.classList.toggle('nav-active');
    });
}

/* 
(function() {
    function scrollHorizontally(e) {
        e = window.event || e;
        var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
        document.getElementById('scrollWrapper').scrollLeft -= (delta*40);
        
        if ((delta > 0 && document.getElementById('scrollWrapper').scrollLeft > 0) || (delta < 0 && document.getElementById('scrollWrapper').offsetWidth+document.getElementById('scrollWrapper').scrollLeft < el.scrollWidth)) {
            e.preventDefault(); 
        }
    }
    if (document.getElementById('scrollWrapper').addEventListener) {
        // IE9, Chrome, Safari, Opera
        document.getElementById('scrollWrapper').addEventListener("mousewheel", scrollHorizontally, false);
        // Firefox
        document.getElementById('scrollWrapper').addEventListener("DOMMouseScroll", scrollHorizontally, false);
    } else {
        // IE 6/7/8
        document.getElementById('scrollWrapper').attachEvent("onmousewheel", scrollHorizontally);
    }
})();
*/

// collapsible mobile menu for 'Shop by brand' 
/*
var subNavLink = document.getElementById("shop-by-brand");

subNavLink.addEventListener("click", function() {
    var subNav = document.getElementsByClassName("vintage-brand-subnav");
    if (subNav.style.display === "none") {
        subNav.style.display = "block";
    } else {
        subNav.style.display = "none";
    }
});
*/