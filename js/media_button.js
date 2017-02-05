jQuery(document).ready(function($) {
    $('#favicon_ico_0_button').click(function() {
        tb_show('Upload a logo', 'media-upload.php?referer=wptuts-settings&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });
});

window.send_to_editor = function(html) {
    console.log(html);
    // Get the actual URL
    var image_url = jQuery(html).attr('src');
    console.log(image_url);
    jQuery('#favicon_ico_0').val(image_url);
    jQuery('#favicon_ico_0_preview').attr('src',image_url);
    tb_remove();
};