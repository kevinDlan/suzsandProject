<?php
      session_start();

      if (isset($_POST['id']))
      {
        if (isset($_POST['id']))
        {
          $id = $_POST['id'];
        }
            try
            {
              $bdd = new PDO('mysql:host=localhost;dbname=suzsand_db;charset=utf8', 'root', 'dylan7729');
            }
            catch(Exception $e)
            {
              die('Erreur : '.$e->getMessage());
            }
            $req = $bdd->prepare('SELECT libelleMenu, descriptionMenu, photoMenu, prix FROM menu WHERE id = :id');
            $req->execute(array('id'=> $id));
            $resultat = $req->fetch();
            $_SESSION['libelleMenu'] = $resultat['libelleMenu'];
            $_SESSION['descriptionMenu'] = $resultat['descriptionMenu'];
            $_SESSION['photoMenu'] = $resultat['photoMenu'];
            $_SESSION['prix'] = $resultat['prix'];

            $req->closeCursor();
          header('Location: ../commande/commande.php');

      }
 ?>
