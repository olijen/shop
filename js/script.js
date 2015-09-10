
$(function(){
	
	function rate(el, active, hover) {
		if(active)
			el.prop("checked", true).addClass("active");
		else if(hover)
			el.prop("checked", true).addClass("hover");
	}
	
	$('.rating input[type="radio"]').bind({
		click: (function () {
			
			var radio = $(this).parent().find('input[type="radio"]');
			var current = radio.index(this);
			
			$(this).parent().find('input[type="radio"]').prop("checked", false).removeAttr("class");
			
			for (var i = 0; i < radio.length; i++) {
				if (i != current)
					rate(radio.eq(i), true);
				else {
					rate(radio.eq(current), true);
					break;
				}
			}
		})
	});
	
	$('.rating input[type="radio"]').hover(
	function() {
		var radio = $(this).parent().find('input[type="radio"]');
		var current = radio.index(this);
		
		for (var i = 0; i < radio.length; i++) {
			if (i != current)
				rate(radio.eq(i), false, true);
			else {
				rate(radio.eq(current), false, true);
				break;
			}
		}
	},
	function() {
		$(this).parent().find('input[type="radio"]').removeClass("hover");
	});
	
	function sortBy(toCheap) {
	
		var mylist = $('.cards');
		var listitems = mylist.children('.product.mini').get();
		listitems.sort(function(a, b) {
			if(toCheap == "2")
				return $(b).find(".price").text().toUpperCase().localeCompare($(a).find(".price").text().toUpperCase());
			return $(a).find(".price").text().toUpperCase().localeCompare($(b).find(".price").text().toUpperCase());
		})
		$.each(listitems, function(idx, itm) { mylist.append(itm); });
		
	}
	
	$(".sort").change(function () {
		var sorting = $(".sort option:selected").val();
		sortBy(sorting);
	}).change();
});