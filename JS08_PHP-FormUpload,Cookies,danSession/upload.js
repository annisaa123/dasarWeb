$(document). ready(function(){
    $("#submit").click(function(){
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            contentType: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $("#status").html(response);
            },
            error: function(){
                $("#status").html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});