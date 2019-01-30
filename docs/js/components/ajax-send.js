$(document).ready(function () {
    $('#form').submit(function () {
        $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: $(this).serealize()
        }).done(function(){
            alert('Tnanks, we will contact you');
        });
        return false;
    });
});