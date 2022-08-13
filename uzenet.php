<?php
    if(isset($_SESSION['uzenet'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
       <?= $_SESSION['uzenet']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['uzenet']);
    endif;
?>