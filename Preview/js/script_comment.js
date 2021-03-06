$(document).ready(function(){
	var form = $('form');
	var submit = $('#submit');

	form.on('submit', function(e) {
		// prevent default action
		e.preventDefault();
		// send ajax request
		$.ajax({
			url: 'ajax_comment.php',
			type: 'POST',
			cache: false,
			data: form.serialize(), //form serizlize data
			beforeSend: function(){
				// change submit button value text and disabled it
				submit.val('Enviando...').attr('disabled', 'disabled');
			},
			success: function(data){
				// Append with fadeIn see http://stackoverflow.com/a/978731
				var item = $(data).hide().fadeIn(800);
				$('.comment-block').append(item);

				// reset form and button
				form.trigger('reset');
				submit.val('Terminar').removeAttr('disabled');
			},
			error: function(e){
				alert(e);
			}
		});
	});
});