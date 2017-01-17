$(function() {
    $('#ServerActions').submit(function(e) {
        e.preventDefault();
        var submit_value = $('#SubmitButton').val();
        $.post("/minecraft/controllers/server_controller.php", {submit: submit_value}, function(result) {
            console.log(result);
            if (result == "success") {
                window.location.reload();
            }
        });
    })
})
