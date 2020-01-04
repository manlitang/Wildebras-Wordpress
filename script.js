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