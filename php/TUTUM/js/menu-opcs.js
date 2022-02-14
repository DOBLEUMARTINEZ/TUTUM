// JOB BOARD

	$( ".jobboard-opc-1" ).click(function() {

		$(".jobboard-vacant-1").removeClass("jobboard-vacant-disable");
	 	$(".jobboard-vacant-2").addClass("jobboard-vacant-disable");
	 	$(".jobboard-vacant-3").addClass("jobboard-vacant-disable");

	 	$(".jobboard-opc-1").addClass("jobboard-opc-active");
	 	$(".jobboard-opc-2").removeClass("jobboard-opc-active");
	 	$(".jobboard-opc-3").removeClass("jobboard-opc-active");

	});

	$( ".jobboard-opc-2" ).click(function() {


		$(".jobboard-vacant-1").addClass("jobboard-vacant-disable");
	 	$(".jobboard-vacant-2").removeClass("jobboard-vacant-disable");
	 	$(".jobboard-vacant-3").addClass("jobboard-vacant-disable");

	 	$(".jobboard-opc-1").removeClass("jobboard-opc-active");
	 	$(".jobboard-opc-2").addClass("jobboard-opc-active");
	 	$(".jobboard-opc-3").removeClass("jobboard-opc-active");

	});

	$( ".jobboard-opc-3" ).click(function() {

		$(".jobboard-vacant-1").addClass("jobboard-vacant-disable");
	 	$(".jobboard-vacant-2").addClass("jobboard-vacant-disable");
	 	$(".jobboard-vacant-3").removeClass("jobboard-vacant-disable");

	 	$(".jobboard-opc-1").removeClass("jobboard-opc-active");
	 	$(".jobboard-opc-2").removeClass("jobboard-opc-active");
	 	$(".jobboard-opc-3").addClass("jobboard-opc-active");

	}); 


// JOB BOARD ADMIN

	$( ".menu-opc-dashboard" ).click(function() {

		$(".content-dashboard").removeClass("content-vacant-disabled");
		$(".content-candidates,.content-vacant,.content-lead").addClass("content-vacant-disabled");
	 	

		$(".menu-opc-dashboard").addClass("menu-opc-active");
	 	$(".menu-opc-candidate,.menu-opc-vacant,.menu-opc-lead").removeClass("menu-opc-active");

	});

	$( ".menu-opc-vacant" ).click(function() {

		$(".content-vacant").removeClass("content-vacant-disabled");
		$(".content-candidates,.content-dashboard,.content-lead").addClass("content-vacant-disabled");
	 	

		$(".menu-opc-vacant").addClass("menu-opc-active");
	 	$(".menu-opc-candidate,.menu-opc-dashboard,.menu-opc-lead").removeClass("menu-opc-active");

	});

	$( ".menu-opc-candidate" ).click(function() {

		$(".content-candidates").removeClass("content-vacant-disabled");
		$(".content-vacant,.content-dashboard,.content-lead").addClass("content-vacant-disabled");

		$(".menu-opc-candidates").addClass("menu-opc-active");
	 	$(".menu-opc-vacant,.menu-opc-dashboard,.menu-opc-lead").removeClass("menu-opc-active");

	});

	$( ".menu-opc-lead" ).click(function() {

		$(".content-lead").removeClass("content-vacant-disabled");
		$(".content-vacant,.content-dashboard,.content-candidates").addClass("content-vacant-disabled");

		$(".menu-opc-lead").addClass("menu-opc-active");
	 	$(".menu-opc-vacant,.menu-opc-dashboard,.menu-opc-candidates").removeClass("menu-opc-active");

	});