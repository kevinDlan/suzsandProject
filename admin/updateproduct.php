<?php
     if(isset($_GET) and !empty($_GET))
       {
          //session_start();
          $code = $_GET['productCode'];
         include("../controller/searchQuery.php");
       }else {
             //session_start();
             include("../controller/selectProductForUpDate.php");
             }
   ?>
<?php require 'header.php';?>
     <div class="container-fluid">
       <div class="search-form">
             <div class="container-fluid  col-md-6" style="margin-top:150px;">
              <form class="searchForm" action="updateproduct.php" method="GET">
                <div id="searchDiv" class="input-group mb-3">
                  <input name="productCode" onblur="searchbarLoseCursor();" autofocus  id="searchbar" type="search" class="form-control" value="" placeholder="Veuillez entrer le code du produit a modifié" autocomplete="off"required>
                    <div id="btnDiv" class="input-group-append">
                       <button id="submit" type="submit" class="btn btn-outline-primary"><span style="font-size:25px;" class="icon-search"></span></button>
                   </div>
                </div>
                <ul id="searchresult" class="searchbar" >
                </ul>
              </form>
           </div>
         </div>
         <div class="product_table">
           <table class="table-responsive">
             <table class="table table-hover">
              <thead class="thead-light">
               <tr>
                 <th scope="col">Code du repas</th>
                 <th scope="col">Libelle du repas</th>
                 <th scope="col">Description du repas</th>
                 <th scope="col">Prix du repas</th>
                 <th scope="col">Image du repas</th>
                 <th scope="col"></th>
               </tr>
             </thead>
            <?php
      foreach ($data as $product){
            echo "
          <form  action='../../controller/updateProductData.php' method='post' enctype='multipart/form-data'>
            <input style='display:none;' type='number' name='id' value='".$product['id']."'>
             <tbody id='tbody'>
               <tr class='updated'>
                <th class='rowCode activateBtn' scope='row'>
                       <input onkeyup='remove_attr(this);' id='repasCode' name='repas_code' type='text' value='".$product['codeMenu']."' readonly required style='border:none;'/>
                       <i style='cursor:pointer;' id='edit_code_pens' onclick='editCode(this);' class='fa fa-pen'></i>
                </th>
                   <td class='rowLibelle activateBtn'>
                     <input onkeyup='remove_attr(this);' id='libelle' name='libelle_repas' type='text' value='".$product['libelleMenu']."' readonly required style='border:none;'/>
                     <i style='cursor:pointer;' id='edit_descip_pens'onclick='editLibelle(this);' class='fa fa-pen'></i>
                   </td>
                   <td class='rowDescrip activateBtn'>
                      <textarea onkeyup='remove_attr(this);' id='description' name='description_repas'  rows='3' readonly required style='border:none;'/>".$product['descriptionMenu']."</textarea>
                      <i style='cursor:pointer;' id='edit_libelle_pens' onclick='editDescrip(this);' class='fa fa-pen'></i>
                   </td>
                   <td class='rowPrix activateBtn'>
                     <input onchange='remove_attr(this);' id='prix' name='prix_repas' class='display-none' type='number' value='".$product['prix']."' readonly required style='border:none;'/>
                     <i style='cursor:pointer;' id='edit_prix_pens' onclick='editPrix(this);' class='fa fa-pen'></i>
                  </td>
                   <td class='rowImg activateBtn'>
                      <img class='image_apercu' src='../../imageRepas/".$product['photoMenu']."' width='100px' height='100px' alt=''>
                      <input id='img' name='img_repas' style='display:none' onchange='show_apercu(this);remove_attr(this);'     type='file' accept='image/*'/>
                      <i style='cursor:pointer;' id='edit_img_pens' onclick='chooseFile(this);' class='fa fa-pen'></i>
                   </td>
                   <td class='btn'>
                      <button disabled id='button' type='button' data-toggle='modal' data-target='#".$product['codeMenu']."' class='btn btn-primary sm-1'>Enregister</button>
                   </td>
               </tr>
             </tbody>
             <!-- Modal -->
              <div class='modal fade' id='".$product['codeMenu']."' tabindex='-1' role='dialog' aria-labelledby='modal' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                 <div class='modal-content'>
                  <div class='modal-header'>
                    <button type='button' class='btn btn-danger' data-dismiss='modal' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                    </button>
                 </div>
                 <div class='modal-body'>
                    <p class='text-center'>
                       <i class='far fa-question-circle fa-7x' style='color:#f16821;' ></i>
                    </p>
                    <p class='text-center' style='text-size:30px;'> Voulez-Vous enregistré les modifications </p>
                    <p class='text-center'>
                      <button type='button' class='btn btn-info ml-4' data-dismiss='modal' aria-label='Close'>Annuler</button>
                      <button name='mgsView' type='submit' class='btn btn-success ml-4'>Confirmer</button>
                    </p>
                </div>
               <div class='modal-footer'>
               </div>
            </div>
         </div>
       </div><!-- endModal -->
            </form>
            ";
             }
              ?>
         </table>
       </table>
         </div>
     </div>
    <?php require 'footer.php'; ?>
