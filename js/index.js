$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
		e.preventDefault();
		var target = this.hash,
		$target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 400, 'swing', function () {
			window.location.hash = target;
		});
	});

});
function componentToHex(c) {
	var hex = c.toString(16);
	return hex.length == 1 ? "0" + hex : hex;
}
function rgbForScroll(scroll,rgbInitial,rgbFinal){
	var rgbCurrent = [];
	for(var i=0;i<3;i++){
		rgbCurrent[i] = Math.round(rgbInitial[i]-(rgbInitial[i]-rgbFinal[i])*scroll);
		if(rgbFinal[i]<rgbInitial[i]&&rgbCurrent[i]<rgbFinal[i]){
			rgbCurrent[i] = rgbFinal[i];
		}else if(rgbFinal[i]>rgbInitial[i]&&rgbCurrent[i]>rgbFinal[i]){
			rgbCurrent[i] = rgbFinal[i];			
		}
	}
	return "#" + componentToHex(rgbCurrent[0]) + componentToHex(rgbCurrent[1]) + componentToHex(rgbCurrent[2]);
}
function onScroll(){
	var offsetThing = document.getElementsByTagName("body")[0];
	//var display = document.getElementById("offset");
	//display.innerHTML = offsetThing.scrollTop;
	var doneScrollingAt = 50;//45
	var height = $(window).height();
	var scroll = (offsetThing.scrollTop/(height*doneScrollingAt/100));
	//middle
	var rMiddle = 30-scroll*30;
	rMiddle = (rMiddle<0)?0:rMiddle;
	$('.middle').css({
		'-webkit-transform': 'rotate('+rMiddle+'deg)','fill':''+rgbForScroll(scroll,[0x10,0x46,0x89],[0x44,0x44,0x44])+''
	});
	//top-blue
	var rTBlue = scroll*30;
	var txTBlue = scroll*40;
	var tyTBlue = scroll*2.69;
	rTBlue = (rTBlue>30)?30:rTBlue;
	txTBlue = (txTBlue>40)?40:txTBlue;
	tyTBlue = (tyTBlue>2.69)?2.69:tyTBlue
	$('.top-blue').css({
		'-webkit-transform': 'rotate('+rTBlue+'deg) translate('+txTBlue+'pc,-'+tyTBlue+'pc)' ,'fill':''+rgbForScroll(scroll,[0x1E,0x70,0xC0],[0x44,0x44,0x44])+'',					 
	});
	//bottom blue
	var rBBlue = scroll*30;
	var txBBlue = scroll*40;
	var tyBBlue = scroll*2.5;
	rBBlue = (rBBlue>30)?30:rBBlue;
	txBBlue = (txBBlue>40)?40:txBBlue;
	tyBBlue = (tyBBlue>2.5)?2.5:tyBBlue
	$('.bottom-blue').css({
		'-webkit-transform': 'rotate('+rBBlue+'deg) translate(-'+txBBlue+'pc,'+tyBBlue+'pc)' ,'fill':''+rgbForScroll(scroll,[0x1E,0x70,0xC0],[0x44,0x44,0x44])+'',					 
	});
	//left-white
	var rLW = scroll*30;
	var txLW = scroll*40;
	var tyLW = scroll*22.65;
	rLW = (rLW>30)?30:rLW;
	txLW = (txLW>40)?40:txLW;
	tyLW = (tyLW>22.65)?22.65:tyLW;
	$('.left-white').css({
		'-webkit-transform': 'rotate(-'+rLW+'deg) translate(-'+txLW+'pc,-'+tyLW+'pc)' ,'fill':''+rgbForScroll(scroll,[0xE7,0xE7,0xE7],[0x44,0x44,0x44])+'',					 
	});
	//right-white
	var rRW = scroll*30;
	var txRW = scroll*37;
	var tyRW = scroll*23.1;
	rRW = (rRW>30)?30:rRW;
	txRW = (txRW>37)?37:txRW;
	tyRW = (tyRW>23.1)?23.1:tyRW;
	$('.right-white').css({
		'-webkit-transform': 'rotate(-'+rRW+'deg) translate('+txRW+'pc,'+tyRW+'pc)' ,'fill':''+rgbForScroll(scroll,[0xE7,0xE7,0xE7],[0x44,0x44,0x44])+'',					 
	});
}