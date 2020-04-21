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