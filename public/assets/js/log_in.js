function validateForm() {
    // Récupérer les valeurs des champs
 
    var password = document.getElementById('password').value;

    // Réinitialiser les messages d'erreur
   
    document.getElementById('passwordError').innerHTML = '';
 
    if (password.length < 8) {
        document.getElementById('passwordError').innerHTML = 'Le mot de passe doit avoir au moins 6 caractères';
        return;
    }

    // Si toutes les validations passent, vous pouvez envoyer le formulaire
    document.getElementById('registerForm').submit();
}