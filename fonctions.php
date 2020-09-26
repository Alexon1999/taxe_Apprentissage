<?php
function getLesProjets()
{
    $lesProjets = null;
    $bdd = new PDO('mysql:host=localhost;dbname=id12619193_taxe', 'id12619193_taxe', 'taxe123')
        or die('Erreur connexion à la base de données');
    $requete = "select * from projet;";
    $resultat = $bdd->query($requete);
    $lesProjets = $resultat->fetchAll();

    return $lesProjets;
}
function getCategories()
{
    $lesCategorie = null;
    $bdd = new PDO('mysql:host=localhost;dbname=id12619193_taxe', 'id12619193_taxe', 'taxe123')
        or die('Erreur connexion à la base de données');
    $requete = "select * from categorie;";
    $resultat = $bdd->query($requete);
    $lesCategorie = $resultat->fetchAll();
    return $lesCategorie;
}
function getProjetParCategorie($nomCategorie)
{
    $ProjetParCategorie = null;
    $bdd = new PDO('mysql:host=localhost;dbname=id12619193_taxe', 'id12619193_taxe', 'taxe123')
        or die('Erreur connexion à la base de données');
   $requete = "select * from projet inner join categorie using (codeCategorie) where nomCategorie ='$nomCategorie'";
    $resultat = $bdd->query($requete);
    $ProjetParCategorie = $resultat->fetchAll();
    return $ProjetParCategorie;
}
