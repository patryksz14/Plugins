jQuery(document).ready(function(){
    var userId = jQuery('#custom-like-button').attr('userId');
    var teachId = jQuery('#custom-like-button').attr('teacherId');
    jQuery('#custom-like-button').on('click', function(){like(userId, teachId)});
    function like(id, teacherId)
    {
        
        jQuery.ajax({
            type: "POST",
            url: "./../../wp-content/plugins/custom-likes-plugin/form-handling.php",
            dataType:"text",
            data:{userId:id, teacherId:teacherId},
            success: function(response){
                console.log(response);
                if(response == 'add')
                {
                    jQuery('#custom-like-button').addClass('btn-secondary');
                    jQuery('#custom-like-button').removeClass('btn-primary');
                    jQuery('#custom-like-button').text('♥');
                }
                else if(response == 'del')
                {
                    jQuery('#custom-like-button').addClass('btn-primary');
                    jQuery('#custom-like-button').removeClass('btn-secondary');
                    jQuery('#custom-like-button').text('♡');
                }
            }
        });
    }
});