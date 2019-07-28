<?php
if( isset($_POST) AND !empty($_POST))
  {
       require_once('../bd/connexion.php');
       $query =$bdd->prepare('SELECT nom,prenom,email,passwords FROM admin WHERE email= :adminemail');
       $query->bindValue(':adminemail',$_POST['adminEmail'],PDO::PARAM_STR);
       $query->execute();
       $data = $query->fetch();

       if( $data['passwords'] == md5($_POST['adminPassword'] ) && $data['email'] == $_POST['adminEmail'])
       {
           session_start();
           // $_SESSION['adminnom'] = $data['nom'];
           // $_SESSION['adminprenom'] = $data['prenom'];
           $_SESSION['login']="yes";
           header('Location:../admin/home.php');
          }else{
              session_start();
              $_SESSION['adminloginError']="Le mot de passe ou l'adresse email est incorrect !";
              header("Location:/admin/index.php?");
            }
         }else{
                echo"NOK";
              }
  $query->closeCursor();

?>
