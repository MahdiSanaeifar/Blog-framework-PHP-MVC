<?php
$flash = getFlash('success');
if (!empty($flash)) { ?>
<div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align: left;">
    <?= $flash ?>
</div>
<?php
}
?>