<?php
// session_start()
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Apprentissage le rebours" description="le rebours , Apprentissage , ">
  <meta name="keywords" description="le rebours , Apprentissage  ">
  <script src="https://kit.fontawesome.com/bbbd91dc73.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="./css/style.css"> -->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    window.alert = function() {};
    var defaultCSS = document.getElementById('bootstrap-css');

    function changeCSS(css) {
      if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
      else $('head > link').filter(':first').replaceWith(defaultCSS);
    }
    $(document).ready(function() {
      var iframe_height = parseInt($('html').height());
      window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
    });
  </script>
  <style>
    .heading-content {
      font-size: 80px;
    }

    /* Carousel : Bootstap */
    @media (min-width: 768px) {

      /* show 3 items */
      .carousel-inner .active,
      .carousel-inner .active+.carousel-item,
      .carousel-inner .active+.carousel-item+.carousel-item,
      .carousel-inner .active+.carousel-item+.carousel-item+.carousel-item {
        display: block;
      }

      .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
      .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
      .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item,
      .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item+.carousel-item {
        transition: none;
      }

      .carousel-inner .carousel-item-next,
      .carousel-inner .carousel-item-prev {
        position: relative;
        transform: translate3d(0, 0, 0);
      }

      .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
        position: absolute;
        top: 0;
        right: -25%;
        z-index: -1;
        display: block;
        visibility: visible;
      }

      /* left or forward direction */
      .active.carousel-item-left+.carousel-item-next.carousel-item-left,
      .carousel-item-next.carousel-item-left+.carousel-item,
      .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
      .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item,
      .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
      }

      /* farthest right hidden item must be abso position for animations */
      .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
      }

      /* right or prev direction */
      .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
      .carousel-item-prev.carousel-item-right+.carousel-item,
      .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
      .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item,
      .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
      }
    }

    /* Bootstrap Lightbox using Modal */

    #profile-grid 
    {
      overflow: auto;
      white-space: normal;
    }

    #profile-grid .profile
    {
      padding-bottom: 40px;
    }

    #profile-grid .panel 
    {
      padding: 0;
    }

    #profile-grid .panel-body
    {
      padding: 15px;
    }

    #profile-grid .profile-name 
    {
      font-weight: bold;
    }

    #profile-grid .thumbnail
    {
      margin-bottom: 6px;
    }

    #profile-grid .panel-thumbnail
    {
      overflow: hidden;
    }

    #profile-grid .img-rounded
    {
      border-radius: 4px 4px 0 0;
    }

    .project-container
    {
      display: flex;
      /* flex-direction: column; */
      justify-content: center;
      flex-wrap: wrap;
      /* align-items: center; */
      height: 100%;
      min-width: 100%;
    }

    .project-container .img-content 
    {
      display: flex;
      flex-direction: column;

      /* flex: 1; */
      width: 400px;
      height: 400px;
      margin: 20px;
      box-sizing: border-box;
      /* display: inline-block; */
      position: relative;
      /* background: red; */
    }

    /* .img-content img{
  width: 400px;
  height: 400px;
  
} */
    .project-container .img-content .images
    {
      position: relative;
      overflow: hidden;
    }

    .project-container .img-content .images img 
    {
      max-width: 100%;
      transition: all 1s ease-in-out;
    }

    .project-container .img-content .images:hover img 
    {
      transform: scale(1.3);
    }

    .project-container .img-content .text 
    {
      position: absolute;
      top: 10px;
      bottom: 10px;
      left: 10px;
      right: 10px;
      background: rgba(14, 116, 233, 0.6);
      transform: scale(0);
      transition: transform 1s;
    }

    .project-container .img-content:hover .text 
    {
      transform: scale(1);
    }

    .project-container .img-content .text .text-content 
    {
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;

      height: 100%;
      align-items: center;
      color: #fff;
    }

    .images img 
    {
      width: 300px;
      height: 250px;
    }

    /* Menu Déeroulant */
    #navbar .menu-deroulant 
    {
      position: relative;
    }

    /* #navbar .menu-deroulant .sub-menu{
  display: none;
} */
    #navbar .sub-menu a 
    {
      display: block;
      padding: 22px;
    }

    #navbar .sub-menu 
    {
      display: none;
      position: absolute;
      background: #afd4db;
      width: 300px;
	   margin-top: 18px;
      /* height: 150px; */
    }

    #navbar .menu-deroulant:hover .sub-menu
    {
      display: block;
    }

    #navbar .sub-menu a:hover 
    {
      background: #fff;
    }

    .text-content a 
    {
      margin-top: 20px;
      text-decoration: none;
      display: inline-block;
      padding: 0.5rem;
      background: white
    }

    .text-content a:hover 
    {
      background: #f4f4f4;
      color: #333;
    }

    /* Bouton Next */
    .btn-next,
    .btn-prev {
      color: blue;

    }
	
 
    @media (max-width: 1070px) {
      #navbar {
        /* display: none; */
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        /* display: block; */
        margin-bottom: 1rem;
      }

      #navbar img {
        float: left;
        margin-bottom: 1rem;
        width: 250px;
        height: 150px;
      }

      #navbar h1 {
        font-size: 30px;
      }
    }
	 @media (max-width: 700px) 
	 {
     #navbar {
        position: relative;
      
      }

      #navbar ul.sub-menu {
        position: absolute;
        background: steelblue;
        width: 150px;
        
        left: 0;
      }

      #navbar ul.categories {
        display: block;
        /* margin: 1rem; */
      }

      #navbar ul.categories li {
        margin-bottom: 1rem;
        padding: 0.2rem;
      }


    
      #navbar ul {
        display: flex;
        /* margin: 0.25rem 0; */
      }

      #navbar ul li a.current-page {
        text-align: center;
        text-decoration: none;
        margin: 0 0.25rem;
        padding: 0.5rem;
        align-items: center;
        color: rgb(54, 51, 51);
        /* display: inline-block; */
      }


      #navbar ul.categories {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
        height: 100%;
        width: 100%;
        position: relative;
      }

      #navbar .categories li .sub-menu {
        /* margin-bottom: 0rem; */
        position: absolute;
        z-index:1;
        /* margin-bottom: 0; */
        left: 0;
      }

      #navbar ul li a:hover,
      .current-page {
        background: #afd4db;
        color: #444;
        border-radius: 5px;
      }
       #section h1 {
        font-size: 30px;
      }

      #section .main-title {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande',
          'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin-bottom: 1rem;
        font-size: 35px;
      }

      .categories a {
        /* padding: 0.25rem; */
        margin: 0px;
      }

	 #about .img-content {
        display: none;
      }
     
    

    }
    .footer {
      border: 10px solid #6CAFB6;
    }
    .item li
    {
        color:white;
    }
    
    
    
  </style>
  <link rel="stylesheet" href="./css/style.css">
  <title>Projet Slam1</title>
