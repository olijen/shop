
$(function(){
	
	$('.rating input[type="radio"]').click(function(){
		var radio = $(this).parent().find('input[type="radio"]');
		var current = radio.index(this);
		$(this).parent().find('input[type="radio"]').prop("checked", false).removeAttr("class");
		for(var i = 0; i < radio.length; i++) {
			if(i != current) {
				radio.eq(i).prop("checked", true).addClass("active");;
			}
			else {
				radio.eq(current).prop("checked", true).addClass("active");;
				break;
			}
		}
	});
	
});