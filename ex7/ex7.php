<?php
$form = '<form action="user.php" method="get">

<select name="genre">
      <option value="Mme">Mme</option>
      <option value="Mr">Mr</option>
</select>

<input type="text" name="nom" id="nom" placeholder="Nom" required>
<input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
<input type="file" name="file" id="file">
<button type="submit">Envoyer</button>
<button type="reset">Effacer</button>


</form>';


// Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier. -->


if (empty($_GET['nom']) && empty($_GET['prenom'])){
    $result= $form;
} else {
    $result= $_GET['genre'].' '. $_GET['nom'].' '. $_GET['prenom'] .' '.pathinfo($_GET['file'],PATHINFO_BASENAME);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Partie 7 les formulaires Ex7</title>
</head>
<body>

<?= $result ?>

</body>
</html>