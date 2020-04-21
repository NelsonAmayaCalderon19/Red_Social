$(document).ready(function(){
                    $("#mostraricon").click(function () {
                      if($("#icon").css("visibility") == "hidden"){
                   document.getElementById("icon").style.visibility = "visible";
                   document.getElementById("icon2").style.visibility = "visible";
                   document.getElementById("icon3").style.visibility = "visible";
                   document.getElementById("icon4").style.visibility = "visible";
                   document.getElementById("icon5").style.visibility = "visible";
                   $("#mostraricon").attr('title', "Ocultar Opciones");
                   
                 }else if($("#icon").css("visibility") == "visible"){
                  document.getElementById("icon").style.visibility = "hidden";
                   document.getElementById("icon2").style.visibility = "hidden";
                   document.getElementById("icon3").style.visibility = "hidden";
                   document.getElementById("icon4").style.visibility = "hidden";
                   document.getElementById("icon5").style.visibility = "hidden";                  
                   $("#mostraricon").attr('title', "Ver Opciones");
                 }
                 });
                  });
  $('.modal').fadeOut();
	$('#abrir_modal').click(function(e){
e.preventDefault();
$('.modal').fadeIn();
	});
function closeModal(){
	$('.modal').fadeOut();
  document.getElementById("icon").style.visibility = "hidden";
                   document.getElementById("icon2").style.visibility = "hidden";
                   document.getElementById("icon3").style.visibility = "hidden";
                   document.getElementById("icon4").style.visibility = "hidden";
                   document.getElementById("icon5").style.visibility = "hidden";
}
function closeModal2(){
  var mensaje=document.getElementById("cuerpo_mensaje").value;
  if(mensaje==""){
            document.getElementById("cuerpo_mensaje").focus();
                alertify.alert("Advertencia!","No puede ir Vacío el Mensaje");               
                return false;
            }else{
  toastr.options = {
  "debug": false,
  "positionClass": "toast-bottom-right",
  "onclick": null,
  "fadeIn": 400,
  "fadeOut": 150,
  "timeOut": 1500,
  "extendedTimeOut": 1500
}
  $('.modal').fadeOut();
  toastr.success('Tu Mensaje se Envió Exitosamente', 'Mensaje Enviado');
setTimeout( function(){document.form_add_product.submit();} ,1200 );  
}
}
function pregunta(){
  swal({
  title: "Estas Seguro de Seguir este Perfil?",
  text: "Da click en OK, si estas Seguro",
  icon: "success",
  buttons: true,
  dangerMode: true,
})
.then((willConfirm) => {
  if (willConfirm) {
    toastr.options = {
  "debug": false,
  "positionClass": "toast-bottom-right",
  "onclick": null,
  "fadeIn": 400,
  "fadeOut": 150,
  "timeOut": 1500,
  "extendedTimeOut": 1500
}
   toastr.success('Ya estas Siquiendo este Perfil', 'Proceso Exitoso'); 
     setTimeout( function(){document.tuformulario.submit();} ,1000 );
  } else {  
  }
});   
    }
function pregunta2(){
  swal({
  title: "Estas Seguro de Dejar de Seguir este Perfil?",
  text: "Da Click en Ok, si estas Seguro",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    toastr.options = {
  "debug": false,
  "positionClass": "toast-bottom-right",
  "onclick": null,
  "fadeIn": 400,
  "fadeOut": 150,
  "timeOut": 1500,
  "extendedTimeOut": 1500
}
  toastr.success('Usuario Bloqueado Exitosamente', 'Proceso Exitoso');
      setTimeout( function(){document.tuformulario2.submit();} ,1000 );
  } else {   
  }
});   
}