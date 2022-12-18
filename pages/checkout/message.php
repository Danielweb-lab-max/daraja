<?php
if(isset($_SESSION['message'])):?>
<div class="alert alert-success my-2 alert-dismissible fade show" role="alert">
    <p><?php echo $_SESSION['message'];
                unset($_SESSION['message']);
    ?></p>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif;?>