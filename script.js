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

//animation for mobile menu

window.onload = function(){
	
    document.getElementById("burger-button").addEventListener("click", function(event){
            event.preventDefault(); // stops the element from doing it's usual stuff
            document.getElementById("body-id").classList.add("nav-active");
        });
    
        // remove class "nav-active" from <body> when #menu-btn-close is clicked
        document.getElementById("burger-button").addEventListener("click", function(event){
            event.preventDefault(); // stops the element from doing it's usual stuff
            document.getElementById("body-id").classList.remove("nav-active");
        });
    }