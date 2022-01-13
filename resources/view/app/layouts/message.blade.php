<?php
$flash = getFlash('success');
if (!empty($flash)) { ?>
<div class="alert alert-success alert-dismissible mb-0 p-2 my-3" role="alert" style="text-align: left;">
    <?= $flash ?>
</div>
<?php
}
?>