<?php
// Inclure les fichiers nécessaires
include_once('../../Controller/controllerUser.php');
include_once('../../Model/modelUser.php');  // Assurez-vous que la classe User est incluse ici

// Initialiser la variable $user
$user = null;

// Vérifier si l'ID de l'utilisateur est passé dans l'URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    
    // Créer un objet du contrôleur UserController
    $utilisateursController = new CoursController();
    
    // Récupérer les détails de l'utilisateur à partir de l'ID
    $user = $utilisateursController->getUserById($userId);
}

// Vérifier si l'utilisateur a été trouvé
if ($user === null) {
    echo "L'utilisateur demandé n'existe pas.";
    exit();
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'], $_POST['motdepasse'], $_POST['email'], $_POST['phone'], $_POST['role'])) {
    // Récupérer les données du formulaire
    $name = $_POST['name']; // Correspond à 'name' dans le formulaire
    $email = $_POST['email']; // Correspond à 'email' dans le formulaire
    $motdepasse = $_POST['motdepasse']; // Correspond à 'email' dans le formulaire
    $phone = $_POST['phone']; // Correspond à 'phone' dans le formulaire
    $role = $_POST['role']; // Correspond à 'role' dans le formulaire

    // Créer un objet utilisateur (assurez-vous que cette classe est définie dans User.php)
    $user = new User($name, $email,$motdepasse, $phone, $role); // Constructeur qui prend en paramètre les données

    // Mettre à jour l'utilisateur
    $utilisateursController->updateUser($user, $userId); // Passer l'objet et l'ID

    // Rediriger vers la page du tableau des utilisateurs après la mise à jour
    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'utilisateur</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="user-info">
        <img src="logoo.png" alt="User Profile">
        <span>Bienvenue sur notre site <?= htmlspecialchars($user['Utilisateur']); ?></span>
    </div>

    <nav>
        <ul>
            <li><a href="#profile" onclick="showSection('profile')">Profile</a></li>
            <li><a href="#forum" onclick="showSection('forum')">Forum</a></li>
            <li><a href="#skillSwap" onclick="showSection('skillSwapp')">Skill Swapp</a></li>
            <li><a href="#blog" onclick="showSection('blog')">Blog</a></li>
            <li><a href="#Quiz" onclick="showSection('quiz')">Quiz</a></li>
            <li><a href="#Reclamation" onclick="showSection('reclamation')">Réclamation</a></li>
        </ul>
    </nav>

    <div class="content">
        <div id="profile-content" class="section-content">
            <h2 class="section-title">Modifier l'utilisateur</h2>
            
            <!-- Formulaire de mise à jour -->
            <form method="POST" >
                <input type="hidden" name="id" value="<?= htmlspecialchars($user['Id']); ?>">

                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['Utilisateur']); ?>" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['Email']); ?>" required>

                <label for="motdepasse">Mot De Passe :</label>
                <input type="password" id="motdepasse" name="motdepasse" value="<?= htmlspecialchars($user['MotDePasse']); ?>" required>

                <label for="phone">Téléphone :</label>
                <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($user['Telephone']); ?>" required>

                <label for="role">Rôle :</label>
                <select name="role" id="role">
                    <option value="admin" <?= $user['Role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                    <option value="user" <?= $user['Role'] == 'user' ? 'selected' : ''; ?>>User</option>
                </select>

                <button type="submit" class="btn-update">Mettre à jour</button>
            </form>
        </div>
    </div>

    <script>
        // Function to show the selected section and hide others
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section-content');
            sections.forEach(section => {
                section.style.display = 'none';
            });

            const selectedSection = document.getElementById(sectionId + '-content');
            if (selectedSection) {
                selectedSection.style.display = 'block';
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            showSection('profile');
        });
    </script>
</body>
</html>
