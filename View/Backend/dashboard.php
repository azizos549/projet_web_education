<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    
</head>
<body>


    
    <div class="user-info">
        <img src="logoo.png" alt="User Profile">
       
        <span>bienvenue sur notre site  : </span>
        <h1>dashboard</h1>
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
        <!--div aziz akrout-->
        <div id="profile-content" class="section-content">
            <h2 class="section-title">Profile</h2>
     +
            <?php

include_once('../../Controller/controllerUser.php');

$utilisateursController = new CoursController();

$list = $utilisateursController->listUser();
?>

<!-- Affichage des données dans une table -->
<table class="styled-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Password</th>
            
            <th>Telephone</th>
            <th>Rôle</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Parcourir la liste des utilisateurs et afficher chaque utilisateur dans une ligne
        foreach ($list as $user) {
        ?>
            <tr>
                <td><?= $user['Id']; ?></td>
                <td><?= htmlspecialchars($user['Utilisateur']); ?></td>
                <td><?= htmlspecialchars($user['Email']); ?></td>
                <td><?= htmlspecialchars($user['MotDePasse']); ?></td>
                <td><?= htmlspecialchars($user['Telephone']); ?></td>
                <td><?= htmlspecialchars($user['Role']); ?></td>
                <td align="center">
                    <form method="GET" action="updateUser.php">
                        <input type="hidden" value="<?= $user['Id']; ?>" name="id">
                        <button class="btn-update" type="submit">Modifier</button>
                    </form>
                </td>
                <td>
                    <a class="btn-delete"href="deleteUser.php?id=<?= $user['Id']; ?>">Supprimer</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

            
      
        
            
        </div>


        <!--div amine slema-->
        <div id="forum-content" class="section-content">
            <h2 class="section-title">Forum</h2>
            <p class="section-description">Join discussions, ask questions, and interact with the community in our forum.</p>
        </div>
        
        <!--div amine nour el houda ammamou-->
        <div id="skillSwapp-content" class="section-content">
            <h2 class="section-title">Skill Swap</h2>
            <p class="section-description">Exchange skills with other members of the community. Find new opportunities for learning and teaching.</p>
        </div>
                <!--div Safa ben atia-->
        <div id="blog-content" class="section-content">
            <h2 class="section-title">Blog</h2>
            <p class="section-description">Contribute to or read interesting posts in our community blog. Stay updated with the latest trends.</p>
        </div>
           <!--div Yosr moussa-->
        <div id="quiz-content" class="section-content">
            <h2 class="section-title">Quiz</h2>
            <p class="section-description">Test your knowledge on various topics with our fun quizzes. Challenge yourself and others!</p>
        </div>
                  <!--div aziz jalloul-->
        <div id="reclamation-content" class="section-content">
            <h2 class="section-title">Réclamation</h2>
            <p class="section-description">Submit any issues or complaints to the admin. We are here to help resolve any problems.</p>
        </div>
    </div>

    <script>
        // Function to show the selected section and hide others
        function showSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('.section-content');
            sections.forEach(section => {
                section.style.display = 'none';
            });

            // Show the selected section
            const selectedSection = document.getElementById(sectionId + '-content');
            if (selectedSection) {
                selectedSection.style.display = 'block';
            }
        }

        // Show the first section by default
        document.addEventListener('DOMContentLoaded', () => {
            showSection('profile');
        });
    </script>
</body>
</html>
