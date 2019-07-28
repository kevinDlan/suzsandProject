function chooseFile(x){
   $(x).parents('.img_viewer').children('input[type="file"]').click();
             }
function show_apercu(x){
var files = jQuery(x)[0].files;
if(files.length > 0){
   var file = files[0];
   if(file.size<=4*1024*1024){
     var file = files[0];
     $(x).prevAll('.file-name').html(file.name+" "+parseInt(file.size/1024)+"  KO");
     $(x).prevAll('.image_apercu').attr('src', window.URL.createObjectURL(file));
     $(x).prevAll('.image_apercu').show();
     $(x).parents('.img_viewer').children('a').show();
   }else{
         alert('l\'image que vous avez choisi est trop lourd. Elle doit etre inferieur a 4 MO');
         }
       }
     }

     //JS for Renitialised all field after insert product

     $('').submit(
       function(e){
         e.preventDefault();
         var $form = $(this);
         var formdata = (window.FormData) ? new FormData($form[0]) : null;
         var donnees = (formdata !== null) ? formdata : $form.serialize();
         $({
           url: $form.attr("action"),
           type:'POST',
           contentType: false,
           processData: false,
           data: donnes,
           success: function(data){
               var rep = JSON.parse(data);
               if(rep.OK){
                 document.getElementById('productInsertForm').reset();
                 //Renitialisation du formulaire
                 $("productInsertForm").find('.img_apercu').hide();
                 $("productInsertForm").find('.img_apercu').hide();
                 $('alert-success').html(rep.msg);
                 $('alert-success').show(500).delay(7000).hide(500);
               }else{
                 $('alert-fail').html(rep.msg);
                 $('alert-success').show(500).delay(7000).hide(500);
               }
           },
           error: function(){
             alert('Error');
           }
         });
       }
     );

     // JS for choosed file when updating
     function chooseFile(x)
        {
           $(x).parents('.rowImg').children('input[type="file"]').click();
         }
         function show_apercu(x){
             var files = jQuery(x)[0].files;
               if(files.length > 0){
                var file = files[0];
                 if(file.size<=4*1024*1024){
                   var file = files[0];
                    //$(x).prevAll('.file-name').html(file.name+" "+parseInt(file.size/1024)+"  KO");
                    $(x).prevAll('.image_apercu').attr('src', window.URL.createObjectURL(file));
                    $(x).prevAll('.image_apercu').show();
                    }else{
                      alert('l\'image que vous avez choisi est trop lourd. Elle doit etre inferieur a 4 MO');
                    }
                  }
                 }

// JS for update search Bar
$(document).ready(function(){
     $('#searchbar').keyup(function(){
        var userQuery = $(this).val();
        var leng = userQuery.length;
      if(leng>0){
                  //$('.updated').fadeOut('slow');
                  $.ajax({
                    type:'POST',
                    data:'query=' + encodeURIComponent(userQuery),
                    url:"../../controller/ajaxQueryforselect.php",
                    success:function(data){
                      if(data != ""){
                          $('#searchresult').show().html(data);
                        }else {
                            $('#searchresult').show().html('Aucun resultat trouvé !');
                        } ;

                    //var QueryData = data;
                    //alert(QueryData.codeMenu);
                    },
                    error:function(){
                      alert('Error');
                    }
                  });
                }
                else
                {
                  $('#searchresult').fadeOut('fast');
                  //location.reload();
                }
   })
});
 function choseItem(x)
 {
   var val = $(x).html();
   $('#searchbar').val(val);
   $('#searchresult').fadeOut('fast');
   $('#searchDiv').children('#btnDiv').children('button[type="submit"]').click();
 }
 function searchbarLoseCursor(){
      $('#searchresult').fadeOut('fast');
 }

 //JS for Update pen's
 function editCode(x){
     $(x).parents('.rowCode').children("#repasCode").removeAttr('readonly').focus();
   }
   function editLibelle(x){
       $(x).parents('.rowLibelle').children("#libelle").removeAttr('readonly').focus();
     }
     function editDescrip(x){
         $(x).parents('.rowDescrip').children("#description").removeAttr('readonly').focus();
       }
       function editPrix(x){
           $(x).parents('.rowPrix').children("#prix").removeAttr('readonly').focus();
         }

     function remove_attr(x){
       $(x).parents('.activateBtn').parents('.updated').children('.btn').children('#button').removeAttr('disabled');
     }
     
   // JavaScript for delete product Page searbar
   $(document).ready(function(){
        $('#deleteProductCode').keyup(function(){
           var userQuery = $(this).val();
           var leng = userQuery.length;
         if(leng>0){
                     //$('.updated').fadeOut('slow');
                     $.ajax({
                       type:'POST',
                       data:'query=' + encodeURIComponent(userQuery),
                       url:"../../controller/ajaxQueryforselect.php",
                       success:function(data){
                         if(data != ""){
                             $('#searchresult').show().html(data);
                           }else {
                               $('#searchresult').show().html('Aucun resultat trouvé !');
                           } ;

                       //var QueryData = data;
                       //alert(QueryData.codeMenu);
                       },
                       error:function(){
                         alert('Error');
                       }
                     });
                   }
                   else
                   {
                     $('#searchresult').fadeOut('fast');
                     //location.reload();
                   }
      })
   });

    function choseItem(x)
    {
      var val = $(x).html();
      $('#deleteProductCode').val(val);
      $('#searchresult').fadeOut('fast');
      $('#deleteSearchbar').children('#searchBtn').children('button[type="submit"]').click();
    }
    function searchbarLoseCursor(){
         $('#searchresult').fadeOut('fast');
    }
