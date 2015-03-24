$( document ).ready(function() {
	  	  $('.middle').css({
		      	'-webkit-transform': 'rotate(0deg)'
		    });
	 	  $('.top-blue').css({
		      	'-webkit-transform': 'rotate(30deg) translate(40pc,-2.69pc)' ,'fill':'#104689',
					 
		    });
		  $('.bottom-blue').css({
		      	'-webkit-transform': 'rotate(30deg) translate(-40pc,2.5pc)', 'fill':'#104689',
		    });
	 	  $('.left-white').css({
		      	'-webkit-transform': 'rotate(-30deg) translate(-40pc,-22.65pc)', 'fill':'#104689',
		    });
			$('.right-white').css({
			      	'-webkit-transform': 'rotate(-30deg) translate(37pc,23.1pc)','fill':'#104689',
			});		

});
function printOffset(){
	var offsetThing = document.getElementsByTagName("body")[0];
	var display = document.getElementById("offset");
	display.innerHTML = offsetThing.scrollTop;	
}