<?php
if(
     (
         isset($_POST['adminEmail']) && isset($_POST['adminPassword'])
     ) AND (
         !empty($_POST['adminEmail']) && !empty($_POST['adminPassword'])
            )
   ){
       require_once('../bd/connexion.php');
       $query =$bdd->prepare('SELECT nom,prenom,email,passwords FROM admin WHERE email= :adminemail');
       $query->bindValue(':adminemail',$_POST['adminEmail'],PDO::PARAM_STR);
       $query->execute();
       $data = $query->fetch();
       foreach($data as $car){
        
       }
       if( $data['passwords'] == md5($_POST['adminPassword'] ) && $data['email'] == $_POST['adminEmail'])
       {
           session_start();
           $_SESSION['adminnom'] = $data['nom'];
           $_SESSION['adminprenom'] = $data['prenom'];
          header('Location:../admin/home.php');
       }else{
              session_start();
              $_SESSION['adminloginError']="Le mot de passe ou l'adresse email est incorrect !";
              header("Location:/suzsand/admin/index.php?");
            }
         }else{
                echo"NOK";
              }
  $query->closeCursor();
    
?>