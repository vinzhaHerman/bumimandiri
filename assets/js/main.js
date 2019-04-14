jQuery( document ).ready(function( $ ) {
	var form = $('#booking-form'),
	loading = $('#form-loading')
	content = $('#form-content'),
	message = $('#form-message');

	$(form).submit(function(){
		$(loading).css({
			paddingTop: Math.round($(form).height()/2) + 'px'
		}).removeClass('hide');

		$.ajax({
			type: 'POST',
			url: 'script.php',
			data: $(form).serialize(),
			dataType: 'json',
			success: function(data){
				$(loading).fadeOut('fast', function(){
					$(this).addClass('hide').fadeIn();
				});
				if (data.code == 'failed'){
					$('.error-message', form).remove();
					data.fields = data.fields.reverse();
					for (var i in data.fields){
						$('[name=' + data.fields[i].name + ']', form).trigger('focus').trigger('click').parent('div').each(function(){
							$(this).append($('<div>').addClass('error-message').html(data.fields[i].message));
						});
					}
				}else if (data.code == 'success'){
					$(content).fadeOut('fast', function(){
						$(this).addClass('hide');
						$(message).removeClass('hide');
					});
				}
			},
		});
		return false;
	});

	$('#date-from, #date-to', form).dateTimePicker({
		paging: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		picker: ['date'],
		format: 'm/d/Y',
		filter: function(date){
			// Select date in the future
			var d = new Date();
			if (date.getTime() < d.getTime()){
				return false;
			}else{
				return true;
			}
		},
		filter_show: function(date){
			var d = new Date();
			return date.getYear() > d.getYear() || (date.getYear() == d.getYear() && date.getMonth() >= d.getMonth());
		}
	}).dateTimePickerRange();
	
	$('select', form).styleSelect({
		class_wrap: 'ul-dropdown-wrap',
	});

	var groups = $('.group', form).filter(function(){
		return !$(this).hasClass('submit');
	}).click(function(){
		$(groups).removeClass('active');
		$(this).addClass('active');
	});
	$('#name').trigger('click').trigger('focus');


	
});




$(document).ready(function(){
	$('.menu-open').click(function(){
		$('#side-menu').fadeToggle("fast");
	});
	$('.btn-close').click(function(){
		$('#side-menu').fadeToggle("slow");
	});
});


// function openSlideMenu(){
//    document.getElementById('side-menu').style.width='250px';
//    document.getElementById('main1').style.marginLeft='0px';
// }

function openSlideMenu(){
   document.getElementById('side-menu').style.left='0';
}
function closeSlideMenu(){
   document.getElementById('side-menu').style.left='-250px';
}
// function closeSlideMenu(){
//    document.getElementById('side-menu').style.width='0px';
//    document.getElementById('main').style.marginLeft='0px';
// }
