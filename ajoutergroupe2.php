<?php
   session_start();
   @$nomgrp=$_POST["nomgrp"];
   @$id=$_POST["id"];
   @$numetud=$_POST["numetud"];
   @$spec=$_POST["spec"];
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      if(empty($nomgrp)) $erreur="Nom laissé vide!";
      elseif(empty($id)) $erreur="Prénom laissé vide!";
      elseif(empty($numetud)) $erreur="Prénom laissé vide!";
      elseif(empty($spec)) $erreur="Login laissé vide!";
      else{
         include("connexion.php");
         $sel=$pdo->prepare("select id from groupes where id=? limit 1");
         $sel->execute(array($id));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="Login existe déjà!";
         else{
            $ins=$pdo->prepare("insert into groupes(nomgrp,id,numetud,spec) values(?,?,?,?)");
            if($ins->execute(array($nomgrp,$id,$numetud,$spec)))
               header("location:ajoutergroupe2.php");
         }   
      }
   }

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
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>SCO-ENICAR Inscription Enseignant</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="./assets/dist/css/signin.css" rel="stylesheet" />
  </head>
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
              <a class="dropdown-item" href="saisirAbsence.html"
                >Saisir Absence</a
              >
              <a class="dropdown-item" href="etatAbsence.html"
                >État des absences pour un groupe</a
              >
            </div>
          </li>

          <li class="nav-item active">
            <a href="deconnexion.php" class="nav-link" 
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


  <body class="text-center">
    <div class="erreur"><?php echo $erreur ?></div>
    <form class="form-signin" method="post" action="">
      
      <h1 class="h3 mb-3 font-weight-normal">Veuillez ajouter un groupe </h1>
<main role="main">
  

  
  <form>
    <div class="form-group">
      <input
        type="text"
        class="form-control"
        name="nomgrp"
        placeholder="Nom du groupe"
        required
        value="<?php echo $nomgrp?>"
        autofocus
      />
    </div>
      <!-- <input type="text" name="nom" placeholder="Nom" value="<?php echo $nom?>" /><br /> -->
      <input
        type="number"
        class="form-control"
        name="id"
        placeholder="Id"
        value="<?php echo $id?>"
        required
        autofocus
      /><br />
      <input
        type="number"
        class="form-control"
        name="numetud"
        placeholder="Nombre des étudiants"
        
        required
      /><br />
      <input
        type="text"
        class="form-control"
        name="spec"
        placeholder="Specialité"
        
        required
      /><br />
    </div>
  
  </form>
  
      
      <button class="btn btn-lg btn-primary btn-block" name="valider" type="submit">AJOUTER</button>
    </main>

      
      
    </form>
    
  </body>
</html>

