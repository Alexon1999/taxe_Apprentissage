<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  
  
  <title>Document</title>
</head>
<style>
  * {
    /* 
      -May want to add "border-box for "box-sizing so padding does not affect width
      -Reset margin and padding 
     */
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    /* 
        -Background color is #344a72
      */
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background: #AFD4DB;
    line-height: 1.8em;
  }

  a {
    /* 
      Underlined links are ugly :)
     */
    text-decoration: none;
  }

  #container {
    /* 
      -Remember, margin: auto on left and right will center a block element 
      -I would also set a "max-width" for responsiveness
      -May want to add some padding
      */
    margin: 5px auto;
    max-width: 500px;
    padding: 5px;
    border: 2px solid #fff;
    border-radius: 15px;

    /* width: 500px; */
  }

  .form-wrap {
    /* 
        This is the white area around the form and heading, etc
      */
    background: white;
    padding: 15px 20px;
    border-radius: 10px;

  }

  .form-wrap h1,
  .form-wrap p
  {
    /* 
        May want to center these
      */
    color:#2EAFFB;
    text-align: center;
  }

  .form-wrap .form-group {
    /* 
        Each label, input is wrapped in .form-group
        
      */
    margin-top: 10px;

  }

  .form-wrap .form-group label {
    /* 
        Label should be turned into a block element
      */
    display: block;
    color: #666;
  }

  .form-wrap .form-group input,
  .form-wrap .form-group textarea {
    /* 
        Inputs should reach accross the .form-wrap 100% and have some padding
      */
    display: block;
    width: 100%;
    padding: 7px;
    border: #ddd 1px solid;
    border-radius: 5px;
  }

  .messagebox {
    height: 60px;
  }

  .form-wrap .form-group input:focus {
    outline: none;
    border-color: #0059ff;
  }

  .form-wrap button {
    /* 
        Button should wrap accross 100% and display as block
        Background color for button is #49c1a2
      */
    margin-top: 15px;
    padding: 8px;
    /* display: block; */
    width: 100%;
    background: #1E90FF;
    color: white;
    cursor: pointer;
    
  }
   /*background:#49c1a2;/*

  .form-wrap button:hover {
    /* 
        Hover background color for button is #37a08e
      */
    background: #37a08e;
  }

  .form-wrap .bottom-text {
    /* 
        Bottom text is smaller
      */
    font-size: smaller;
    margin-top: 20px;
  }

  footer {
    /* 
      Should be centered
     */
    text-align: center;
    margin-top: 5px;
  }

  footer a {
    /* 
        Footer link color is #49c1a2

      */
    color: #49c1a2;
  }
  
  input:invalid
  {
      box-shadow:0 0 5px 1px red;
  }
  textarea:invalid
  {
      box-shadow:0 0 5px 1px red;
  }
  #obligatoire
  {
      color:red;
  }
  #obg
  {
      color:red;
  }

</style>

