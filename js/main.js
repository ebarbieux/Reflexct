<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(window).bind("resize", resizeWindow);
		function resizeWindow(e){
			var newWindowWidth = $(window).width();

			// If width width is below 600px, switch to the mobile stylesheet
			if(newWindowWidth < 600){ 				$("link[rel=stylesheet]").attr({href : "css/mobile.css"});	 			} 			// Else if width is above 600px, switch to the large stylesheet 			else if(newWindowWidth > 600){
				$("link[rel=stylesheet]").attr({href : "css/main.css"});
			}
		}
	});
</script>
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function noop() {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
