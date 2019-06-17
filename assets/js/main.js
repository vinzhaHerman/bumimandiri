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





//----------------------------------------- sidebar configuration -------------------------------------------------

$(document).ready(function(){
	// $('.menu-open').click(function(){
	// 	$('#side-menu').fadeToggle("fast");
	// });
	// $('.btn-close').click(function(){
	// 	$('#side-menu').fadeToggle("slow");
	// });
	$('#side-menu').css({"box-shadow":"0px 1px 5px 1px #555"});
	$('.fullscreen-bg-container').click(function(){
		$('#side-menu').css({"left":"-250px"});
	});
	$('.main-wrapper').click(function(){
		$('#side-menu').css({"left":"-250px"});
	});
});

var slidemenu = document.getElementById('side-menu');

function openSlideMenu(){
   slidemenu.style.left='0';
}
function closeSlideMenu(){
   slidemenu.style.left='-250px';
}

window.onclick = function(event) {
  if (event.target == slidemenu) {
   slidemenu.style.left = '-250px';
  }
}

//----------------------------------------- sidebar configuration -------------------------------------------------





//----------------------------------------- carousel configuration -------------------------------------------------

$(".center").slick({
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
        breakpoint: 640,
        settings: {
            slidesToShow: 1
        }
    	}, {
        breakpoint: 320,
        settings: {
            infinite: true
        }
    	}]
      });

//----------------------------------------- carousel configuration -------------------------------------------------