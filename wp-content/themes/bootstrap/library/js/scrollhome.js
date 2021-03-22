		//Initial load of page
		$(document).ready(sizeContent);
		
		//Every resize of window
		$(window).resize(sizeContent);
		
		//Dynamically assign height
		function sizeContent() {
		    var newHeight = $("body").height() - $("#inner-header").height() - $("#inner-header").height() - $("footer").height() + "px";
		    $("#portfolio").css("height", newHeight);
		}