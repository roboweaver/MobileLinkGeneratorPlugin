/* global wp */

(function ($) {
    $(document).ready(function () {
        console.log(wp);
        favicon_button = $('#favicon_button')
        favicon_button.on('click',
                {
                    name: "favicon.ico",
                    title: "Select favicon.ico",
                    buttonTitle: "Use this favicon.ico",
                    type: "image/ico", 
                    image_url: '#favicon',
                    image_preview: '#favicon_preview'
                 },
                mediaHandler
        );

        apple_192x192_button = $('#apple_touch_192x192_1_button');
        apple_192x192_button.on('click',
                {
                    name: "apple_touch_192x192.png",
                    title: "Apple touch 192x192",
                    buttonTitle: "Use this image",
                    type: "image/png",
                    image_url: '#apple_touch_192x192_1_button',
                    image_preview: '#apple_touch_192x192_1_preview'
                },
                mediaHandler
                        
        );
    });

    function mediaHandler(event) {
        console.log("mediaHandler");
        {
            // Accepts an optional object hash to override default values.
            var frame = new wp.media.view.MediaFrame.Select({
                // Modal title
                title: event.data.title,
                // Enable/disable multiple select
                multiple: true,
                // Library WordPress query arguments.
                library: {
                    order: 'ASC',
                    // [ 'name', 'author', 'date', 'title', 'modified', 'uploadedTo',
                    // 'id', 'post__in', 'menuOrder' ]
                    orderby: 'title',
                    'image': event.data.type, // mime type. e.g. 'image', 'image/jpeg'
                    type: 'image',
                    // Searches the attachment title.
                    search: null,
                    // Attached to a specific post (ID).
                    uploadedTo: null
                },
                button: {
                    text: event.data.buttonTitle
                }
            });
            console.log(frame);
            // Fires after the frame markup has been built, but not appended to the DOM.
            // @see wp.media.view.Modal.attach()
            frame.on('ready', function () {});
            // Fires when the frame's $el is appended to its DOM container.
            // @see media.view.Modal.attach()
            frame.on('attach', function () {});
            // Fires when the modal opens (becomes visible).
            // @see media.view.Modal.open()
            frame.on('open', function () {});
            // Fires when the modal closes via the escape key.
            // @see media.view.Modal.close()
            frame.on('escape', function () {});
            // Fires when the modal closes.
            // @see media.view.Modal.close()
            frame.on('close', function () {});
            // Fires when a user has selected attachment(s) and clicked the select button.
            // @see media.view.MediaFrame.Post.mainInsertToolbar()
            frame.on('select', function () {
//                console.log(frame.state().get('selection').first().toJSON());
                var image_url = frame.state().get('selection').first().toJSON().url;
//                console.log("image_url", image_url);
//                console.log(event.data.image_url);
//                console.log(jQuery(event.data.image_url));
                jQuery(event.data.image_url).val(image_url);
//                console.log(jQuery(event.data.image_url).val());
                jQuery(event.data.image_preview).attr('src', image_url);
            });
            // Fires when a state activates.
            frame.on('activate', function () {
                console.log('activate', this);
            });
            // Fires when a mode is deactivated on a region.
            frame.on('{region}:deactivate', function () {});
            // and a more specific event including the mode.
            frame.on('{region}:deactivate:{mode}', function () {});
            // Fires when a region is ready for its view to be created.
            frame.on('{region}:create', function () {});
            // and a more specific event including the mode.
            frame.on('{region}:create:{mode}', function () {});
            // Fires when a region is ready for its view to be rendered.
            frame.on('{region}:render', function () {});
            // and a more specific event including the mode.
            frame.on('{region}:render:{mode}', function () {});
            // Fires when a new mode is activated (after it has been rendered) on a region.
            frame.on('{region}:activate', function () {});
            // and a more specific event including the mode.
            frame.on('{region}:activate:{mode}', function () {});
            // Get an object representing the current state.
            frame.state();
            // Get an object representing the previous state.
            frame.lastState();
            // Open the modal.
            frame.open();
        }
    }

})(jQuery);