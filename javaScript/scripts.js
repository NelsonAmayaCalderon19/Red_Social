$(function() {
    $('.input-file__input').on('change', function() {
        if($(this)[0].files[0]) {
            $(this).prev().text($(this)[0].files[0].name);
            
        }
    })
})
