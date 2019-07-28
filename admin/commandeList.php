<?php
if(isset($_GET['page']) and !empty($_GET['page']))
    {
      $page = $_GET['page'];
       require_once('../controller/paginationCmd.php');
    }else
    {
      require_once('../controller/selectCmd.php');
    }
    require_once('../controller/paginateCmd.php');
    require_once('../function/convertDateToFrench.php');
 ?>
<?php require_once('header.php'); ?>
<div class="commandlist" style="margin-top:200px;">
    <h3 class="text-center"> Liste des commandes</h3>
      <div class="container-fluid">
      <table class="table-responsive">
        <table class="table table-hover">
         <thead class="thead-light" style="font-size:75%;">
          <tr>
            <th scope="col">Date et heure de la commande</th>
            <th scope="col">Nom et prenom du client</th>
            <th scope="col">Contact du client</th>
            <th scope="col">Plat commandé</th>
            <th scope="col">Nombre de plat</th>
            <th scope="col">Lieu Livraison</th>
            <th scope="col">Montant Total</th>
            <th scope="col">Traitement</th>
          </tr>
         </thead>
         <?php
        foreach ($data as $cmd) {
          echo "
          <tbody>
            <tr>
             <th scope='row'>".dateToFrench($cmd['dateCommande'],'l j F Y')."  à ".extratHour($cmd['dateCommande'])."</th>
                <td>".$cmd['nomPrenom']."</td>
                <td>".$cmd['contact']."</td>
                <td>".$cmd['articleCommande']."</td>
                <td>".$cmd['nombrePlats']."</td>
                <td>".$cmd['lieuLivraison']."</td>
                <td>".$cmd['totalCommande']." FCFA</td>
                <td><button data-toggle='modal' data-target='#modal' class='btn btn-dark' style='text-transform:uppercase;'>Traiter la commande</button></td>
            </tr>
          </tbody>
          <!-- Modal -->
           <div class='modal fade' id='modal' tabindex='-1' role='dialog' aria-labelledby='modal' aria-hidden='true'>
             <div class='modal-dialog modal-dialog-centered' role='document'>
              <div class='modal-content'>
               <div class='modal-header'>
                 <h4 style='margin-left:100px;'>Traitement commande</h4>
              </div>
              <div class='modal-body'>
                  <h5>Marquer la commande comme:</h5><br/>
                <div class='row'>
                    <form  method='POST' action='../controller/treatmentCmd.php'>
                      <input type='text'style='display:none' name='treatId' value='".$cmd['id']."'>
                      <button name='cmdtreat' type='submit' class='btn btn-success ml-4'>commande traitée</button>
                    </form>
                   <form  method='POST' action='../controller/treatmentCmd.php'>
                     <input style='display:none' type='text' name='cancelId' value='".$cmd['id']."'>
                     <button name='cmdcancel' type='submit' class='btn btn-danger  ml-2'>commande annulée !</button>
                  </form>
                </div>
             </div>
            <div class='modal-footer'>
            </div>
         </div>
      </div>
    </div>
          ";
        }
          ?>
    </table>
  </table>
    </div>
  </div>
  <div class="horizontal_bar" style="margin-left:5%;margin-right:5%;">
     <hr>
  </div>
  <div class="pagination" style="margin-top:5%;width:10%;margin:auto;">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
    <?php
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
                      <form action='commandeList.php' method='GET'>
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
      ?>
      </ul>
    </nav>
  </div>
  <?php require 'footer.php'; ?>
