 //alert('hola mundo');

// dropdown 

/*function dropdown_lead_1(a){

	$(".dropdown_lead_"+a ).toggle('fast');
	//alert('is equal'+a+' y '+n);

}*/

//




// btn-lataeral menu
function btnlateral(a){

	switch (a) {

	  case 'open':
	    $( ".lateral-menu" ).css('left','0%');
	    $( ".principal-content" ).css('margin-left','17%');
	    $( ".principal-content" ).css('width','83%');

	    $(".btn-l-open" ).toggle('fast');
	    $(".btn-l-close" ).toggle('fast');

	    break;

	  case 'close':
	    $( ".lateral-menu" ).css('left','-17%');
	    $( ".principal-content" ).css('margin-left','0%');
	    $( ".principal-content" ).css('width','100%');

	    $(".btn-l-open" ).toggle('fast');
	    $(".btn-l-close" ).toggle('fast');

	    break;

	  default:
	    //alert('default');
	    break;

	}
}
	

function dropdown_lead(a,b){
	$(".dropdown_lead_"+a ).toggle('fast');
}

function dropdown_quote(a){
	//alert(a);
	$(".dropdown_quote_"+a ).toggle('fast');

	$(".dropdown_fac_pre_"+a ).css('display','none');
	$(".dropdown_fac_end_"+a ).css('display','none');
	$(".dropdown_pay_"+a ).css('display','none');
}

function dropdown_fac_pre(a){
	//alert(a);
	$(".dropdown_fac_pre_"+a ).toggle('fast');

	$(".dropdown_quote_"+a ).css('display','none');
	$(".dropdown_fac_end_"+a ).css('display','none');
	$(".dropdown_pay_"+a).css('display','none');
}

function dropdown_fac_end(a){
	//alert(a);
	$(".dropdown_fac_end_"+a ).toggle('fast');

	$(".dropdown_quote_"+a ).css('display','none');
	$(".dropdown_fac_pre_"+a ).css('display','none');
	$(".dropdown_pay_"+a).css('display','none');
}

function dropdown_pay(a){
	//alert(a);
	$(".dropdown_pay_"+a ).toggle('fast');

	$(".dropdown_quote_"+a ).css('display','none');
	$(".dropdown_fac_pre_"+a ).css('display','none');
	$(".dropdown_fac_end_"+a).css('display','none');
}

function filter_menu(){
	$(".filter-menu").toggle('fast');
}


// dropwon tool-bar
function dropdown_tool_bar(a){
	//alert(a);


		if (a=='status') {
			$(".active-dropdown-tool-bar-status" ).toggle();
		
			$(".active-dropdown-tool-bar-pharner" ).css('display','none');
			$(".active-dropdown-tool-bar-area" ).css('display','none');
			$(".active-dropdown-tool-bar-date-search" ).css('display','none');
		}

		if (a=='pharner') {
			$(".active-dropdown-tool-bar-pharner" ).toggle();

			$(".active-dropdown-tool-bar-status" ).css('display','none');
			$(".active-dropdown-tool-bar-area" ).css('display','none');
			$(".active-dropdown-tool-bar-date-search" ).css('display','none');
		}

		if (a=='area') {
			$(".active-dropdown-tool-bar-area" ).toggle();

			$(".active-dropdown-tool-bar-status" ).css('display','none');
			$(".active-dropdown-tool-bar-pharner" ).css('display','none');
			$(".active-dropdown-tool-bar-date-search" ).css('display','none');
		}

		if (a=='date-search') {
			$(".active-dropdown-tool-bar-date-search" ).toggle();

			$(".active-dropdown-tool-bar-status" ).css('display','none');
			$(".active-dropdown-tool-bar-pharner" ).css('display','none');
			$(".active-dropdown-tool-bar-date-area" ).css('display','none');
		}


	

	//$(".active-dropdown-tool-bar-"+a ).toggle();

}


// modal - lead

function modal_lead(a,b){
	$(".modal-lead").addClass("modal-lead-active");
	$(".content-modal-lead").addClass("content-modal-lead-active");

	//alert(a);
	switch (a) {

	    case 'leads':
	    	//alert('yes');
	    	$(".new-lead").addClass("box-info-modal-active");
	    	$(".content-modal-lead").css("width","60%");
	    	break;

	    case 'clientes':
	    	//alert('yes');
	    	$(".new-cliente").addClass("box-info-modal-active");
	    	$(".content-modal-lead").css("width","60%");
	    	break;

	    case 'usuarios':
	    	//alert('yes');
	    	$(".new-user").addClass("box-info-modal-active");
	    	$(".content-modal-lead").css("width","60%");
	    	break;

	    case 'blog':
	    	//alert('yes');
	    	$(".new-blog").addClass("box-info-modal-active");
	    	$(".content-modal-lead").css("width","60%");
	    	break;

	    default:
	    	alert('no');
	    	break;
	}
}

function closed_modal_lead(){
	$(".modal-lead").removeClass("modal-lead-active");
	$(".content-modal-lead").removeClass("content-modal-lead-active");
	$(".box-info-modal").removeClass("box-info-modal-active");
	$(".content-modal-lead").css("width","28%");
}


