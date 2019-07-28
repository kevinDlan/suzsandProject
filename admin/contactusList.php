<?php
require_once('../controller/customerMsgController.php');
require_once('../function/convertDateToFrench.php'); ?>
<?php require 'header.php'; ?>
    <div class="commandlist" style="margin-top:200px;">
        <h3 class="text-center">Messages des clients</h3>
          <div class="container-fluid">
          <table class="table-responsive">
            <table class="table table-hover">
             <thead class="thead-light">
              <tr>
                <th scope="col">Date et heure</th>
                <th scope="col">Nom et prenom du client</th>
                <th scope="col">Email</th>
                <th scope="col">Type du message</th>
                <th scope="col"></th>
              </tr>
             </thead>
             <?php
             foreach ($data as $msgData) {
               echo"
               <tbody>
                 <tr id='".$msgData['id']."'>
                  <th scope='row'>".dateToFrench($msgData['date_jour'],'l j F Y')."  à ".extratHour($msgData['date_jour'])."</th>
                     <td>".$msgData['nom']." ".$msgData['prenom']."</td>
                     <td>".$msgData['email']."</td>
                     <td>".$msgData['sujet']."</td>
                     <td><button data-toggle='modal' data-target='#".$msgData['nom']."' class='btn btn-primary'>lire...</button></td>
                 </tr>
               </tbody>
               <!-- Modal -->
                <div class='modal fade' id='".$msgData['nom']."' tabindex='-1' role='dialog' aria-labelledby='modal' aria-hidden='true'>
                  <div class='modal-dialog modal-dialog-centered' role='document'>
                   <div class='modal-content'>
                    <div class='modal-header'>
                      <h4 style='margin-left:100px;'>Lecture Message client</h4>
                   </div>
                   <div class='modal-body'>
                       <p>".$msgData['messages']."</p><br/>
                     <form  method='POST' action='../controller/treatmentCustomerMsg.php'>
                        <input type='text'style='display:none' name='msgId' value='".$msgData['id']."'>
                        <button name='mgsView' type='submit' class='btn btn-success ml-4'>Message Lu</button>
                     </form>
                  </div>
                 <div class='modal-footer'>
                 </div>
              </div>
           </div>
         </div><!-- endModal -->
                ";
             }
              ?>
        </table>
      </table>
        </div>
      </div>
<?php require 'footer.php'; ?>
