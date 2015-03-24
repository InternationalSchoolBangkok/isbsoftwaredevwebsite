$(window).scroll(function() {
    if ($(window).scrollTop() > 10) {
	  	  $('.middle').css({
		      	'-webkit-animation': 'rotate-mid 2s cubic-bezier(.49,.05,.32,1.04)'
		    });
	 	  $('.top-blue').css({
		      	'-webkit-animation': 'rotate-tb 2s cubic-bezier(.49,.05,.32,1.04)',
					 '-webkit-animation-fill-mode': 'forwards' 
		    });
		  $('.bottom-blue').css({
		      	'-webkit-animation': 'rotate-bb 2s cubic-bezier(.49,.05,.32,1.04)',
		'-webkit-animation-fill-mode': 'forwards' 
		    });
	 	  $('.left-white').css({
		      	'-webkit-animation': 'rotate-lw 2s cubic-bezier(.49,.05,.32,1.04)',
		'-webkit-animation-fill-mode': 'forwards' 
		    });
			$('.right-white').css({
			      	'-webkit-animation': 'rotate-rw 2s cubic-bezier(.49,.05,.32,1.04)',
			'-webkit-animation-fill-mode': 'forwards' 
			});		
	} 
});
$(window).scroll(function() {
    if ($(window).scrollTop() > 243) {
	  		$('svg').css({
			      	'position': 'fixed',
					'margin-top':'-34.9em'
			});
	} else if ($(window).scrollTop() < 240) {
					$('svg').css({
					      	'position': 'absolute',
							'margin-top':'-16em'
					});}
	
});