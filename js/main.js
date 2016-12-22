$(".slider").fullpage({
	navigation: false,
	keyboardScrolling: false,
	recordHistory: false,
	lockAnchors: true,
	animateAnchor: false,
	touchSensitivity:200
});

$.fn.fullpage.setMouseWheelScrolling(false);
$.fn.fullpage.setAllowScrolling(false);

$("body").on("click", ".back", function(){
	$.fn.fullpage.moveSectionUp();
});

function resetResults(estimated_emp){
	$("#section-3 h3").show();
	$("#section-3 .share").show();
	$("#section-3 .btn-act").text("Je veux agir");
	ga('send', 'event', { eventCategory: 'Interpellation', eventAction: estimated_emp});
}

$(".btn-next").on("click", function(){
	$.fn.fullpage.moveSectionDown();
	
	console.log($(this).parents(".section"));
	
	if($(this).parents(".section").is("#section-2")){
		var total_emp = $(".total_emp").val(),
			part_emp = 	$(".part_emp").val(),
			estimated_emp = Math.round(total_emp * part_emp / 100 * .199),
			duration = 1500 + Math.sqrt(estimated_emp) * 100,
			tweet_url = "http://twitter.com/intent/tweet?text=" + encodeURIComponent("Parmi mes collègues, ") + estimated_emp +  encodeURIComponent(" ont déjà subi du harcèlement sexuel. Vous aussi, faites le calcul. Et réagissez. #StopHS") + "&url=http://stophs.fr";
		
		$(".share .btn-tw").attr("href", tweet_url);
								
		if(estimated_emp < 2){
			resetResults(estimated_emp)
			$("#section-3 .result").text(estimated_emp);
			$('.share').addClass("display");
			$("#section-3 h4").html("femme a déjà subi<br/>du harcèlement sexuel<br/>dans votre entreprise");
		} else {
			resetResults(estimated_emp)
			$("#section-3 h4").html("femmes ont déjà subi<br/>du harcèlement sexuel<br/>dans votre entreprise");
			$("#section-3 .result").animateNumber({
				number: estimated_emp,
				easing: 'easeInQuad'
			}, duration, function() {
			  $('.share').addClass("display");
			});
		}
		
		if(estimated_emp < 1){
			$("#section-3 h3").hide();
			$("#section-3 .share").hide();
			$("#section-3 h4").html("Le nombre de femmes dans votre<br/>entreprise est trop faible<br/>pour établir une statistique.<br/><span class='back'>Recommencer</span>");
			$("#section-3 .btn-act").text("Je veux quand même agir");
		}
		
		

	}
});

$(".total_emp").on("input change", function(){
	if(($(this).val() != '') && ($(this).val() != 0)){
		$("#section-2 .btn").addClass("display");
	} else{
		$("#section-2 .btn").removeClass("display");
	}
});

$(".part_emp").on("input change", function(){
	$(".part_val").text($(this).val() + "%");
});

var form = $('#main_subscribe');

$(form).submit(function(event) {
    event.preventDefault();

	var formData = $(form).serialize();
	
	console.log(formData);
	
	$(form).find("input, .submit").attr("disabled", "disabled");
		
	$.ajax({
		type: 'POST',
		url: $(form).attr('action'),
		data: formData
	})

	.done(function(response) {
		$(form).parents(".nl").addClass('success');
	})

	.fail(function(data) {
		$(form).find("input, .submit").prop("disabled", false);
	});
	
});


$(".credit").on("click", function(){
	$.fn.fullpage.moveSectionDown();
});
