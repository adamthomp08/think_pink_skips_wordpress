
$(function() {

    // $(".date-picker").datepicker({ firstDay: 1 });
    
	$( ".skip-btn" ).hover(
	  function() {

	  	if( ! $( this ).hasClass("active") ){
	  		var link_text = $( this ).children( "img" ).attr("src");
	    
	   		var replace = link_text.replace("pink.svg", "white.svg");

		    $( this ).children( "img" ).attr("src", replace);
	  	}
	  
	  }, function() {

	  	if( ! $( this ).hasClass("active") ){
	    var link_text = $( this ).children( "img" ).attr("src");
	    
	    var replace = link_text.replace("white.svg", "pink.svg");

	    // alert(replace);

	    $( this ).children( "img" ).attr("src", replace);
		}
	  }
	);

	$( ".skip-btn" ).click(function() {
		if( ! $( this ).hasClass("active") ){
			var link_text = $( ".active.skip-btn").children( "img" ).attr("src");
		    
	   		var replace = link_text.replace("white", "pink");

			$( ".active.skip-btn").children( "img" ).attr("src", replace);

		  	$( ".active.skip-btn").removeClass("active");

		  	$( this ).addClass("active");

		  	//update hidden field

		  	$('#skip-size').val($(this).data('skip-size'));

		  	// alert($('#skip-size').val());

	  	}

	});

	$( ".configure" ).click(function() {
		if( ! $( this ).hasClass("active") ){

			$( ".active.configure" ).removeClass("active");

		  	$( this ).addClass("active");

			$('#private').val($(this).data('private'));

		  	// alert($('#private').val());		  	

	  	}

	});	

	$('.date-picker').datepicker({
	    onSelect: function(dateText, inst) {
	      $("#date").val(dateText);
	    },
	    firstDay: 1,
	    dateFormat: 'dd-mm-yy'
	});


	$( ".delivery" ).click(function() {
		if( ! $( this ).hasClass("active") ){

			$( ".active.delivery" ).removeClass("active");

		  	$( this ).addClass("active");

		  	$('#days').val($(this).data('days'));

		  	// alert($('#days').val());		
	  	}

	});	


	// if(location.pathname != "/"){
	// 	$("a[href*='" + location.pathname + "']").addClass("active");
	// } else { 
	// 	$(".home").addClass("active");
	// }

	$( ".burger-icon" ).click(function() {
		$( "nav ul" ).toggle();
	} );


});
