jQuery(document).ready(function ($) {
   function media_upload(button_class, preview, input) {
       preview = preview || '.preview-image';
       input =  input || '.image_link';
       
        var _custom_media = true,
        _orig_send_attachment = wp.media.editor.send.attachment;

        $('body').on('click', button_class, function(e) {
            var t = $(this);
            var button_id ='#'+$(this).attr('id');
            var button = $(button_id);
            _custom_media = true;
            wp.media.editor.send.attachment = function(props, attachment){
                if ( _custom_media  ) {
                    t.closest('form').find(preview).attr('src',attachment.url);
                    t.closest('form').find(input).val(attachment.url); 
                } else {
                    return _orig_send_attachment.apply( button_id, [props, attachment] );
                }
            };
            wp.media.editor.open(button);
                return false;
        });
    }
    media_upload('.custom_media_button.button');
    media_upload('.custom_media_button.button_page_1', '.preview-image-1', '.image_link_1');
    media_upload('.custom_media_button.button_page_2', '.preview-image-2', '.image_link_2');
    media_upload('.custom_media_button.button_page_3', '.preview-image-3', '.image_link_3');
    media_upload('.custom_media_button.button_page_4', '.preview-image-4', '.image_link_4');
});