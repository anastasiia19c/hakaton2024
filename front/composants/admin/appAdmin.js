$(document).ready(function() {
    $('.chanson-form').on('submit', function(event) {
        event.preventDefault();

        var form = $(this);
        var chanson_id = form.find('input[name="chanson_id"]').val();
        var isValid = form.find('input[name="isValid"]').val();

        $.ajax({
            url: '../../../back/controller/isValid.php',
            type: 'POST',
            data: {
                chanson_id: chanson_id,
                isValid: isValid
            },
            success: function(response) {
                alert("Chanson mise à jour avec succès!");
                location.reload();
            },
            error: function() {
                alert("Erreur lors de la mise à jour.");
            }
        });
    });
});