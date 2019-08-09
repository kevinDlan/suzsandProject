<?php
if(isset($_GET['page']) and !empty($_GET['page']))
    {
      $page = $_GET['page'];
       require_once('../controller/paginationCmd.php');
    }else
    {
      require '../controller/selectvalidateCmd.php';
    }
    require_once('../controller/paginateCmd.php');
    require_once('../function/convertDateToFrench.php');
 ?>
<?php require 'header.php'; ?>
<?php require '../moneyformatfunction.php'; ?>
<div class="commandlist" style="margin-top:200px;">
    <h3 class="text-center"> Liste des commandes livrées</h3>
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
            <th scope="col">Etat commande</th>
          </tr>
         </thead>
         <?php foreach ($orderTraited as $cmd):?>
          <tbody>
            <tr>
             <th scope='row'><?=dateToFrench($cmd->order_date,'l j F Y')."  à ".extratHour($cmd->order_date)?></th>
                <td><?=$cmd->nomPrenom?></td>
                <td><?=$cmd->contact?></td>
                <td><?=$cmd->libelleMenu?></td>
                <td><?=$cmd->product_quantity?></td>
                <td><?=$cmd->delivery_place?></td>
                <td><?=money_format($cmd->order_total)?></td>
                <td><span class='badge badge-success'>Livrée</span></td>
            </tr>
          </tbody>
        <?php endforeach; ?>
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
