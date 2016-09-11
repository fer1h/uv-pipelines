// vars
var u;
var barras =$('#bonoton-menu-movil a i');
var menumovil = $('#menu-movil');


//
// ready
$(document).ready(function() {

$(this).foundation();

  u = new Utils();

  u.vcenter();

  $('.imgLiquid.imgLiquidFill').imgLiquid();
  $('.imgLiquid.imgLiquidNoFill').imgLiquid({fill:false});


  menu_movil();
  slider_inicio();


  //reajuste en cambio de pantalla
  u.addWindowResizeFunction(
    function() {

      u.vcenter();

    });


//
    $(window).resize(function() {
      console.log('resize');
      if ($(this).width() >= 1024 && ! menumovil.hasClass('hidden')) {
        console.log('menor a 1024');
        menumovil.addClass('hidden');
      }

    });
    //

  });
  // termina ready

  function menu_movil() {


    $('#bonoton-menu-movil a').on('click', function() {
      //
      if ( menumovil.hasClass('hidden') ) {

        menumovil.removeClass('hidden');
        barras.addClass('color-rojo');
        menumovil.css({
          transition: '0.5s',
          opacity: 1
        });

      } else {

        menumovil.addClass('hidden');
        barras.removeClass('color-rojo');
        menumovil.css({
          opacity: 0
        });
      }
      //
    });

  }

  function slider_inicio() {

    $('#slider-inicio').slick({
      dots:true,
      arrows:false,
      speed: 1000,
      autoplay:true,
      autoplaySpeed:5000
    });
  }


function contacto() {

  $("#uvForm").submit(function() {
  	if ($("#g-recaptcha-response").val()) {
  		$.post('form/mail.php', {
  			name: $('#inputName').val(),
  			email: $('#inputEmail').val(),
  			phone: $('#inputPhone').val(),
  			type: $('#selectSubject').val(),
  			message: $('#inputMessage').val(),
  			captchaResponse: $('#g-recaptcha-response').val(),
  			contactFormSubmitted: 'yes'},
  			function(data) {
  				$("#formResponse").html(data).fadeIn('2000');
  			}, 'text');
  			return false;
  		} else {
  			$("#formResponse").html('ERROR: llena el Captcha por favor.').fadeIn('2000');
  			return false;
  		}
  	});

}
