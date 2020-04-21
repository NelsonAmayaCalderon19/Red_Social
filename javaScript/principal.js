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