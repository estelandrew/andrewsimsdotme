<div id="contact-page-overlay" class="<?php echo ($isPost AND $isValidForm) ? "" : "overlay-hidden" ?>">
    <div id="contact-page-overlay-panel">
        <div id="contact-page-overlay-message">
        <h3 class="item-heading"><?php echo $response; ?></h3>
        <form><input id="btn-close-overlay" class="link-button" type="submit" value="Close" method="get"></form>
        </div>
    </div>
</div>