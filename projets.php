<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/bbbd91dc73.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html,
  body {
    font-family: Arial, Helvetica, sans-serif;
    scroll-behavior: smooth;
    line-height: 1.5;
  }



  a {
    margin-top: 20px;
    text-decoration: none;
    border: none;
    display: inline-block;
    padding: 1rem;

    margin-right: 1rem;
    background: #ADDEE2;
    color: #333;
    transition: all 1s ease-in-out;
  }

  a:hover {
    opacity: 0.7;
    color: #fff;
  }

  .menu {
    background: steelblue;
  }

  .page {
    height: 100vh;
    /* display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center; */
    text-align: center;
    background: rgb(214, 234, 247);
    color: steelblue;
    border: 5px solid steelblue;
    -webkit-overflow-scrolling: auto;

  }

  .page h1 {
    font-size: 3rem;
    line-height: 1.2;
    margin: 1rem;
  }

  .page p {
    font-size: 1.3rem;
  }

  .content {

    max-width: 50%;
    /* min-height: 90%; */
    margin: auto;
    text-align: center;
    color: rebeccapurple;
  }

  .content ul li {
    list-style: none;
  }

  .boutons {
    text-align: center;
    /*margin-top: 0.5rem;*/
    min-height: 100%;
     height: 100%; 
     width: 100%; 
    /*  max-width: 50%;*/
    /*margin: auto;*/
    /*display: grid;*/
    /*grid-template-columns: repeat(2, 1fr);*/
  }

  .btn {
    display: inline-block;
    padding: 0.5rem 0.5rem;
    margin-top: 1rem;
    background: white;
    color: #333;
    text-decoration: none;
    border: none;
    font-size: 1.1rem;
    transition: all 0.5s ease-in;

  }

  .btn-blue {
    display: inline-block;
    padding: 1rem 2rem;
    margin-top: 1rem;
    background: steelblue;
    color: #fff;
    text-decoration: none;
    border: none;
    font-size: 1.1rem;
    transition: all 0.5s ease-in;
  }

  .btn-Projets {
    margin-top: 2rem;
  }

  .btn:hover,
  .btn-dark {
    background: #333;
    color: #fff;
  }

  .fleche {
    /* margin: auto; */
    margin-left: 1.5rem;
  }

  .categorie {
    text-align: center;
    margin: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .categorie p {

    font-size: 2rem;
  }


  /* .mntProjet {
    width: <?php echo $width ?>;
    height: 50px;
    border: 1px solid #000;
  } */



  .outs {
    width: 500px;
    height: 30px;
    border: 1px solid steelblue;
    margin: 0.5rem auto;
    border-radius: 10px;
  }

  .ins {
    background: steelblue;
    height: 50px;
    border: 1px solid #000;
    animation: widthBar 4s forwards ease-in-out;
    transition: width 1s ease-in-out;
  }

  @keyframes widthBar {
    from {
      width: 0;
    }

    to {
      width: 250;
    }
  }

  .montant-barre {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    width: 500px;
  }

  .montant-barre>div {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex: 1;
  }
  .page img {
    width: 200px;
    height: 200px
  }
    @media (max-width:700px) {
    .outs {
      width: 300px;
      height: 30px;
    }

    .montant-barre {
      width: 300px;
    }
       .page p {
      font-size: 1rem;
    }

    .page h1 {
      font-size: 1.75rem;
    }
     .page img {
      width: 125px;
      height: 125px;
    }
</style>

<body>
  <?php
  include "fonctions.php";

  $nb = 1;
  $nbS = 0;

  $nbProjet = 0;
  $nomCategorie = $_GET['val1'];
  echo "<section class='categorie page' id='acceuil'>";
  echo "<h1 >Les Projets sur $nomCategorie </h1>";
  $projetParCategorie = getProjetParCategorie($nomCategorie);
  foreach ($projetParCategorie as $lesprojets) {
    $nbS = $nbS + 1;
    $url = $lesprojets['urlPhoto'];
    $nom = $lesprojets['nomProjet'];
    $num = $lesprojets['numProjet'];
    $txtCourt = $lesprojets['txtCourt'];
    $txtLong = $lesprojets['txtLong'];
    $mnt = $lesprojets['mntProjet'];
    $reste = $lesprojets['resteAfinancer'];
    $nomcategorie = $lesprojets['nomCategorie'];
    $codeCategorie = $lesprojets['codeCategorie'];

    $_SESSION['nomProjet'] = $nom;
    $_SESSION['urlPhoto'] = $url;
    $_SESSION['txtCourt'] = $txtCourt;
    $_SESSION['txtLong'] = $txtLong;
    $_SESSION['montant'] = $mnt;
    $_SESSION['reste'] = $reste;
    $_SESSION['nomCategorie'] = $nomCategorie;
    $_SESSION['codeCategorie'] = $codeCategorie;

    // if ($lesprojets['nomProjet'] == null) {
    // echo "Il n'y a pas encore de projet";
    // } else {
    // $nb = $nb + 1;
    // echo "<p>$nom</p
    $nProjet = $nbProjet + 1;

    // $menuProjet = $nom;
    echo "<a href='#$nbS' class='btn-blue btn-Projets '>$nom</a>";
  }
  if ($nbS == 0) {
    echo "<a href='index.php' class='btn btn-Projets'>Projets sont terminés</a>";
  } elseif ($nb == 1) {
    echo "<a href='#$nb' class='btn btn-Projets'>Voir tous nos Projets</a>";
  }
  echo "</section>";
  ?>


  <?php
  // include "fonctions.php";
  // session_start();
  // $a = $_SESSION['nomProjet'];
  // $b = $_SESSION['urlPhoto'];
  // $c = $_SESSION['txtCourt'];
  // $d = $_SESSION['txtLong'];
  // $e = $_SESSION['montant'];
  // $f = $_SESSION['reste'];
  // $g = $_SESSION['categorie'];
  $nb = 0;
  $nomCategorie = $_GET['val1'];
  $projetParCategorie = getProjetParCategorie($nomCategorie);
  foreach ($projetParCategorie as $lesprojets) {

    $url = $lesprojets['urlPhoto'];
    $nom = $lesprojets['nomProjet'];
    $txtCourt = $lesprojets['txtCourt'];
    $txtLong = $lesprojets['txtLong'];
    $mnt = $lesprojets['mntProjet'];
    $reste = $lesprojets['resteAfinancer'];
    $nomcategorie = $lesprojets['nomCategorie'];
    $codeCategorie = $lesprojets['codeCategorie'];

    // $_SESSION['nomProjet'] = $nom;
    // $_SESSION['urlPhoto'] = $url;
    // $_SESSION['txtCourt'] = $txtCourt;
    // $_SESSION['txtLong'] = $txtLong;
    // $_SESSION['montant'] = $mnt;
    // $_SESSION['reste'] = $reste;
    // $_SESSION['nomCategorie'] = $nomCategorie;
    // $_SESSION['codeCategorie'] = $codeCategorie;

    // if ($lesprojets['nomProjet'] == null) {
    // echo "Il n'y a pas encore de projet";
    // } else {
    // $nb = $nb + 1;

    // $mntMax = 100000;
    // $width = round(($mnt / $mntMax) * 100, 1);
    // $mntMax = $mnt;
    // $progres1 = $mnt - $reste;
    // $progres = $mnt - $progres1;
    // $width = round(($progres / $mntMax) * 100, 1);
    $max = 0;
    $nb = $nb + 1;
    $nbP = $nb - 1;
    $nbS = $nb + 1;
    // if ($nb > $max) {
    //   $max = $nb;
    // }

    // if ($nb == 1) {
    //   $mntMax = $mnt;
    //   $progres1 = $mnt - $reste;
    //   $progres = $mnt - $progres1;
    //   $width = round(($progres / $mntMax) * 100, 1);
    // $mntMax = 100000;
    // $width = round(($mnt / $mntMax) * 100, 1);
    // foreach ($projetParCategorie as $lesprojets) {
    // echo "<div class='page' id='$nb'>";
    // echo "<h1 id='$num'>$nom</h1>";
    // echo "<img src='./img/$url' style=width:250px>";
    // echo "<p>$txtCourt</p>";
    // echo "<p>Description du projet : </p>";
    // echo "<p>$txtLong</p>";
    // echo "<div class='out'>";
    // echo "<div class='in' >";
    // echo "</div>";
    // echo "</div>";
    // echo "<p>Montant du projet : $mnt euros</p>";
    // echo "<div class='boutons'>";
    // echo "<a href='index.php' class='btn'>Revenez en arrière</a>";
    // echo "<a href='final.php?val1=$nom' class='btn'>Nous Soutenir</a>";
    // echo "<br>";
    // echo "<a href='#$nbS' class='btn fleche'><i class='fas fa-arrow-down'></i></a>";
    // echo "<a href='#$nbS' class='btn'>Projet suivant</a>";
    // echo "</div>";
    // echo "</div>";
    // }
    // echo "<style>";
    // echo ".in {";
    // echo "width: $width%;";
    // echo "}";
    // echo "</style>";

    // $mntMax = $mnt;
    // $progres1 = $mnt - $reste;
    // $progres = $mnt - $progres1;
    // $width = round(($progres / $mntMax) * 100, 1);
    if ($nb >= 1) {
      $width = round((($mnt - ($mnt - $reste)) / $mnt) * 100, 1);
      $progres1 = $mnt - $reste;
      $collectionner = $mnt - $progres1;
      echo "<style>";
      echo ".ins-$nb {";
      echo "width: $width%;";
      echo "background: steelblue;";
      echo "height: 30px;";
      // echo "border: 1px solid #000;";
      echo "border-radius: 10px;";
      echo "animation: widthBar 4s forwards ease-in-out;";
      echo "transition: width 2s ease-in-out 3s;";
      echo "@keyframes widthBar {";
      echo "from {";
      echo "width: 0;";
      echo " }";
      echo "to {";
      echo "width: $width%;";
      echo "}";
      echo "}";
      echo "</style>";
      // $mntMax = 100000;
      // $width = round(($mnt / $mntMax) * 100, 1);
      echo "<div class='page' id='$num' >";
      echo "<h1 id ='$nb' style=text-align:center>$nom</h1>";
      echo "<img src='./img/$url'>";
      echo "<p>$txtCourt</p>";
      echo "<p>Description du projet : </p>";
      echo "<p>$txtLong</p>";

      echo "<p>Montant du projet : $mnt euros</p>";

      echo "<div class='outs'>";
      echo "<div class='ins-$nb'>";
      echo "</div>";
      echo "</div>";
      echo "<div class='montant-barre'>";
      echo "<div>";
      echo "<p>$collectionner €</p>";
      echo "<p>$mnt €</p>";
      echo "</div>";
      echo "</div>";
      echo "<div class='boutons'>";
      echo "<a href='index.php' class='btn'>Revenez en arrière</a>";
      echo "<a href='final.php?val1=$nom' class='btn'>Nous Soutenir</a>";
      echo "<br>";
      if ($nb >= 2) {
        echo "<a href='#$nbP' class='btn'>Projet Precedent <i class='fas fa-arrow-up'></i></a>";
      } else {
        echo "<a href='#acceuil' class='btn'>Menu <i class='fas fa-arrow-up'></i></a>";
      }
      // if ($nb > $max) {
      //   $max = $nb;
      // }
      // if ($max >= $nb) {
      //   echo "";
      // } else {

      echo "<a href='#$nbS' class='btn'>Projet suivant <i class='fas fa-arrow-down'></i></a>";
      // }
      echo "</div>";
      echo "</div>";
      // echo "$nb";

      $max = 0;
      foreach ($lesprojets as $nbProjet) {
        if ($nb > $max) {
          $max = $nb;
        }
      }
    } else {
      echo "<div class='page'>";
      echo "<h1 style=text-align:center>$nom</h1>";
      echo "<img src='./img/$url' style=width:200px;height:200px>";
      echo "<p>$txtCourt</p>";
      echo "<p>Description du projet : </p>";
      echo "<p>$txtLong</p>";
      echo "<p>Montant du projet : $mnt euros</p>";
      echo "<a href='index.php' class='btn'>Revenez en arrière</a>";
      echo "<a href='final.php?val1=$nom' class='btn'>Nous Soutenir</a>";
      echo "<br>";
      echo "</div>";
    }



    // }
  }


  ?>
  <div class="content">
    <h3>Les finalités :</h3>
    <ul>
      <li>- Fournir une offre de formation en adéquation avec les besoins de nos partenaires</li>
      <li>- Elargir l’employabilité et l’attractivité de nos formations</li>
    </ul>
    <h3>
      Chef de projet : Mme Gourdon, chef d’établissement : lgourdon@lerebours.org
    </h3>
    <h3>
      Service entreprises : M. Olivier SOLERY : entreprise@lerebours.org (0155433088)
    </h3>
  </div>
</body>

</html>