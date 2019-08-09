<?php
if (isset($_POST['query']) and !empty($_POST['query']))
 {
   $userQuery = htmlspecialchars($_POST['query']);
   require(dirname(__DIR__).'\bd\connexion.php');
   $query = $bdd->prepare(
                          'SELECT * FROM menu WHERE codeMenu LIKE ? ORDER BY id ASC LIMIT 5'
                          );
    $query->execute(array("%$userQuery%"));
    $result = $query->fetchAll(\PDO::FETCH_OBJ);
    $query->closeCursor();
    //var_dump($result);
    foreach ($result as $results)
    {
     echo "<li style='cursor:pointer' onclick='choseItem(this);' onmousedown='choseItem(this);'>".$results->codeMenu."</li>";
    }
 }else {
        echo "Error";
       }
