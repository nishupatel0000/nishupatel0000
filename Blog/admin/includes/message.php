<?php 

if(isset($_SESSION['status'])){ 
    print_r($_SESSION['status']);

    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> <?php echo  $_SESSION['status'];?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
  }
  unset($_SESSION['status']);

  ?>