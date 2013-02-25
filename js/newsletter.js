//reference to our form
var $form = $('form');

//listen for form submission
$form.submit(stopSubmit);

//stop the submission
function stopSubmit (e){
	e.preventDefault();

	var data = $(this ).serialize(); // data stored in string
	// console.log(data);

	$.post(this.action, data, removeForm); //send data via ajax, remove form from site
}

function removeForm(response){
	//var $html = $(response).find('div');
	var $html = $( '<div>' ).append( response ).find( '#newsletter' );


	//simple way
	var $popup = $('<div class="message"></div>')
	$popup.append($html).delay(5000).fadeOut();
	$('body').append($popup);
	$('#newsletter').slideUp(1000);
}