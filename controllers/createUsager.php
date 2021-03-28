<?php
$hasErreur = False;
$erreur = "";

// Récupération des catégories pour la vue
$db = Connexion::get();
$query = $db->query('SELECT * FROM categorie');
$categories = $query->fetchAll();

// Réception du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['numCarte']) && isset($_POST['nom']) && $_POST['numCateg'] && $_POST['dateCarte'] && $_POST['mtCaution']) {

      $nom = $_POST['nom'];
      $numCarte = $_POST['numCarte'];
      $numCateg = $_POST['numCateg'];
      $dateCarte = $_POST['dateCarte'];
      $montantCaution = $_POST['mtCaution'];
      if (!Usager::cartNumberExists($numCarte)) {

        Usager::creer($nom, $numCarte, $numCateg, $dateCarte,$montantCaution);

        // try {
        // } catch (Exception $e) {
        //   $erreur = "Cet numéro de carte existe déjà";
        //   $hasErreur = True;
        // }
      }else {
        $erreur = "Cet numéro de carte existe déjà";
        $hasErreur = True;
      }

    }
    else {
      $erreur = "Veuillez remplir tous les champs";
      $hasErreur = True;
    }


}

//On envoie à la vue
$smarty->assign('categories', $categories);
$smarty->assign('hasErreur', $hasErreur);
$smarty->assign('erreur', $erreur);


?>
