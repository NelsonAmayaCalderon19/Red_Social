
     function redireccionar(){
  window.location="index.php";
}
    $(document).ready(function(){
        $('#registrarNuevo').click(function(){
var isChecked = document.getElementById('check').checked;
re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
var porId=document.getElementById("email").value;
         if($('#usuario').val()==""){
            document.getElementById("usuario").focus();
                alertify.alert("Advertencia!","Debes Ingresar un Usuario");               
                return false;
            }else if($('#nombre').val()==""){
                document.getElementById("nombre").focus();
                alertify.alert("Advertencia!","Debes Ingresar tu Nombre");
                return false;
            }else if($('#email').val()==""){
                document.getElementById("email").focus();
                alertify.alert("Advertencia!","Debes Ingresar un Email Válido");
                return false;
            }else if(!re.exec(porId)){
                document.getElementById("email").focus();
        alertify.alert("Advertencia!","Email No Valido");
        return false;
            }else if($('#password').val()==""){
                document.getElementById("password").focus();
                alertify.alert("Advertencia!","Debes Ingresar una Contraseña");
                return false;
            }else if($('#password').val().length < 8){
                document.getElementById("password").value = "";
                document.getElementById("password").focus();
                alertify.alert("Advertencia!","La Contraseña debe tener Mínimo 8 Dígitos");
                return false;
            }else if(!isChecked){
  alertify.alert("Advertencia!","Debes Aceptar los términos y condiciones");
                return false;
}
   

            cadena="usuario=" + $('#usuario').val() +
                    "&nombre=" + $('#nombre').val() +
                    "&email=" + $('#email').val() + 
                    "&password=" + $('#password').val();

                    $.ajax({
                        type:"POST",
                        url:"Controlador/registrar_usuario.php",
                        data:cadena,
                        success:function(r){

                            if(r==2){
                                document.getElementById("usuario").focus();
                                alertify.alert("Advertencia!","Este usuario ya existe, Por Favor Elija Otro");     
                            }
                            else if(r==1){
                                $('#frmRegistro')[0].reset();
                                alertify.success("Agregado con exito");
                                setTimeout ("redireccionar()", 1500);
                            }else{
                                alertify.error("Fallo al agregar");
                            }
                        }
                    });
        });
    });

    var index = 0;

    var listaimg = ["imagen/fondo-azul.jpg", "imagen/fondo-azul2.jpg", "imagen/fondo-azul3.jpg", "imagen/fondo-azul4.jpg"];

$(function() {
  
    setInterval(changeImage, 5000);
  
});

function changeImage() {
   $('body').css("background-image", 'url(' + listaimg[index] + ')');
                  
   index++;
                  
   if(index == 4)
      index = 0;  
}