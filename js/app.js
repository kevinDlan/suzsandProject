(function($){
  $('.addPanier').click(function(event)
   {
     event.preventDefault();
     $.get(
           $(this).attr('href'),{},function(data){
              if (data.error)
                 {
                  alert(data.message);
                 }else
                 {
                  if(
                      confirm(data.message+' Voulez vous Consulter votre panier ?')
                    ){
                      location.href = 'panier.php';
                     }else{
                       $('#count').append(data.count);
                    }
        }
     },'json');
     return false;
   });
})(jQuery);
