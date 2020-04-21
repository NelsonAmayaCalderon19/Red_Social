$('.modal').fadeOut();
	$('.grid-gallery__ite').click(function(e){
e.preventDefault();
var producto = $(this).attr('product');
$('.modal').fadeIn();
$('#titulito').val(producto);
	});
function closeModal(){
	$('.modal').fadeOut();
}


$(document).ready(function () {
   (function($) {
       $('#FiltrarContenido').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});