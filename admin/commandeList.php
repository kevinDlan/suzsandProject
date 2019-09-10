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
<?php require '../moneyformatfunction.php'; ?>
<div class="commandlist" style="margin-top:200px;">
  <?php if(isset($_SESSION['updateOrderStatus'])): ?>
    <div class="alert alert-success mx-auto alert-dismissible fade show col-md-6" role="alert" style="text-align:center;">
           <?=$_SESSION['updateOrderStatus'];?>
       <button type='button' class='close' data-dismiss="alert" aria-label='Close '>
              <span aria-hidden='true'>&times;</span>
       </button>
    </div>
  <?php endif; ?>
    <h3 class="text-center">Liste des commandes</h3>
      <div class="container-fluid">
      <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
        <table class="table table-hover">
         <thead class="thead-light" style="font-size:75%;">
          <tr>
            <th scope="col">Date et heure de la commande</th>
            <th scope="col">Nom et prenom du client</th>
            <th scope="col">Contact du client</th>
            <th scope="col">Lieu Livraison</th>
            <th scope="col">Montant Total</th>
            <th scope="col">État</th>
          </tr>
         </thead>
         <?php foreach ($data as $cmd):?>
               <tbody>
                    <tr  onclick="viewCustomerOrder(this);" style="cursor:pointer;">
                     <th scope='row'><?=dateToFrench($cmd->order_date,'l j F Y')."  à ".extratHour($cmd->order_date) ?></th>
                        <td><?=$cmd->nomPrenom?></td>
                        <td><?=$cmd->contact?></td>
                        <td><?=$cmd->delivery_place?></td>
                        <td><?=money_format($cmd->order_total)?></td>
                        <td class="lastchild">
                            <a  class="item-order-link" href="customerOrder.php?orderCode=<?=$cmd->codecommande?>"></a>
                            <span class="alert alert-success" role="alert">En cours</span>
                            <!-- <button data-toggle='modal' data-target='#modal' class='btn btn-dark' style='text-transform:uppercase;'>Traiter la commande</button> -->
                        </td>
                    </tr>
               </tbody>
        <?php endforeach;?>
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
    </table>
  </div>
    </div>
  </div>
  <div class="horizontal_bar" style="margin-left:5%;margin-right:5%;">
     <hr>
  </div>
  <div class="pagination" style="margin-top:5%;width:10%;margin:auto;">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
    <?php
           echo "                 <form action='' methods='GET'>
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
  <script type="text/javascript">
    function viewCustomerOrder(x)
    {
      //console.log($(x).children('.lastchild').children('.item-order-link').get(0));
      $(x).children('.lastchild').children('.item-order-link').get(0).click();
    }
  </script>
  <?php require 'footer.php'; ?>
?
