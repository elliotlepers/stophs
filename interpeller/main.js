$(".corp").on("click", function(){
	var corp_name = $(this).attr("data-name");
	ga('send', 'event', { eventCategory: 'Interpellation', eventAction: corp_name});
});