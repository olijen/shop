
$(function(){
	
	$('.raiting input[type="radio"]').click(function(){
		var radio = $(this).parent().find('input[type="radio"]');
		
		for(var i = 0; i < 5; i++) {
			if(radio.eq(i).prop("checked") == false)
				radio.eq(i).prop("checked", true);
			else 
				break;
		}
	});
	
});