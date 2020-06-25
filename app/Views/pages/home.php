<section>

<?php
 $session=\Config\Services::session();
if(isset($session->success)):?>
<div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
    <?= $session->success ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
    </button>
    <?php endif?>
    <section>



</section>


</section>
