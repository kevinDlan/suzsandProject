<?php
     
    if(isset($_POST) && !empty($_POST)){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $email = $_POST['email'];
                $sujet = $_POST['sujet'];
                $messages = $_POST['message'];
                //Creation du tableau pour la requete prepare
                $table = array('prenom' => $prenom,
                               'nom' => $nom,
                               'email' => $email,
                               'sujet' => $sujet,
                               'messages' => $messages
                             );
                require_once('../bd/connexion.php');
                $requete = $bdd->prepare("INSERT INTO contacter (prenom,nom,email,sujet,messages) VALUES (:prenom, :nom, :email, :sujet, :messages)");
                $var=$requete->execute($table);
                if($var){
                         $requete->closeCursor();
                         session_start();
                         $_SESSION['valideMessage'] = "Merci  votre message a belle et bien été enregistré.<br/>Nous vous contacterons bientot.";
                         header('Location:../index.php');
                       }else{
                              $var->errorInfo();
                            }
                  }else{
                     echo "une eurreur s'est produit lors de l'enregistrement";
                    }
?>