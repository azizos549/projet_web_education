<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Créer un compte</h2>
        <img id="pp" src="asseets/logoo.png" alt="Logo">
        <form onsubmit="return validateForm()" method="POST">
            <div class="input-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="utilisateur"  class="styled-input" placeholder="Entrez votre nom d'utilisateur">
                <p id="errorMessageUsername" style="color: red;"></p> <!-- Unique ID -->
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input  id="email" name="email"class="styled-input" placeholder="Entrez votre email">
                <p id="errorMessageEmail" style="color: red;"></p> <!-- Unique ID -->
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name ="motdepasse"class="styled-input" placeholder="Entrez votre mot de passe">
                <p id="errorMessagePassword" style="color: red;"></p> <!-- Unique ID -->
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirmer le mot de passe</label>
                <input type="password" id="confirm-password" class="styled-input" placeholder="Confirmez votre mot de passe">
                <p id="errorMessageConfirmPassword" style="color: red;"></p> <!-- Unique ID -->
            </div>
            <div class="input-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" class="styled-input" placeholder="Donner votre numéro">
                <p id="errorMessageTelephone" style="color: red;"></p> <!-- Unique ID -->
            </div>
            <div class="input-group">
                <label>Role</label>
                <br>
                                    <input type="radio" name="role" value="0"> Admin
                    <input type="radio" name="role" value="1"> Client
              
                <p id="errorMessageRole" style="color: red;"></p> <!-- Unique ID -->
            </div>
            <button type="submit" class="login-btn">S'inscrire</button>
        </form>
        
        <div class="extra-options">
            <p>Déjà un compte ? <a href="http://localhost/PROJET%20WEB/View/Frontend/template%20Home/templateLogin/login.php?">Connectez-vous</a></p>
        </div>





        <!--******************************************************************************--->
        <?php
include $_SERVER['DOCUMENT_ROOT'] . '/PROJET WEB/Model/modelUser.php';
include $_SERVER['DOCUMENT_ROOT'] . '/PROJET WEB/Controller/controllerUser.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];
    $telephone = $_POST['telephone'];
    $utilisateur = $_POST['utilisateur'];
    $role = $_POST['role'];

    // Créer un objet Utilisateur avec les données récupérées
    $user1 = new User( $utilisateur,$email, $motdepasse, $telephone, $role);

    // Créer une instance du contrôleur Utilisateur
    $v1 = new CoursController ();

    // Appeler la méthode pour ajouter l'utilisateur
    try {
        $v1->addUser($user1);
      
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}

?>




        <!--*********************************-->
    </div>
  
</body>
<script>
    function validateForm() {
        const username = document.getElementById('username').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        const confirmPassword = document.getElementById('confirm-password').value.trim();
        const telephone = document.getElementById('telephone').value.trim();
        const errorMessageUsername = document.getElementById('errorMessageUsername');
        const errorMessageEmail = document.getElementById('errorMessageEmail');
        const errorMessagePassword = document.getElementById('errorMessagePassword');
        const errorMessageConfirmPassword = document.getElementById('errorMessageConfirmPassword');
        const errorMessageTelephone = document.getElementById('errorMessageTelephone');
        const errorMessageRole = document.getElementById('errorMessageRole');

        // Effacer les messages d'erreur précédents
        errorMessageUsername.textContent = '';
        errorMessageEmail.textContent = '';
        errorMessagePassword.textContent = '';
        errorMessageConfirmPassword.textContent = '';
        errorMessageTelephone.textContent = '';
        errorMessageRole.textContent = '';

        // Validation des champs requis
        if (username === '' || email === '' || password === '' || confirmPassword === '' || telephone === '') {
            if (username === '') {
                errorMessageUsername.textContent = 'Veuillez entrer votre nom';
            }
            if (email === '') {
                errorMessageEmail.textContent = 'Veuillez entrer votre email';
            }
            if (password === '') {
                errorMessagePassword.textContent = 'Veuillez entrer votre mot de passe';
            }
            if (confirmPassword === '') {
                errorMessageConfirmPassword.textContent = 'Veuillez confirmer votre mot de passe';
            }
            if (telephone === '') {
                errorMessageTelephone.textContent = 'Veuillez entrer votre numéro de téléphone';
            }
            
            const roleSelected = document.querySelector('input[name="role"]:checked');
            if (!roleSelected) {
            errorMessageRole.textContent = 'Veuillez choisir un rôle (Admin ou Client)';
        
        }
        return false;
        }

        // Validation si les mots de passe correspondent
        if (password !== confirmPassword) {
            errorMessageConfirmPassword.textContent = 'Les mots de passe ne correspondent pas';
            return false;
        }

     

        // Validation du téléphone (vérification d'un format simple de numéro de téléphone)
        const phonePattern = /^[0-9]{8}$/;  // Exemple de format de numéro de téléphone (10 chiffres)
        if (!phonePattern.test(telephone)) {
            errorMessageTelephone.textContent = 'Veuillez entrer un numéro de téléphone valide (8 chiffres)';
            return false;
        }

        return true; // Si tout est valide, le formulaire peut être soumis
    }
</script>

</html>
