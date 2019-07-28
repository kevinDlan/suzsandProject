<?php
  require_once('../controller/selectnewLetterController.php');
 ?>
<?php require 'header.php'; ?>
  <div class="newletterlist" style="margin-top:190px;">
        <h3 class="text-center"> Liste de Email des personnes souhaitant etre informé des nouvelle recettes</h3>
          <div class="container-fluid  col-md-6" style="margin-top:100px;">
          <table class="table-responsive">
            <table class="table table-hover">
             <thead class="thead-light">
              <tr>
                <th scope="col">Email</th>
                <th scope="col"></th>
              </tr>
             </thead>
            <tbody>
           <?php
               foreach ($data as $emails){
                 echo "
              <form method='POST' action='../controller/newletterview.php'>
                <input style='display:none;' type='number' name='suscriberId' value='".$emails["id"]."'>
                 <tr class='changeStatus'>
                     <td>
                          ".$emails["email"]."
                    </td>
                    <td>
                         <button type='submit' class='btn btn-primary'>Vue</a>
                   </td>
                 </tr>
              <form>
                      ";
               }
               ?>
            </tbody>
        </table>
      </table>
        </div>
      </div>
    <?php require 'footer.php'; ?>
