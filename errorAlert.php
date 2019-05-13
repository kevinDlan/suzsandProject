<?php
if(
  isset($_SESSION['valideMessage'])
  ){
 echo "<div id='alertSpace'  class='alert alert-success offset-3 col-6 col-md-6 mb-3 mb-md-0 text-center'>".$_SESSION['valideMessage']."
   <button  id='closeAlert' type='button' class='close' aria-label='Close' onclick='closeAlert();'>
          <span aria-hidden='true'>&times;</span>
   </button></div>";
}else if(
      isset($_SESSION['newletterMessage'])
  ){
   echo "<div id='alertSpace' class='alert alert-success offset-3 col-6 text-center'>".$_SESSION['newletterMessage']."
     <button id='closeAlert' type='button' class='close' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
     </button></div>";
  }else if(isset($_SESSION['newLetterError'])){
   echo "<div id='alertSpace' class='alert alert-danger offset-3 col-6 text-center'>".$_SESSION['newLetterError']."
     <button id='closeAlert' type='button' class='close' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
     </button>
     </div>";

  } else if(isset($_SESSION['adminloginError']))
  {
             echo "<div id='alertSpace' class='alert alert-warning alert-dismissible fade show offset-3 col-6 text-center' role='alert'>
                      <strong>".$_SESSION['adminloginError']."!</strong>
                      <button id='closeAlert' type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                      </button>
                  </div>";
  } else if(isset($_SESSION['insertProductSuccesMsg']))
  {
             echo "<div id='alertSpace' class='alert alert-success alert-dismissible fade show offset-3 col-6 text-center' role='alert'>
                      <strong>".$_SESSION['insertProductSuccesMsg']."!</strong>
                      <button id='closeAlert' type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                      </button>
                  </div>";
  }else if(isset($_SESSION['insertProductFailMsg']))
  {
             echo "<div id='alertSpace' class='alert alert-warning alert-dismissible fade show offset-3 col-6 text-center' role='alert'>
                      <strong>".$_SESSION['insertProductFailMsg']."</strong>
                      <button id='closeAlert' type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                      </button>
                  </div>";
  }

?>
<script type="text/javascript">
$("#closeAlert").click(function(){
  return "<?php session_destroy();?>";
});
$("#alertSpace").show(500).delay(1000).hide(500);
</script>
