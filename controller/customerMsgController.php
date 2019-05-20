<?php
   require_once('../bd/connexion.php');
   $query = $bdd->prepare("SELECT * FROM contacter WHERE status_msg='non vue' ORDER BY date_jour DESC");
   $query->execute();
   $data = $query->fetchAll(\PDO::FETCH_ASSOC);
?>
