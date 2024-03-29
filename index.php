<?php require_once "inc/init.inc.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="En réduisant le nombre d’intermédiaires entre producteur et consommateur, le
  circuit-court peut assurer un revenu plus juste aux producteurs">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="javascript/script_index1.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Paniers Paris - Le concept</title>

</head>

<body id="index">

  <!--HEADER-->
  <?php require_once "inc/header.inc.php"; ?>
  <!-- FIN HEADER-->


  <!--MODAL COOKIES-->
  <div id="cookies">
    <p>Un cookie HTTP (cookie web, cookie de navigateur) est un petit ensemble de données qu'un serveur envoie au
      navigateur web de l'utilisateur.
      Le navigateur peut alors le stocker localement, puis le renvoyer à la prochaine requête vers le même serveur.
      Typiquement, cette méthode est utilisée par le serveur pour déterminer si deux requêtes proviennent du même
      navigateur — pour exemple pour garder un utilisateur connecté.
      Les cookies permettent de conserver de l'information en passant par le procotole HTTP qui est lui "sans état".</p>
    <button id="accepter"> ACCEPTER</button>
  </div>
  <!-- FIN MODAL COOKIES-->


  <!---------------------------------------------- OUVERTURE PHP --------------------------------------->



<!------------------------------------------------ FERMETURE PHP --------------------------------------->

  <!-----------------------------INDEX 2--------------------------->
  <main>

    <div class="container-fluid" id="container-image">

      <div class="row p-4" id="texte-intro">

        <div class="col-lg-12 ">
          <div class="presentation">
            <h3>Bienvenue !</h3>
            <p> <span class="accueil"> Réinstaurer de la confiance dans notre alimentation. Une plus grande transparence. Le circuit-court peut assurer un revenu plus juste aux producteurs. <br> <a href="paniersdumois.php"> <i class="fas fa-shopping-basket"> </i> <u>Découvrir nos paniers</u></a>  </span> </p>
            
          </div>
        </div>


        <div class="col-lg-12">
          <div class="presentation">
            <h3>Que faisons-nous ?</h3>
            <p><span class="accueil">Encourager nos producteurs locaux. Nos paniers sont de toutes premières fraîcheur, pour des valeurs nutritives et des saveurs
                préservées. <br> <a href="paniersdumois.php"> <i class="fas fa-shopping-basket"> </i> <u>Découvrir nos paniers</u></a>  </span></p>
          </div>
        </div>


        <div class="col-lg-12">
          <div class="presentation">
            <h3>Nos offres </h3>
            <p><span class="accueil">De la variété chaque semaine, au fil des saisons. Des box réalisées avec du sens... <br> <a href="paniersdumois.php"> <i class="fas fa-shopping-basket"> </i> <u>Découvrir nos paniers</u></a>  </span></p>
          </div>
        </div>
      </div>
    </div>

    <!-------------------------------SLIDE TEXTE FIN--------------------------------->

    
    <!-- MODAL NEWSLETTER-->

    <div id="modalNL">

      <p><i class="far fa-envelope"></i> &nbsp;Souscrire à notre newsletter ?</p>

      <form id="FormNL">
        <input id="emailNL" type="email" placeholder="Votre email">
      
        <button class="Btn" type="submit"> Confirmer</button>
        <a href="#" id="btnNo" class="Btn"> Plus tard</a>

        <!--affichage texte avec js-->
        <p> <small id="txtConfNewsletter"> </small></p>
      
      </form>
  
    </div>

    <!--------------------------NOS VALEURS DEBUT -------------------------->
    <div>
      <br />
      <br />
    </div>
    <section id="valeurs">

      <div class="container">

        <h4 id="banniere">NOS VALEURS</h4>

        <div>
          <br />
          <br />
        </div>

        <div class="row">

          <article class="col-lg-3"> <br>
            <span class="icones"><img src="img/logo_bleu.png" alt="logo paniers paris"></span>
            <h5>PROXIMIT&#201;</h5>
           
          </article>

          <article id="validation" class="col-lg-3"><br>
            <span class="icones"><img src="img/logo_rouge.png" alt="logo paniers paris"></span>
            <h5>QUALIT&#201;</h5>
          
          </article>

          <article class="col-lg-3"><br>
            <span class="icones"><img src="img/logo_noir.png" alt="logo paniers paris"></span>

            <h5>EQUILIBRE</h5>
            
          </article>

          <article class="col-lg-3"><br>
            <span class="icones"><img src="img/logo_violet.png" alt="logo paniers paris"></span>

            <h5>SIMPLICIT&#201;</h5>
           
          </article>

        </div>

      </div>

    </section>
    <div>
      <br />
      <br />
      <br />
    </div>
    <!---------------------COMMENT CA MARCHE ?----------------------------->
    <section class="validation">

      <div class="container">

        <h4 id="banniere">Comment ca marche ?</h4>

        <div>
          <br />
          <br />
        </div>

        <div class="row">

          <article class="col-lg-4"> <br>
            <span class="icones"><i class="fas fa-shopping-basket"></i></span>
            <h5>Choix du panier</h5>
            <p class="texteBas">Produits frais et de saisons choisis avec soin !</p>
          </article>

          <article id="validation" class="col-lg-4"><br>
            <span class="icones"><i class="fas fa-mouse"></i></span>
            <h5>Validation de la commande</h5>
            <p class="texteBas">Simple, rapide efficace en quelques click votre commande est validé !</p>
          </article>

          <article class="col-lg-4"><br>
            <span class="icones"><i class="fas fa-store"></i></span>

            <h5>Click & Collect</h5>
            <p class="texteBas">
              Retirer votre commande dans notre boutique parisienne !
            </p>
          </article>

        </div>

      </div>

    </section>
    <!---------------------COMMENT CA MARCHE ? FIN ----------------------------->


    <!----------------------------------NOS PRODUCTEURS----------------------->

    <div>
      <br />
      <br />
      <br>
      <br>
    </div>

    <section id="producteurs">

      <div class="container">
        <h4 id="banniere">NOS PRODUCTEURS</h4>
        <div>
          <br />
          <br />
        </div>
        <div class="row">

          <figure class="col-lg-6 text-center">
            <img src="img/claude.png" alt="photo producteur">

            <h4><b>Claude Thimo</b></h4>

            <figcaption>
              Situé au nord de Paris à Auvers-sur-Oise, nous sommes une entreprise familiale : depuis sa
              création par mes parents en 1994, j'ai toujours été présent, et lorsque j'ai eu terminé mes études de
              commerce, cela était une évidence pour moi de les rejoindre! Depuis 12 ans, je suis devenu associé de la
              production. Nous cultivons avec fierté toutes sortes de fruits et légumes selon les saisons. Un objectif
              m’anime au quotidien : créer un lien plus intime avec le consommateur et faire goûter la nature...
              <br>
              <b><i> « Fier d’être producteur !» </i> </b>
            </figcaption>

          </figure>

          <figure class="col-lg-6 text-center">
            <img src="img/bernard.png" alt="photo producteur">

            <h4><b>Bernard Grath</b>
            </h4>

            <figcaption>
              Producteur de fruits et légumes depuis plus de 30 ans à Magny-en-Vexin. D'abord arboriculteurs de père en
              fils, nous avons développé notre activité grâce au maraîchage. Résolument tourné vers l’avenir,c’est avec
              plaisir que je consacre du temps à cultiver mes produits dans le respect de la nature, sur un sol vivant,
              à la main et sans aucun produit. C’est l’intervention humaine et le savoir-faire allié à l’amour de la
              terre qui feront la différence .
              <br>
              <i><strong> « Il faut être passionné pour faire ce métier et cela représente beaucoup de choses pour moi.»
                </strong></i>
            </figcaption>

          </figure>

        </div>

      </div>

    </section>

  </main>


<?php require_once "inc/footer.inc.php"; ?>

</body>

<script src="javascript/script_header.js"> </script>
<script src="javascript/script_footer.js"></script>
<script src="javascript/script_modalnewsletter.js"></script>
<script src="javascript/script_index.js"></script>


</html>