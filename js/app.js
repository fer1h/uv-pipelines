// vars
var u;
var barras =$('#bonoton-menu-movil a i');
var menumovil = $('#menu-movil');

$(document).foundation();
//
// ready
$(document).ready(function() {

  u = new Utils();

  u.shareH();
  u.vcenter();

  $('.imgLiquid.imgLiquidFill').imgLiquid();
  $('.imgLiquid.imgLiquidNoFill').imgLiquid({fill:false});


  menu_movil();
  slider_inicio();


  //reajuste en cambio de pantalla
  u.addWindowResizeFunction(
    function() {
      u.vcenter();
      u.shareH();

    });

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
      autoplaySpeed:1000
    });
  }
