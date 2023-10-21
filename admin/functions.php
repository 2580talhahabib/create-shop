<?php      
function my_alert($color,$message){
    ?>

    <div id="my_alert" class="alert alert-<?php echo  $color ?> alert-dismissible fade show" role="alert">
    <?php echo  $message ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    
        <?php
}

?>
