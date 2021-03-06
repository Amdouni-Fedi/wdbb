<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue="Bonjour et bienvenue ".
      $_SESSION["prenomNom"].
      " dans votre espace personnel";
   else
      $bienvenue="Bonsoir et bienvenue ".
      $_SESSION["prenomNom"].
      " dans votre espace personnel";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="Walid SAAD" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>SCO-ENICAR</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap core JS-JQUERY -->
    <script src="./assets/dist/js/jquery.min.js"></script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet" />
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">SCO-Enicar</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="index.php"
              id="dropdown01"
              data-toggle="dropdown"
              aria-expanded="false"
              >Gestion des Groupes
              </a
            >
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="listeretudiants.php"
                >Lister tous les ??tudiants</a
              >
              <a class="dropdown-item" href="choisirgroupe2.php"
                >Etudiants par Groupe</a
              >
              <a class="dropdown-item" href="ajoutergroupe2.php"
                >Ajouter Groupe</a
              >
              <a class="dropdown-item" href="choisirgroupe3.php">Modifier Groupe</a>
              <a class="dropdown-item" href="supprimergroupe.php">Supprimer Groupe</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="dropdown01"
              data-toggle="dropdown"
              aria-expanded="false"
              >Gestion des Etudiants</a
            >
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="ajouetud.php">
                Ajouter Etudiant</a
              >
              <a class="dropdown-item" href="choisirgroupe4.php">Chercher Etudiant</a>
              <a class="dropdown-item" href="modifieretudiant.php">Modifier Etudiant</a>
              <a class="dropdown-item" href="supprimeretudiant.php">Supprimer Etudiant</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="dropdown01"
              data-toggle="dropdown"
              aria-expanded="false"
              >Gestion des Absences</a
            >
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="saisirAbsence.php"
                >Saisir Absence</a
              >
              <a class="dropdown-item" href="etatAbsence.php"
                >??tat des absences pour un groupe</a
              >
            </div>
          </li>

          <li class="nav-item active">
            <a href="deconnexion.php" class="nav-link" href="#"
              >Se D??connecter <span class="sr-only">(current)</span></a
            >
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="text"
            placeholder="Saisir un groupe"
            aria-label="Chercher un groupe"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Chercher Groupe
          </button>
        </form>
      </div>
    </nav>

    <main role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3"><?php echo $bienvenue?></h1>
          <h2 style="color:blue ">Departement G??nie Informatique</h2>
          <p>
            Le Cycle ing??nieur de l?????cole national d'ingenieur de carthage est un programme unique impliquant 3 ans d'??tude 
            sur le campus qui m??nent au dipl??me d'ing??nieur (niveau Master), puis une 4??me ann??e qui peut ??tre faite dans une autre universit?? dans le monde pour obtenir le dipl??me final de l'ENICAR, coupl?? au dipl??me obtenu dans l'universit?? choisie.
            L???objectif du d??partement est de donner aux futurs dipl??m??s les connaissances fondamentales en informatique afin de rester au plus pr??s des ??volutions actuelles et ?? venir.Les ??l??ves du cursus ing??nieur suivent des cours d???informatique d??s la 1??re ann??e. Ils peuvent choisir entre deux niveaux : une classe d???initiation et une autre classe pour les plus avanc??s. Pendant la 2e ann??e, les ??tudiants peuvent aussi b??n??ficier d???une remise ?? niveau gr??ce ?? un cours additionnel.
            Cette formation inclut la compr??hension des fondements de l'algorithmique, la programmation et la calculabilit??, une connaissance de base du fonctionnement et de l'architecture des r??seaux et syst??mes informatiques.
            En 2e ann??e du cycle ing??nieur, les ??l??ves ont la possibilit?? de suivre des modals, c???est-??-dire des cours pratiques avec la r??alisation d???un projet ?? la cl??. Cet enseignement d???une dur??e de deux mois permet d'aborder les technologies de demain par la pratique. Plusieurs modals sont dispens??s tels que par exemple :
            Le modal web consiste ?? r??aliser, seul ou en bin??me, un site web dans son int??gralit??.
            Le modal tablette propose une approche de la programmation d'applications mobiles sur smartphones et tablettes.
            En troisi??me ann??e, l'accent est mis d'une part sur l'approfondissement des comp??tences scientifiques sur des th??mes choisis par l'??tudiant, d'autre part sur l'acquisition de connaissances sp??cifiques ?? un m??tier donn??. Un voyage d'??tudes optionnel d'une semaine permet une approche concr??te de ce m??tier.
            Au-del?? de sa formation d'ing??nieur g??n??raliste, l'??tudiant acquerra ainsi un profil d'ing??nieur orient?? vers un secteur ??conomique ou un savoir-faire particulier, dans lequel il commencera en g??n??ral sa carri??re.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#" role="button"
              >Mes Groupes &raquo;</a
            >
          </p>
        </div>
      
<div class="jumbotron">
        <div class="container">
            <h2 style="color:blue ">Departement G??nie Infotronique</h2>
            <p>
            La sp??cialit?? InfoTronique a pour objectif de former et certifier des ing??nieurs g??n??ralistes en ??lectronique, informatique et dans les technologies de l'information aptes ?? g??rer des projets complexes  en traitement du signal, transmission de l'information, r??seaux de communication et architecture logicielle pour des m??tiers en forte ??mergence dans les syst??mes embarqu??s et la s??curit?? des r??seaux..

            L'ing??nieur InfoTronique, sp??cialis?? en S??curit?? et Qualit?? des R??seaux, sera apte ?? g??rer les architectures de r??seaux informatiques, capables de proposer des solutions techniques pour mettre en oeuvre des r??seaux, administrer des r??seaux existants et les optimiser pour assurer une qualit?? de services optim
            </p>
            <p>
              <a class="btn btn-secondary" href="#" role="button"
                >Voir les Groupes &raquo;</a
              >
            </p>
          </div>
        </div>
          <div class="jumbotron">
        <div class="container">
            <h2 style="color:blue ">Departement Mecatronique</h2>
            <p>
              La M??catronique est alors une technique industrielle consistant ?? utiliser simultan??ment et en symbiose la m??canique, l?????lectronique, l???automatique et l???informatique pour la conception et la fabrication de nouveaux produits et de nouveaux services.
              La formation vise ?? ??tablir un socle de connaissances fondamentales solides dans les diff??rentes facettes de ce domaine pluridisciplinaire et ?? tisser des liens entre ces diff??rents aspects. L???approche globale des syst??mes est effectu??e, en particulier, lors des projets longs o?? les ??tudiants traitent une question, de la reformulation d???un cahier des charges ?? la r??alisation d???un prototype
            </p>
            <p>
              <a class="btn btn-secondary" href="#" role="button"
                >Voir les Groupes &raquo;</a
              >
            </p>
          </div>
        </div>

        <hr />
      </div>
      <!-- /container -->
    </main>

    <footer class="container">
      <p>&copy; ENICAR 2021-2022</p>
    </footer>
  </body>
</html>
