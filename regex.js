// TEST FORMULAIRE EMAIL
const form = document.getElementById('form');
form.addEventListener('submit', function(event){

    // Récupérer les valeurs de l'email et du téléphone depuis les champs de saisie
    let emailVal = document.getElementById('email').value;
    let telVal = document.getElementById('tel').value;
    // NON VALUE FOR THE RESTE IF ITS WRONG
    let email = document.getElementById("email");
    let tel = document.getElementById('tel');

    // Expression régulière pour vérifier le format d'un email
    let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // Expression régulière pour vérifier le format d'un numéro de téléphone (10 chiffres)
    let regexPhone = /^\d{10}$/;

    // Vérifier l'email
    if(!regexEmail.test(emailVal)){
        alert("L'email entrée n'est pas valide. Veuillez saisir une adresse email correcte.");
        email.value = "";
        event.preventDefault();
        return; // Arrêter l'exécution du script si l'email n'est pas valide
    };
    // Vérifier le numéro de téléphone
    if(!regexPhone.test(telVal)){
        alert("Le numéro de téléphone n'est pas valide. Veuillez saisir un numéro de téléphone correct.");
        tel.value = ""; 
        event.preventDefault();
        return;
    };
});