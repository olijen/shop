
$(function(){
	// highlighing stars on hover or click
	function rate(el, active, hover) {
		if(active)
			el.addClass("active");
		else if(hover)
			el.addClass("hover");
	}
	
	// set stars on click
	$(document).on("click", ".rating .star", function() {
			
		var radio = $(this).parent().find('.star');
		var current = radio.index(this);

		// reset stars (for case, when stars already set)
		$(this).parent().find('.star').removeClass("active").removeAttr("id");

		for (var i = 0; i < radio.length; i++) {
			if (i != current)
				rate(radio.eq(i), true);
			else {
				// current was reseted and we need to set it
				rate(radio.eq(current), true);
				break;
			}
		}
		
	});
	
	
	// show stars on hover
	//$('.rating .star').hover(
	$(document).on("mouseenter", ".rating .star", function() {
		var radio = $(this).parent().find('.star');
		var current = radio.index(this);
		
		$(this).parent().find('.star.active').removeClass("active").attr("id", "active");
		
		for (var i = 0; i < radio.length; i++) {
			if (i != current)
				rate(radio.eq(i), false, true);
			else {
				rate(radio.eq(current), false, true);
				//$(this).prop("checked", true)
				break;
			}
		}
	//},
	});
	$(document).on("mouseleave", ".rating .star", function() {
		$(this).parent().find('.star.active').removeClass("active").attr("id", "active");
		$(this).parent().find('.star').removeClass("hover");
		$(this).parent().find('.star#active').removeAttr("id").addClass("active");
	//});
	});
	
	// sort products by price
	function sortBy(toCheap) {
		
		var mylist = $('.cards .row');
		var listitems = mylist.children('.product').get();
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