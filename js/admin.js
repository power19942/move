jQuery(document).ready( function($){
 // media uploader for movie post type
    var mediaUploader;

    $('#upload-button').on('click',function(e) {
        e.preventDefault();
        if( mediaUploader ){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Movie Background Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });

        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#background_field').val(attachment.url);
            $('#movie-background').prop('src',attachment.url);
        });

        mediaUploader.open();

    });

    $('#remove-picture').on('click',function(e){

        e.preventDefault();
        var answer = confirm("Are you sure you want to remove your Profile Picture?");
        if( answer == true ){
            $('#profile-picture').val('');
            $('.sunset-general-form').submit();
        }
        return;
    });




});