<?php
class BD
{
private $host="localhost";
private $user_name = "root";
private $password = "dylan7729";
private $database = "suzsand_db";
private $db;
  public function __construct($host=null,$user_name=null,$password=null,$database=null)
  {
    if($host!=null){
      $this->host = $host;
      $this->user_name = $user_name;
      $this->password = $password;
      $this->database = $database;
    }
    try {
         $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->user_name, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
       } catch (PDOException $e) {
         die('<h1>Impossible de se connecte a la base de donné</h1>');
       }

    }

    public function query($sql,$data=array()){
     $req = $this->db->prepare($sql);
     $req->execute($data);
     return $req->fetchAll(PDO::FETCH_OBJ);
     $req->closeCursor();
    }

    public function insertQuery($sql,$data=array()){
      $req = $this->db->prepare($sql);
      $req->execute($data);
      $req->closeCursor();
      if($req->rowCount()>0)
      {
        return true;
      }else
      {
        return false;
      }
    }

    public function updateQuery($sql,$data=array()){
      $req = $this->db->prepare($sql);
      $req->execute($data);
      $req->closeCursor();
      if($req){
                return true;
              }else{
                return false;
              }
    }
}
