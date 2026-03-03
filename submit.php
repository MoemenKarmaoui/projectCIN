<?php
// Configuration de la base de données
$host = 'localhost';
$dbname = 'db test'; // Remplacez par 'db_test' si votre base de données n'a pas d'espace
$username = 'root';
$password = '';

try {
    // Connexion à la base de données via PDO (sécurisé contre les injections SQL)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Configuration pour afficher les erreurs SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération sécurisée des données du formulaire
        $name = $_POST['name'] ?? null;
        $CIN = $_POST['CIN'] ?? null;
        $Naissance = $_POST['Naissance'] ?? null;
        $Adresse = $_POST['Adresse'] ?? null;
        $Niveau = $_POST['Niveau'] ?? null;
        $Tel = $_POST['Tel'] ?? null;
        $Eta = $_POST['Eta'] ?? null;
        $org = $_POST['org'] ?? null;
        $typeS = $_POST['typeS'] ?? null;
        $SujetS = $_POST['SujetS'] ?? null;
        $PeriodS = $_POST['PeriodS'] ?? null;
        $PeriodE = $_POST['PeriodE'] ?? null;
        $Check1 = $_POST['Check1'] ?? null;
        
        // Gérer les champs numériques optionnels (montant)
        $mont = !empty($_POST['mont']) ? $_POST['mont'] : null;
        
        $sig = $_POST['sig'] ?? null;
        $ENC = $_POST['ENC'] ?? null;

        // Préparation de la requête d'insertion
        // L'utilisation des backticks (`) protège les noms de colonnes et tables
        $sql = "INSERT INTO `user` (`name`, `CIN`, `Naissance`, `Adresse`, `Niveau`, `Tel`, `Eta`, `org`, `typeS`, `SujetS`, `PeriodS`, `PeriodE`, `Check1`, `mont`, `sig`, `ENC`) 
                VALUES (:name, :CIN, :Naissance, :Adresse, :Niveau, :Tel, :Eta, :org, :typeS, :SujetS, :PeriodS, :PeriodE, :Check1, :mont, :sig, :ENC)";
        
        $stmt = $pdo->prepare($sql);
        
        // Exécution de la requête avec liaison des paramètres (protège contre l'injection SQL)
        $stmt->execute([
            ':name' => $name,
            ':CIN' => $CIN,
            ':Naissance' => $Naissance,
            ':Adresse' => $Adresse,
            ':Niveau' => $Niveau,
            ':Tel' => $Tel,
            ':Eta' => $Eta,
            ':org' => $org,
            ':typeS' => $typeS,
            ':SujetS' => $SujetS,
            ':PeriodS' => $PeriodS,
            ':PeriodE' => $PeriodE,
            ':Check1' => $Check1,
            ':mont' => $mont,
            ':sig' => $sig,
            ':ENC' => $ENC
        ]);

        echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
        echo "<h2 style='color: green;'>Inscription réussie !</h2>";
        echo "<p>Les données ont été insérées dans la base de données avec succès.</p>";
        echo "<a href='index.html' style='text-decoration: none; padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px;'>Retour au formulaire</a>";
        echo "</div>";
    }
} catch (PDOException $e) {
    echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
    echo "<h2 style='color: red;'>Erreur lors de l'inscription</h2>";
    echo "<p>Message d'erreur : " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "</div>";
}
?>
