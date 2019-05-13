<?php
if(isset($_POST['email']) && !empty($_POST['email'])){

    $table = array('email'=>$_POST['email']);
    require_once('../bd/connexion.php');
    $req = $bdd->prepare('INSERT INTO clientnewsletter(email) VALUES (:email)');
    $result = $req->execute($table);

    if($result){
                         $req->closeCursor();
                         session_start();
                         $_SESSION['newletterMessage'] = "Merci  votre d'avoir souscrire a notre new letter.";
                         header('Location:../index.php');
                }else{
                      //print_r($req->errorInfo());
                      $error = $req->errorInfo();
                      if($error = "Array ( [0] => 23000 [1] => 1062 [2] => Duplicate entry 'kevinkone19@gmail.com' for key 'email' )")
                         {
                             $req->closeCursor();
                             session_start();
                             $_SESSION['newLetterError']="Vous etes deja inscrit au newLetter Merci";
                             header('Location:../index.php');
                         }
                    }
}
?>