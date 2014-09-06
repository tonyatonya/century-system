$(function(){
	$(window).load(function(){
		var winH = $(".container").height();
		var winW = $(".container").width();
		var panel = $(".panel");
		var footMenu = $(".footmenu")
		var panelH = panel.height();
		var panelW = panel.width();
		 
		panel.css({
			//'position' : 'absolute',
			'top' : (winH - panelH) /2,
			//'left': (winW - panelW) /2
			
		})
		
		
		
	});
})
