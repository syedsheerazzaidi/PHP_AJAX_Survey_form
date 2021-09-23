$(document).on('submit','#formid',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "php-script.php",
    data:$(this).serialize(),
    success: function(data){
    $('#msg').html(data);
    $('#formid').find('input').val('')

    }});
});