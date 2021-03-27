function validatePassword() {
    var password = document.getElementById("mot_de_passe");
    var confirm_password = document.getElementById("conf_mot_de_passe");

    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Mot de passe différent !!");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


//Deuxieme fonction

function checkPassword(form) {
    mot_de_passe = form.mot_de_passe.value;
    conf_mot_de_passe = form.conf_mot_de_passe.value;

    // If Not same return False.    
    if (mot_de_passe != conf_mot_de_passe) {
        form.conf_mot_de_passe.setCustomValidity("Mot de passe incohérent !!");
        return false;
    }

    // If same return True.
    else {
        return true;
    }
}



//Troisieme fonction
$(() => {
    $('#mot_de_passe, #conf_mot_de_passe').on('keyup', function() {
        if ($('#mot_de_passe').val() == "" && $('#conf_mot_de_passe').val() == "") {
            $('#suivant_infoPerso').prop('disabled', true);
        } else if ($('#mot_de_passe').val() != "" && $('#conf_mot_de_passe').val() == "") {
            $('#suivant_infoPerso').prop('disabled', true);
        } else if ($('#mot_de_passe').val() == $('#conf_mot_de_passe').val()) {
            $('#suivant_infoPerso').prop('disabled', false);
            //$('#message').show().html('Password Match').css('color', 'green');
        } else {
            $('#suivant_infoPerso').prop('disabled', true);
            //$('#message').show().html('Password do not match').css('color', 'red');
        }
    });
});