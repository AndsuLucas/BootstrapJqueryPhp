var time = 1000;


$(window).scroll(function(){
	var scroll = Math.floor($(this).scrollTop());
	if(scroll > 270){
		$("#experiencia").children().each(function(position,element){
			$(element).fadeIn(time);
			time = time + 500;

		});
		time = 1000
	}
	if(scroll > 500){
		$("#educaçao").children().each(function(position,element){
			$(element).fadeIn(time);
			time = time + 500;

		});
		time = 1000
	}
	if(scroll > 700){
		$("#skills").children().each(function(position,element){
			$(element).fadeIn(time);
			time = time + 500;

		});
		time = 1000
	}


})	
	

