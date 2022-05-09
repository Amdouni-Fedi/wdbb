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
                >Lister tous les étudiants</a
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
                >État des absences pour un groupe</a
              >
            </div>
          </li>

          <li class="nav-item active">
            <a href="deconnexion.php" class="nav-link" href="#"
              >Se Déconnecter <span class="sr-only">(current)</span></a
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
          <h2 style="color:blue ">Departement Génie Informatique</h2>
          <p>
            Le Cycle ingénieur de l’école national d'ingenieur de carthage est un programme unique impliquant 3 ans d'étude 
            sur le campus qui mènent au diplôme d'ingénieur (niveau Master), puis une 4ème année qui peut être faite dans une autre université dans le monde pour obtenir le diplôme final de l'ENICAR, couplé au diplôme obtenu dans l'université choisie.
            L’objectif du département est de donner aux futurs diplômés les connaissances fondamentales en informatique afin de rester au plus près des évolutions actuelles et à venir.Les élèves du cursus ingénieur suivent des cours d’informatique dès la 1ère année. Ils peuvent choisir entre deux niveaux : une classe d’initiation et une autre classe pour les plus avancés. Pendant la 2e année, les étudiants peuvent aussi bénéficier d’une remise à niveau grâce à un cours additionnel.
            Cette formation inclut la compréhension des fondements de l'algorithmique, la programmation et la calculabilité, une connaissance de base du fonctionnement et de l'architecture des réseaux et systèmes informatiques.
            En 2e année du cycle ingénieur, les élèves ont la possibilité de suivre des modals, c’est-à-dire des cours pratiques avec la réalisation d’un projet à la clé. Cet enseignement d’une durée de deux mois permet d'aborder les technologies de demain par la pratique. Plusieurs modals sont dispensés tels que par exemple :
            Le modal web consiste à réaliser, seul ou en binôme, un site web dans son intégralité.
            Le modal tablette propose une approche de la programmation d'applications mobiles sur smartphones et tablettes.
            En troisième année, l'accent est mis d'une part sur l'approfondissement des compétences scientifiques sur des thèmes choisis par l'étudiant, d'autre part sur l'acquisition de connaissances spécifiques à un métier donné. Un voyage d'études optionnel d'une semaine permet une approche concrète de ce métier.
            Au-delà de sa formation d'ingénieur généraliste, l'étudiant acquerra ainsi un profil d'ingénieur orienté vers un secteur économique ou un savoir-faire particulier, dans lequel il commencera en général sa carrière.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#" role="button"
              >Mes Groupes &raquo;</a
            >
          </p>
        </div>
      
<div class="jumbotron">
        <div class="container">
            <h2 style="color:blue ">Departement Génie Infotronique</h2>
            <p>
            La spécialité InfoTronique a pour objectif de former et certifier des ingénieurs généralistes en électronique, informatique et dans les technologies de l'information aptes à gérer des projets complexes  en traitement du signal, transmission de l'information, réseaux de communication et architecture logicielle pour des métiers en forte émergence dans les systèmes embarqués et la sécurité des réseaux..

            L'ingénieur InfoTronique, spécialisé en Sécurité et Qualité des Réseaux, sera apte à gérer les architectures de réseaux informatiques, capables de proposer des solutions techniques pour mettre en oeuvre des réseaux, administrer des réseaux existants et les optimiser pour assurer une qualité de services optim
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
              La Mécatronique est alors une technique industrielle consistant à utiliser simultanément et en symbiose la mécanique, l’électronique, l’automatique et l’informatique pour la conception et la fabrication de nouveaux produits et de nouveaux services.
              La formation vise à établir un socle de connaissances fondamentales solides dans les différentes facettes de ce domaine pluridisciplinaire et à tisser des liens entre ces différents aspects. L’approche globale des systèmes est effectuée, en particulier, lors des projets longs où les étudiants traitent une question, de la reformulation d’un cahier des charges à la réalisation d’un prototype
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
