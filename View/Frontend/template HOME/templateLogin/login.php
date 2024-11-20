<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Bienvenue sur notre site Skill Swap</h2>
        <img id="pp" src="asseets/logoo.png" alt="logo">
        <form onsubmit="return validateForm()"  method="GET">
            <div class="input-group">
                <label for="email">Email</label>
                <input class="styled-input" type="email" id="email" name="email">
                <p id="errorMessage" style="color: red;"></p>
            </div>

      

            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input class="styled-input" type="password" id="password" name="password">
                <p id="errorMessage2" style="color: red;"></p>
            </div>
   

            <button type="submit" class="login-btn">Connexion</button>
            <div class="extra-options">
                <a href="#">Mot de passe oublié ?</a>
                <a href="http://localhost/PROJET%20WEB/View/Frontend/template%20Home/templateLogin/SignUp.php?">Créer un compte</a>
            </div>
        </form>
        
        <!-- Section des icônes -->
        <div class="social-icons">
            <img src="asseets/facebook-svgrepo-com (2).svg" alt="Facebook" class="icon">
            <img src="asseets/instagram-svgrepo-com.svg" alt="Instagram" class="icon">
            <img src="asseets/inbox-svgrepo-com (1).svg" alt="Email" class="icon">
        </div>
    </div>
</body>


















<script>
     function validateForm() {
            const titre = document.getElementById('email').value.trim();
            const description = document.getElementById('password').value.trim();
            const errorMessage = document.getElementById('errorMessage');
            const errorMessage2 = document.getElementById('errorMessage2');

            // Effacer les messages d'erreur précédents
            errorMessage.textContent = '';
            errorMessage2.textContent = '';

            if (titre === '' && description === '') {
                errorMessage.textContent = 'veuillez entrer votre email';
                errorMessage2.textContent = 'veuillez entrer votre password';
                return false;
            }

            if (titre === '') {
                errorMessage.textContent = 'veuillez entrer votre email';
                return false; // Empêche l'envoi du formulaire
            }

            if (description === '') {
                errorMessage2.textContent = 'veuillez entrer votre password';
                return false;
            }

            return true;
        }
</script>
</html>
