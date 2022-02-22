<head>
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<?php

/**
 * Utilisez la base de données que vous avez utilisé dans l'exo 194.
 * Utilisez aussi le CSS que vous avez écris ( div contenant l'utilisateur ).
 * Pour chaque sélection, vous utiliserez un div par utilisateur:
 * ex:  <div class="classe-css-utilisateur">
 *          utilisateur 1, données ( nom, prenom, etc ... )
 *      </div>
 *      <div class="classe-css-utilisateur">
 *          utilisateur 2, données ( nom, prenom, etc ... )
 *      </div>
 *
 * -- Sélections complexes --
 * Une seule requête est permise pour chaque point de l'exo.
 */

require __DIR__ . '/Classes/Config.php';
require __DIR__ . '/Classes/DBSingleton.php';

$pdo = DBSingleton::PDO();

// TODO Commencez par créer votre objet de connexion à la base de données, vous pouvez aussi utiliser l'objet statique ou autre qu'on a créé ensemble.

/* 1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' */
// TODO votre code ici.

$stm = $pdo->prepare("
        SELECT * FROM user WHERE nom='Conor'
");

/* 2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John' */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE prenom!='Conor'
");
*/
/* 3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2 */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE id <= 2
");
*/
/* 4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2 */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE id >= 2
");
*/
/* 5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1 */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE id = 1
");
*/
/* 6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe' */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE id > 1 AND nom='Doe'
");
*/
/* 7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'*/
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE nom='Doe' AND prenom='John'
");
*/
/* 8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane' */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE nom='Doe' OR prenom='John'
");
*/
/* 9. Sélectionnez et affichez tous les utilisateurs en limitant les réultats à 2 résultats */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user LIMIT 2
");
*/
/* 10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user LIMIT 1
");
*/
/* 11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères ( voir LIKE )*/
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE nom LIKE 'C___r'
");
*/
/* 12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e' */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE nom LIKE '%e%'
");
*/
/* 13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ... voir IN , pas OR '' */
// TODO Votre code ici.
/*
$stm = $pdo->prepare("
        SELECT * FROM user WHERE prenom IN ('John', 'Sarah')
");
*/
/* 14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4 */
// TODO Votre code ici.

$stm = $pdo->prepare("
        SELECT * FROM user WHERE id BETWEEN 2 and 4
");

if ($stm->execute()) {
    foreach ($stm->fetchAll() as $index => $user) {
        echo "<div class='user'><h3>Utilisateur ".($index+1)." :</h3>";
        foreach ($user as $key => $value) {
            echo "<div>".$key." : ".$value."</div>";
        }
        echo "</div>";
    }
}