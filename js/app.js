// vars
var u;
var barras = $('#boton-menu-movil a i');
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
  contacto();
  //default servicios
  // jala_contenido('1-elaboracion-certificacion', 0);

  jala_contenido_movil();

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

    $('#boton-menu-movil a').on('click', function() {
      //
      if ( menumovil.hasClass('hidden') ) {

        menumovil.removeClass('hidden');
        barras.addClass('color-rojo gira');
        menumovil.animate({
          opacity:1,
          transition: '0.5s'
        });

      } else {

        menumovil.animate({
          opacity:0,
          transition: '0.25s'
        });
        barras.removeClass('color-rojo gira');
        //espera a que se desvanezca
        setTimeout(function() {
          menumovil.addClass('hidden');
        },250)
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

        $.post('contacto/mail.php', {
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

          $("#formResponse").html('ERROR: Llena el Captcha por favor.').fadeIn('2000');
          return false;
        }
      });

    }


    //conenido servicios

    var tituloscategoria = ['Ingeniería & Certificación', 'Construcción ', 'Instrumentación y control'];
    var textoservicio;

    $('select option').on('touchstart click',function() {
      textoservicio = $(this).text();
      $('.titulo-master-2').html(textoservicio);
    });

    // $('#servicios-opciones li a').on('touchstart click',function() {
    //   textoservicio = $(this).text();
    //   $('.titulo-master-2').html(textoservicio);
    // });



    function jala_contenido(nombre,index) {

      var url = 'servicios/' + nombre + '.html';
      $.ajax({

        url: url,
        cache: false,
        success: function(data, status){
          // console.log("Data: " + data + "\nStatus: " + status);
          $('#servicioContenido').html(data).find('#main');
        }
      }).done(function() {
        // imprime titulo
        $('.titulo-master').html(tituloscategoria[index]);
      });

    }



    function jala_contenido_movil() {


      $('#select-servicios-movil').on('change', function() {

        var id = $(this).find(':selected').val();
        var i = $(this).find(':selected').index();
        var textoselect = $(this).find(':selected').text();
        //
        var url = 'servicios/' + id + '.html';
        $.ajax({
          url: url,
          cache: false,
          success: function(data, status){
            // console.log("Data: " + data + "\nStatus: " + status);
            $('#servicioContenido').html(data).find('#main');
          }
        }).done(function() {
          // imprime titulo

          if (i <= 4) {

            $('.titulo-master').html(tituloscategoria[0]);

          } else if (i > 4 && i <= 7 ) {

            $('.titulo-master').html(tituloscategoria[1]);

          } else if (i > 7 && i <= 14) {

            $('.titulo-master').html(tituloscategoria[2]);

          }

          $('.titulo-master-2').html(textoselect);


        });

      });

    }


    function link_contacto() {

      window.location='http://www.uvpipelines.com/contacto.php';

    }
    function link_servicios() {

      window.location='http://www.uvpipelines.com/servicios.php';

    }
