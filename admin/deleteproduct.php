<?php
if(isset($_GET['productCode']) and !empty($_GET['productCode']))
  {
     //session_start();
     $code = $_GET['productCode'];
     include("../controller/searchQuery.php");
  }else{
       if(isset($_GET['page']) and !empty($_GET['page'])){
         //session_start();
         $page = $_GET['page'];
         require_once('../controller/productPagination.php');
           }
           else
           {
             //session_start();
             include("../controller/selectProductForDelete.php");
           }
          require_once('../controller/productPaginate.php');
        }
?>
<?php require 'header.php'; ?>
     <div class="container-fluid">

       <div class="search-form">
             <div class="container-fluid  col-md-6" style="margin-top:150px;">
              <form class="" action="deleteproduct.php" method="GET">
                <div id="deleteSearchbar" class="input-group mb-3">
                  <input id="deleteProductCode" name="productCode" autofocus type="search" onblur="searchbarLoseCursor();" class="form-control" placeholder="Veuillez entrer le code du produit a supprimé" autocomplete="off">
                    <div id="searchBtn" class="input-group-append">
                       <button id="submit" type="submit" class="btn btn-outline-primary"><span style="font-size:25px;" class="icon-search"></span></button>
                   </div>
                </div>
                <ul id="searchresult" class="searchbar">
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


              </form>
            <?php
       //echo "";
          foreach ($data as $product){
            echo "
          <div class='productRow'>
            <form action='../../controller/deleteProduct.php' id='deleteForm' class='deleteForm' method='post'>
             <tbody>
                   <input name='codeProduit' type='text' style='display:none' value='".$product['codeMenu']."'/>
                   <input name='imgProduit' type='text' style='display:none' value='".$product['photoMenu']."'/>
               <tr class='".$product['codeMenu']."'>
                <th scope='row'>
                       ".$product['codeMenu']."
                </th>
                   <td>
                     ".$product['libelleMenu']."
                   </td>
                   <td>
                    ".$product['descriptionMenu']."
                   </td>
                   <td>
                    ".$product['prix']." "."XOF
                  </td>
                   <td>
                      <img src='../../imageRepas/".$product['photoMenu']."' width='100px' height='100px' alt=''>
                   </td>
                   <td>
                      <button data-toggle='modal' data-target='#".$product['codeMenu']."'  class='btn btn-primary sm-1' type='button'>Supprimer</button>
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
                    <p class='text-center' style='text-size:30px;'> Voulez-Vous vraiment supprimé le produit </p>
                    <p class='text-center'>
                      <button type='button' class='btn btn-info ml-4' data-dismiss='modal' aria-label='Close'>Annuler</button>
                      <button name='mgsView' type='submit' class='btn btn-danger ml-4'>Confirmer</button>
                    </p>
                </div>
               <div class='modal-footer'>
               </div>
            </div>
         </div>
       </div><!-- endModal -->
             </form>
            </div>";
             }
        //echo "";
              ?>
         </table>
       </table>
         </div>
     </div>
     <div class="horizontal_bar" style="margin-left:5%;margin-right:5%;">
        <hr>
     </div>
     <div class="pagination offset-5" style="margin-top:5%;width:10%;margin:auto;">
       <nav aria-label="Page navigation example">
         <ul class="pagination">
       <?php
             if(isset($nbreOfPage))
             {
               echo "
                     <form action='' methods='GET'>
                      <input name='page' type='hidden' value='1'>
                     <li class='page-item'>
                       <button type='submit' class='page-link'  aria-label='Previous'>
                         <span aria-hidden='true'>&laquo;</span>
                       </button>
                     </li>
                     </form>
               ";

                 for($i=1;$i<=$nbreOfPage;$i++){
                   echo "
                          <form action='deleteproduct.php' method='GET'>
                            <input name='page' type='hidden' value='".$i."'>
                            <li id='activeItem' class='page-item'><button id='".$i."' onclick='activeFunction(this);' class='page-link' type='submit'>".$i."</button></li>
                          </form>
                        ";
                 }

             $last=$i-1;
             echo "
                   <form action='' method='GET'>
                    <input name='page' type='hidden' value='".$last."'>
                    <li class='page-item'>
                     <button class='page-link' aria-label='Next'>
                       <span aria-hidden='true'>&raquo;</span>
                     </button>
                  </li>
                   </form>
                 ";
              }
         ?>
         </ul>
       </nav>
     </div>
    <?php require 'footer.php'; ?>
