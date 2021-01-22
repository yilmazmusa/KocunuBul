jQuery(window).load(function(){  
    if(checkBrowser() == 'Google Chrome'){
        if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
            window.onmousewheel = document.onmousewheel = wheel;

            var time = 330;
            var distance = 100;

            function wheel(event) {
                if (event.wheelDelta) delta = event.wheelDelta / 60;
                else if (event.detail) delta = -event.detail / 3;
                handle();
                if (event.preventDefault) event.preventDefault();
                event.returnValue = false;
            }

            function handle() {
                jQuery('html, body').stop().animate({
                    scrollTop: jQuery(window).scrollTop() - (distance * delta)
                }, time);
            }
    }
});
function checkBrowser(){
    var ua = navigator.userAgent;
    
    if (ua.search(/MSIE/) > 0) return 'Internet Explorer';
    if (ua.search(/Firefox/) > 0) return 'Firefox';
    if (ua.search(/Opera/) > 0) return 'Opera';
    if (ua.search(/Chrome/) > 0) return 'Google Chrome';
    if (ua.search(/Safari/) > 0) return 'Safari';
    if (ua.search(/Konqueror/) > 0) return 'Konqueror';
    if (ua.search(/Iceweasel/) > 0) return 'Debian Iceweasel';
    if (ua.search(/SeaMonkey/) > 0) return 'SeaMonkey';
    if (ua.search(/Gecko/) > 0) return 'Gecko';

    return 'Search Bot';
}