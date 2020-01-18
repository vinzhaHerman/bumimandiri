// jQuery( document ).ready(function( $ ) {
// 	var form = $('#booking-form'),
// 	loading = $('#form-loading')
// 	content = $('#form-content'),
// 	message = $('#form-message');

// 	$(form).submit(function(){
// 		$(loading).css({
// 			paddingTop: Math.round($(form).height()/2) + 'px'
// 		}).removeClass('hide');

// 		$.ajax({
// 			type: 'POST',
// 			url: 'script.php',
// 			data: $(form).serialize(),
// 			dataType: 'json',
// 			success: function(data){
// 				$(loading).fadeOut('fast', function(){
// 					$(this).addClass('hide').fadeIn();
// 				});
// 				if (data.code == 'failed'){
// 					$('.error-message', form).remove();
// 					data.fields = data.fields.reverse();
// 					for (var i in data.fields){
// 						$('[name=' + data.fields[i].name + ']', form).trigger('focus').trigger('click').parent('div').each(function(){
// 							$(this).append($('<div>').addClass('error-message').html(data.fields[i].message));
// 						});
// 					}
// 				}else if (data.code == 'success'){
// 					$(content).fadeOut('fast', function(){
// 						$(this).addClass('hide');
// 						$(message).removeClass('hide');
// 					});
// 				}
// 			},
// 		});
// 		return false;
// 	});

// 	$('#date-from, #date-to', form).dateTimePicker({
// 		paging: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
// 		picker: ['date'],
// 		format: 'm/d/Y',
// 		filter: function(date){
// 			// Select date in the future
// 			var d = new Date();
// 			if (date.getTime() < d.getTime()){
// 				return false;
// 			}else{
// 				return true;
// 			}
// 		},
// 		filter_show: function(date){
// 			var d = new Date();
// 			return date.getYear() > d.getYear() || (date.getYear() == d.getYear() && date.getMonth() >= d.getMonth());
// 		}
// 	}).dateTimePickerRange();
	
// 	$('select', form).styleSelect({
// 		class_wrap: 'ul-dropdown-wrap',
// 	});

// 	var groups = $('.group', form).filter(function(){
// 		return !$(this).hasClass('submit');
// 	}).click(function(){
// 		$(groups).removeClass('active');
// 		$(this).addClass('active');
// 	});
// 	$('#name').trigger('click').trigger('focus');


	
// });

window.addEventListener("load", function(){
	var x = document.getElementsByClassName("tabcontent");
	for (var i = 0; i < x.length; i++) {
		x[0].style.display = 'grid';
		if(i>0){
			x[i].style.display = 'none';
		}
	}
});





var bread = document.getElementById('nav-icon-open');
var sandwich = document.getElementById('nav-icon-close');
var n = document.getElementById('nav-panel');

bread.addEventListener("click", function(){
    n.classList.remove("inactive");
    n.classList.add("active", "animated", "slideInDown");
});

sandwich.addEventListener("click", function(){
    n.classList.add("slideOutUp");
    setTimeout(function(){
        n.classList.remove("active", "slideOutUp");
        n.classList.add("inactive");
    }, 1000);
    
});

window.addEventListener("scroll", function(){
    var y = Math.round(window.scrollY);
    if (y == 0) {
        // alert("working");
        document.getElementById('navcon').classList.remove("navbar-con-active");
    } else {
        document.getElementById('navcon').classList.add("navbar-con-active");
    }
});






//----------------------------------------- sidebar configuration -------------------------------------------------

// window.onclick = function(event) {
//   if (event.target == slidemenu) {
//    slidemenu.style.left = '-250px';
//   }
// }

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