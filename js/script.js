
$(function(){
	
	$('.raiting input[type="radio"]').click(function(){
		var radio = $(this).parent().find('input[type="radio"]');
		var current = radio.index(this);
		$(this).parent().find('input[type="radio"]').prop("checked", false);
		for(var i = 0; i < radio.length; i++) {
			if(i != current) {
				radio.eq(i).prop("checked", true);
			}
			else {
				radio.eq(current).prop("checked", true);
				break;
			}
		}
	});
	
});