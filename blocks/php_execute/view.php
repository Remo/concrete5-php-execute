<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<div id="php-execute-<?php echo intval($bID) ?>" class="php-execute-block">
    <?php eval($content); ?>
</div>