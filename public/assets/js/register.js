function validateForm() {
    // Récupérer les valeurs des champs
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Réinitialiser les messages d'erreur
    document.getElementById('usernameError').innerHTML = '';
    document.getElementById('emailError').innerHTML = '';
    document.getElementById('passwordError').innerHTML = '';

    // Validation du nom d'utilisateur
    if (username.trim() === '') {
        document.getElementById('usernameError').innerHTML = 'Le nom d\'utilisateur est requis';
        return;
    }

    // Validation de l'email
    var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;
    if (!emailRegex.test(email)) {
        document.getElementById('emailError').innerHTML = 'Adresse email invalide';
        return;
    }

    // Validation du mot de passe
    if (password.length < 8) {
        document.getElementById('passwordError').innerHTML = 'Le mot de passe doit avoir au moins 6 caractères';
        return;
    }

    // Si toutes les validations passent, vous pouvez envoyer le formulaire
    document.getElementById('registerForm').submit();
}