jQuery(document).ready(function()
{
    jQuery('#start-slider-value').text('Godzina rozpoczęcia: '+10);
    jQuery('#end-slider-value').text('Godzina zakończenia: '+14);
    jQuery('#tat-add-form').submit(
        
        function(e){
            e.preventDefault();
            
            const dane = jQuery('#tat-add-form').serialize();
            jQuery.ajax({
                type: "POST",
                url: "./../../wp-content/plugins/teacher-available-time/adding-form-handling.php",
                dataType:"text",
                data:dane,
                success: function(response){
                    console.log(response+" "+response.length);
                   if(response == "Colliding")
                   alert("Wrong date");
                   else
                    location.reload();
                }
            })
        });
        jQuery('#tat-del-form').submit(
        
            function(e){
                e.preventDefault();
                
                const dane = jQuery('#tat-del-form').serialize();
                jQuery.ajax({
                    type: "POST",
                    url: "./../../wp-content/plugins/teacher-available-time/deleting-form-handling.php",
                    dataType:"text",
                    data:dane,
                    success: function(response){
                        location.reload();
                    }
                })
            });
            jQuery(document).on('input','#start-slider',function()
            {
                
                var c = parseInt(jQuery(this).val())+1;
                
                jQuery('#start-slider-value').text('Godzina rozpoczęcia: '+jQuery(this).val());
                if(parseInt(jQuery(this).val())>=parseInt(jQuery('#end-slider').val()))
                {
                    
                    jQuery('#end-slider').val(c);
                    jQuery('#end-slider-value').text('Godzina rozpoczęcia: '+c);
                }
            });
            jQuery(document).on('input','#end-slider',function()
            {
                var c = parseInt(jQuery(this).val())-1;
                jQuery('#end-slider-value').text('Godzina zakończenia: '+jQuery(this).val());
                if(parseInt(jQuery(this).val())<=parseInt(jQuery('#start-slider').val()))
                {
                    jQuery('#start-slider').val(c);
                    jQuery('#start-slider-value').text('Godzina rozpoczęcia: '+c);
                }
            });
});
