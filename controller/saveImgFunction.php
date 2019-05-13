<?php
  function getFileUniqueName($nomfichier,$repertoire) {
     while(file_exists($repertoire.$nomfichier)){
           $tab= getFileExt($nomfichier);
           $suffixe= rand(1,10000000);
           $nomfichier=$tab[0].$suffixe.".".$tab[1];
     }
      return $nomfichier;
   }
   function getFileExt($nomfichier) {
    $extensionPresumee = explode('.', $nomfichier);
    $extension= strtolower($extensionPresumee[count($extensionPresumee)-1]);
    $nom_sans_extention=$extensionPresumee[0];
       for ($i=1;$i<count($extensionPresumee)-1;$i++)
       {
             $nom_sans_extention = $nom_sans_extention .".". $extensionPresumee[$i];
       }

       return array($nom_sans_extention,$extension);
    }

    function saveImg($nom,$repertoire){
        if(isset($_FILES[$nom])&& !empty($_FILES[$nom]['name']))
        {

              $nomfichier= utf8_encode($_FILES[$nom]['name']);
              $tmp=$_FILES[$nom]['tmp_name'];
            if (is_uploaded_file($tmp))
               {
                if(file_exists($repertoire))
                {
                   if(file_exists($repertoire.$nomfichier))
                     {
                      $nomfichier =getFileUniqueName($nomfichier,$repertoire);
                     }   
                     if(move_uploaded_file($tmp,$repertoire.$nomfichier))
                       {
                        return $nomfichier;
                       }
               }
             }
           return "";
   }
}
   ?>