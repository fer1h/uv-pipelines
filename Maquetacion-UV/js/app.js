
$(document).foundation();

var u;

$(document).ready(function() {

u = new Utils();

u.vcenter();

$('.imgLiquid.imgLiquidFill').imgLiquid();
$('.imgLiquid.imgLiquidNoFill').imgLiquid({fill:false});


//reajuste para cambio de pantalla
u.addWindowResizeFunction(
     function() {
         u.vcenter();

      }
   );
