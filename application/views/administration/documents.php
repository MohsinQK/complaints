<?php
set_page_title(lang('files'));
?>

<div class="adminConfiguration" style="height:100%;background-color:white">
    <div class="adminHeader">
        <div class="adminTitle"><?php echo lang('files') ?></div>
    </div>
    <div class="adminSeparator"></div>
    <div class="adminMainBlock">
        <div class="configCategory">
            <h2><a class="internalLink" href="<?php echo get_url('administration', 'documents_allow');?>"><?php echo lang("file extension prevention uploading")?></a></h2>
            <div class="configCategoryDescription"></div>
        </div>
    </div>
</div>