</head>

<body id="home">
  <nav id="navbar">
    <a href="index.php"><img src="./img/image.png" alt="lerebours"></a>
    
    
    <ul class="categories">
      <li><a href="#home" class="current-page ">Accueil</a></li>
      <li class="menu-deroulant"><a href="#" class="">Catégories <i class="fas fa-chevron-down"></i></a>
        <ul class="sub-menu">
          <?php
          include "fonctions.php";

          $lesCategories = getCategories();

          foreach ($lesCategories as $categorie) {
            $nomCategorie = $categorie['nomCategorie'];

             echo "<li><a href='projets.php?val1=$nomCategorie'>$nomCategorie</a></li>";
            // <li><a href="#">Ouverture à l’international</a></li>
            // <li><a href="#">Certifications professionnelles</a></li>
            // <li><a href="#">Inclusion</a></li>
            // <li><a href="#">Développement durable</a></li>
          }
          ?>
        </ul>
      </li>
      <li><a href="#about">Qui sommes nous</a></li>
      <li><a href="contact.php">Contact </a></li>
      <li><a href="#Calculez">Calculez votre Contribution</a></li>
    </ul>
  </nav>
  
  
  <section id=section>

    <div class="container">
        <h1 class="text-center  primary-color main-title">Taxe Apprentissage</h1>
      <!-- <div class="img-content">
        <img src="/img/esthetique.jpg" alt="">
        <img src="/img/esthetique.jpg" alt="">
    
      </div> -->
      <h1 class="text-center py-1 primary-color">
        <sapn class="primary-color ">Nos Projets</sapn>
      </h1>

      <div class="container-fluid">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">


            <?php
            // include "fonctions.php";
            // session_start();
            // require "projet.php";
            $nb = 0;
            $projets = getLesProjets();

            foreach ($projets as $projet) {
              $nb = $nb + 1;
              if ($nb == 1) {
                echo '<div class="carousel-item col-md-3 active">';
              } else {
                echo '<div class="carousel-item col-md-3 ">';
              }
              echo '<div class="panel panel-default">';
              echo '<div class="panel-thumbnail">';
              echo '<div class="project-container">';
              echo '<div class="img-content">';
              echo '<div class="images">';
              $url = $projet['urlPhoto'];
              $nom = $projet['nomProjet'];
			  $num = $projet['numProjet'];
              $txtCourt = $projet['txtCourt'];
              $txtLong = $projet['txtLong'];
              $mnt = $projet['mntProjet'];
              $reste = $projet['resteAfinancer'];
              $categorie = $projet['codeCategorie'];
              echo "<img class='img-fluid mx-auto d-block' alt='slide 1'  src='./img/$url'>";
              echo '</div>';
              echo '<div class="text">';
              echo '<div class="text-content">';
              echo '<h2>' . $nom . '</h2>';
              echo '<p>' . $txtCourt . '</p>';
              // echo '<form action="recupere.php" method="GET">';
              // echo "<input type='submit' 'value='envoyer' class='btn'>";
              // echo '</form>';
              echo "<a  href='projet.php?val1=$url&val2=$nom&val3=$txtCourt&val4=$txtLong&val5=$mnt&val6=$reste&val7=$categorie&val8=$num'>cliquez ici</a>";
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              // $_SESSION['nomProjet'] = $nom;
              // $_SESSION['urlPhoto'] = $url;
              // $_SESSION['txtCourt'] = $txtCourt;
              // $_SESSION['txtLong'] = $txtLong;
              // $_SESSION['montant'] = $mnt;
              // $_SESSION['reste'] = $reste;
              // $_SESSION['categorie'] = $categorie;
            }

            ?>

          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span> -->
            <i class="fas fa-chevron-left fa-4x btn-prev"></i>
          </a>
          <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <i class="fas fa-chevron-right fa-4x btn-next"></i>
            <!-- <span class="sr-only">Next</span> -->
          </a>
        </div>






      </div>

      <script type="text/javascript">
        $('#carouselExample').on('slide.bs.carousel', function(e) {


          var $e = $(e.relatedTarget);
          var idx = $e.index();
          var itemsPerSlide = 4;
          var totalItems = $('.carousel-item').length;

          if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
              // append slides to end
              if (e.direction == "left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
              } else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
              }
            }
          }
        });


        $('#carouselExample').carousel({
          interval: 3000
        });


        $(document).ready(function() {
          /* show lightbox when clicking a thumbnail */
          $('a.thumb').click(function(event) {
            event.preventDefault();
            var content = $('.modal-body');
            content.empty();
            var title = $(this).attr("title");
            $('.modal-title').html(title);
            content.html($(this).html());
            $(".modal-profile").modal({
              show: true
            });
          });

        });
      </script>

    </div>
  </section>
  <section id="about">
    <div class="img-content"></div>
    <div class="section-content">

      <h1 class="text-white">Qui sommes nous?</h1>
      <div class="item">

        <ul>
          <li>
            Le lycée Le Rebours qui ouvre chaque année ses portes à environ 1200 étudiants, élèves et alternants
            offre des formations dans les domaines de la Comptabilité, de l’Informatique, du Management, de
            l’Accueil, du Commerce et de l’Esthétique. 
          </li>
          <li>
            Labellisé depuis 2008 «Lycée des métiers du Management et des Services», le lycée Le Rebours a plusque jamais l’ambition d’offrir des formations d’excellence correspondant aux attentes des élèves et aux besoins des entreprises.
          </li>
          <li>
            Ainsi, votre soutien nous est nécessaire pour pouvoir proposer un enseignement exigeant, complet,
            réaliste et former vos collaborateurs de demain.
          </li>
        </ul>
      </div>
    </div>
  </section>
  

  </form>
  <section id="Calculez">
    
    <div class="section-content-calculer">

      <h1 class="text-white">Calculez votre contribution</h1>
      <div class="contenu">
          <b class="text-white">Calcul de la CUFPA</b>

        <ul>
             <li>- 87% doivent être versé à votre OPCO en plusieurs échéances(si votre effectif est supérieur à 11 salariés)</li>
             <li>- 13% doivent être directement versé à l'établissement de votre choix et , ce , quel que soit l'effectif de votre entreprise.</li>
         </ul> 
             <b class="text-white">La réforme "Loi Avenir" de 2020 a modifié en profondeur les modalités de versement de la taxe d'apprentissage :</b> </br>
             
        <ul>
                 
            <li>- La versement du 13% doit être fait directement au lycée Le Rebours, vous ne passez plus par un OCTA</li>
            <li>- La part que vous pouvez librement choisir de verser au lycée Le Rebours est passée de 23% à 13%</li> 
        </ul>
      </div>
    </div>
  </section>
  
  
  
     <footer>
    <div class="footer">

    </div>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="./js/main.js"></script>
</body>

</html>