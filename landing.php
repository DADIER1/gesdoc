<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cours Complet Bootstrap 4</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="container">
      <h1>Les tableaux Bootstrap</h1>
      <table class="table table-dark">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Giraud</td>
            <td>Pierre</td>
            <td>28</td>
          </tr>
          <tr>
            <td>Durand</td>
            <td>Victor</td>
            <td>26</td>
          </tr>
          <tr>
            <td>Joly</td>
            <td>Julia</td>
            <td>27</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>