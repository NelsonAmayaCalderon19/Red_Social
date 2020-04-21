    	$("#file").change(function(){
    $("#btn-Agregar").prop("disabled", this.files.length == 0);
});
        function pregunta(){ 
          
            toastr.options = {
          
          
  "debug": false,
  "positionClass": "toast-bottom-right",
  "onclick": null,
  "fadeIn": 400,
  "fadeOut": 150,
  "timeOut": 1500,
  "extendedTimeOut": 2000
}
   toastr.success('Imagen de Perfil Actualizada', 'Proceso Exitoso'); 
     setTimeout( function(){document.tuformulario.submit();} ,1000 );
  }   
  function pregunta2(){ 
          if($('#password').val()=="" || $('#password').val().length < 8 ){
            document.getElementById("password").focus();
                alertify.alert("Advertencia!","Debes Ingresar una Password, de mínimo 8 Dígitos");               
                return false;
            }else{
            toastr.options = {
  "debug": false,
  "positionClass": "toast-bottom-right",
  "onclick": null,
  "fadeIn": 400,
  "fadeOut": 150,
  "timeOut": 1500,
  "extendedTimeOut": 2000
}
   toastr.success('Contraseña Actualizada', 'Proceso Exitoso'); 
     setTimeout( function(){document.tuformulario2.submit();} ,1000 );
  } 
    }