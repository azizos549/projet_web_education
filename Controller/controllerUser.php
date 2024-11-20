
<?php
include_once __DIR__ . '/../config/config.php'; 
class CoursController {
    
    
    public function addUser($user) {
      
        $sql = "INSERT INTO utilisateur(Email, MotDePasse, Telephone, Utilisateur, Role) 
                VALUES (:email, :motdepasse, :telephone, :utilisateur, :role)"; 

        // Connexion à la base de données
        $db = config::getConnexion();

        try {
            // Préparation de la requête SQL
            $query = $db->prepare($sql);

            // Exécution de la requête en utilisant les valeurs de l'objet User
            $query->execute([
                'email' => $user->getEmail(),
                'motdepasse' => $user->getMotDePasse(),
                'telephone' => $user->getTelephone(),
                'utilisateur' => $user->getUtilisateur(),
                'role' => $user->getRole()
            ]);

        } catch (Exception $e) {
            // Gestion des erreurs en cas d'exception
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function listUser()
    {
        $sql = "SELECT * FROM  utilisateur";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function deleteUser($id)
    {
        $sql = "DELETE FROM Utilisateur WHERE id = :Id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }



    function updateUser($user, $id)
    {
        var_dump($user); // Pour déboguer et voir les données
        
        try {
            // Connexion à la base de données
            $db = config::getConnexion();
    
            // Préparer la requête SQL pour mettre à jour les informations de l'utilisateur
            $query = $db->prepare(
                'UPDATE Utilisateur SET 
                    Utilisateur = :name,
                    Email = :email,
                    MotDePasse= :motdepasse,
                    Telephone = :phone,
                    Role = :role
                WHERE Id = :id'
            );
    
            // Exécuter la requête en passant les paramètres récupérés de l'objet `$user`
            $query->execute([
                'id' => $id,
                'name' => $user->getUtilisateur(),
                'email' => $user->getEmail(),
                'motdepasse'=>$user->getMotDePasse(),

                'phone' => $user->getTelephone(),
                'role' => $user->getRole()
            ]);
    
            // Afficher le nombre de lignes mises à jour
            echo $query->rowCount() . " records UPDATED successfully <br>";
    
        } catch (PDOException $e) {
            // Gérer les erreurs de la base de données
            echo "Error: " . $e->getMessage();
        }
    }
    public function getUserById($userId) {
        // Code pour récupérer l'utilisateur à partir de l'ID
        // Cela pourrait être une requête à la base de données
        $db = new PDO("mysql:host=localhost;dbname=user", 'root', '');
        $query = "SELECT * FROM utilisateur WHERE Id = :userId";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    
    

}
?>


