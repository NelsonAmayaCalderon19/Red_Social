function showP(){
        $pass = document.getElementById("password");
        if($pass.type=="password"){
            $pass.type="text";
        }else{
           $pass.type="password";
        }       
    }

    $(document).ready(function(){
        $('#btn_acceder').click(function(){
         if($('#usuario').val()==""){
         	document.getElementById("usuario").focus();
                alertify.alert("Debes Ingresar tu Usuario o Email");               
                return false;
            }else if($('#password').val()==""){
            	document.getElementById("password").focus();
                alertify.alert("Debes Ingresar tu Contraseña");               
                return false;
            }
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