<body>
  <?php
  //session_start();
  //$nomProjet = $_SESSION['nomProjet'];
  //$url = $_SESSION['urlPhoto'];
  //$txtCourt = $_SESSION['txtCourt'];
  //$txtLong = $_SESSION['txtLong'];
  //$mnt = $_SESSION['montant'];
  //$reste = $_SESSION['reste'];
  //$categorie = $_SESSION['categorie'];
    $nom = $_GET['val1'];
  ?>
 
 
  
  
  
  <section id="contact">
    <div id="container" class="container">
      <div class="form-wrap">
        <h1>Contactez nous</h1>
        <form action="" method="POST">
          <div class="form-group">
            <label>Nom <span id="obligatoire">*</span></label>
            <input type="text" required name="nom" id="first-name" placeholder="votre nom" value = "<?php if(isset($_POST['nom'])) {echo $_POST['nom'];} ?>"/>
          </div>
          <div class="form-group">
            <label>Prénom <span id="obligatoire">*</span> </label>
            <input type="text" required name="prenom" id="last-name" placeholder="votre prénom" value = "<?php if(isset($_POST['prenom'])) {echo $_POST['prenom'];} ?>"/>
          </div>
          
          <div class="form-group">
            <label>Raison sociale<span id="obligatoire">*</span></label>
            <input type="text" required name="raisonsocial" id="raison" value = "<?php if(isset($_POST['raisonsocial'])) {echo $_POST['raisonsocial'];} ?>" />
          </div>
          <div class="form-group">
            <label>numero SIRET <span id="obligatoire">*</span></label>
            <input type="text" required name="numsiret" id="siret" value = "<?php if(isset($_POST['numsiret'])) {echo $_POST['numsiret'];} ?>" />
          </div>
          <div class="form-group">
            <label>Email <span id="obligatoire">*</span></label>
            <input type="email" required name="email" id="email" placeholder="@email.com" value = "<?php if(isset($_POST['email'])) {echo $_POST['email'];} ?> "/>
          </div>
          <div class="form-group">
            <label>Téléphone</label>
            <input type="text"  name="tel" id="telephone" placeholder="facultatif" />
          </div>
          <div class="form-group">
            <label>Projet</label>
            <select name="sujet" id="">
              <?php
              include "fonctions.php";
              $lesProjets = getLesProjets();
              foreach ($lesProjets as $projet) {
                     $nomProjet = $projet['nomProjet'];

                if ($nom == $projet['nomProjet']) {
                  echo "<option value='' selected>$nom</option>";
                } else {
                  echo "<option value=''>$nomProjet</option>";
                }
                
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label name="motivation">Motivation</label>
            <!-- <input type="text" name="tel" id="telephone" placeholder="facultatif" /> -->
            <textarea  name="message"  id="message" placeholder="facultatif"  class="messagebox"></textarea>
          </div>
          <label><span id="obg">*</span><Font size="2">Obligatoire</Font></label>

          <button name="submitbutton" id="btn" type="submit" class="btn">Envoyer</button>
          
           
           <script>
		$("#btn").click(function()
		{
			swal({
  title: "Bravo!",
  text: "Votre mail a bien été envoyer",
  icon: "success",
  button: "Accueil",
});
		})
	</script>
           
          
          
          <?php 
           if(isset($_POST['submitbutton']))
              {
                 if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['raisonsocial']) and !empty($_POST['numsiret']) and !empty($_POST['tel']) and !empty($_POST['message']))
                   {   
                      $to = "emileliu97320@gmail.com"; // expediteur
                      $from = $_POST['email']; // destinataire
                      $nom1 = $_POST['nom'];
                      $prenom = $_POST['prenom'];
                      $raisonSocial = $_POST['raisonsocial'];
                      $numSiret = $_POST['numsiret'];
                      $numTel = $_POST['tel'];
                      $subject = "taxe-apprentissage";
                      $nomProjets = $nom;
                      //if($nomProjets != $nomProjet)
                      //{
                        // $nomProjets = $nomProjet; 
                      //}
                      $lesProjets = getLesProjets();
                      foreach ($lesProjets as $projet) {
                        $projet = $nomProjet;
                        if($nomProjets != $projet){
                            $nomProjets = $projet;
                        }
                      }
                      $message = "Nom : ".$_POST['nom']. "\n\n"."Prénom : ". $_POST['prenom'] . "\n\n" . "Raison Sociale : " . $_POST['raisonsocial'] . "\n\n" ."Numéro siret : ". $_POST['numsiret'] . "\n\n" . "Numero de téléphone : " . $_POST['tel'] ."\n\n".
                      "Nom projet :" .$nom."\n\n" .$nom1. "" .$prenom. " a ecrit le message suivant : " . "\n\n" . $_POST['message'];
                      $headers = "From:" . $from;
                      mail($to,$subject,$message,$headers);
                      
                   }
                   
                   elseif(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['raisonsocial']) and !empty($_POST['numsiret']))
                   {   
                      $to = "emileliu97320@gmail.com"; // expediteur
                      $from = $_POST['email']; // destinataire
                      $nom1 = $_POST['nom'];
                      $prenom = $_POST['prenom'];
                      $raisonSocial = $_POST['raisonsocial'];
                      $numSiret = $_POST['numsiret'];
                      
                      $subject = "taxe-apprentissage";
                      $nomProjets = $nom;
                      //if($nomProjets != $nomProjet)
                      //{
                        // $nomProjets = $nomProjet; 
                      //}
                      $lesProjets = getLesProjets();
                      foreach ($lesProjets as $projet) {
                        $projet = $nomProjet;
                        if($nomProjets != $projet){
                            $nomProjets = $projet;
                        }
                      }
                      $message = " Nom : ".$_POST['nom']. "\n\n". " Prénom : ".$_POST['prenom'] . "\n\n" . " Raison Sociale : " . $_POST['raisonsocial'] . "\n\n" ." Numéro siret : ". $_POST['numsiret'] . "\n\n" . 
                      " Nom projet : " .$nom."\n\n" .$nom1. "" .$prenom. " a ecrit le message suivant : " . "\n\n" . $_POST['message'];
                      $headers = "From:" . $from;
                      mail($to,$subject,$message,$headers);
                      
                   }
                   
                   
                 
                      
                      
                   
                   
                    
                }
          ?>
         
          
        
</section>
        </form>
</body>

</html>