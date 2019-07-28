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
                   $('.count').empty().append(data.count);
                   $('.visited-cart').click();
                    // if(
                    //       confirm(data.message+' Voulez vous Consulter votre panier ?')
                    //  ){
                    //       location.href = 'panier.php';
                    //   }else
                    //        {
                    //        }
        }
     },'json');
     return false;
   });
})(jQuery);
