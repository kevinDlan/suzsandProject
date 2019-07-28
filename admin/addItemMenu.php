<?php require 'header.php'; ?>
<div class="addItemList" style="margin-top:10%;">
  <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Formulaire d'ajout de produit</p>
            </div>
            <div class="form-content">
             <form class="col-lg-10" id="productInsertForm" method="POST" action="../controller/insertProductController.php"  enctype="multipart/form-data">
               <div class="form-group">
                 <label for="codeProduit">Code produit</label>
                  <input name="codeProduit" type="text" class="form-control" id="codeProduit" placeholder="Veuiller entré le code du produit" required>
              </div>
              <div class="form-group">
                 <label for="nomProduit">Nom du produit</label>
                  <input name="nomProduit" type="text" class="form-control" id="codeProduit" placeholder="Veuiller entré le nom du produit" required>
              </div>
              <div class="form-group">
                 <label for="descriptionproduit">Description du produit</label>
                  <textarea name="descriptionProduit" type="textarea" class="form-control" id="desciption" placeholder="Veuillez entré la description du produit" rows="3" required></textarea>
              </div>
              <div class="form-group">
                 <label for="descriptionproduit">Prix du produit</label>
                 <input class="form-control" type="number" name=" prixProduit" placehoder="Veuillez entré le prix du produit" required>
              </div>
              <div class="form-group img_viewer">
                    <span class="btn btn-primary btn-sm" onclick="chooseFile(this);">Choisir une image ...</span>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <img class="image_apercu" style="width:300px;height:130px;display:none;">
                    <input name="productImg" type="file" class="form-control-file" id="productFile" style="display:none;"
                     name="productFile" onchange="show_apercu(this);" accept="image/*">
              </div>
          </form>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
