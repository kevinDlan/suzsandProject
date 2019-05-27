//Selected User e*messages and notificate admin
  function loadNotif(){
  setTimeout(function(){
            $.ajax({
              type:'POST',
              url:"../../controller/selectUserMgsAndNotifAdmin.php",
              success:function(val){
                if(val>0){
                  $('.count').html(val);
                }
              },
              error:function(){
                //alert('Error');
              }
            });
            loadNotif();
                 },
               5000
             );
      }
      loadNotif();

      //Selected User commande and notificate admin
      function loadcmdNotif(){
      setTimeout(function(){
                $.ajax({
                  type:'POST',
                  url:"../../controller/selectNewCmdNotif.php",
                  success:function(cmdNotif){
                    if(cmdNotif > 0){
                      $('.countCmdNotif').html(cmdNotif);
                    }
                  },
                  error:function(){
                     //alert('Error');
                  }
                });
                loadcmdNotif();
                     },
                   5000
                 );
          }
          loadcmdNotif();


          //Selected clients that succribe to new letter and notificate admin
          function loadnewLetterNotif(){
          setTimeout(function(){
                    $.ajax({
                      type:'POST',
                      url:"../../controller/selectNewLetterNotif.php",
                      success:function(notifnewLetter){
                        if(notifnewLetter>0){
                          $('.countNletterNotif').html(notifnewLetter);
                          //alert('OK');
                        }
                      },
                      error:function(){
                        //alert('Error');
                      }
                    });
                  loadnewLetterNotif();
                         },
                       5000
                     );
              }
              loadnewLetterNotif();
