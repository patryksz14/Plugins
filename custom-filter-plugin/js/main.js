jQuery(document).ready(function(){
    jQuery('span.select2-container').css('width','20%');
    jQuery('#price').on('input',function(e)
    {
        
        jQuery('#price-container').text(this.value + " zł");
    });
    
    jQuery('#cfp-form').submit(
        
            function(e){
                e.preventDefault();
                
                const dane = jQuery('#cfp-form').serialize();
                jQuery.ajax({
                    type: "POST",
                    url: "./../wp-content/plugins/custom-filter-plugin/form-handling.php",
                    dataType:"text",
                    data:dane,
                    success: function(response){
                        console.log(response);
                        if(response.length>0)
                            response = response.substr(0,response.length-1);
                        

                        if(typeof(response) === 'Array')
                        {
                            response.forEach(element => {
                                console.log(element);
                            });
                        }
                        else
                        {
                            
                            var array = response.split("@");
                            console.log(array.length);
                            console.log(array.toString());
                            if(array.length==0)
                            {
                                jQuery('#cfp-content').html("No teachers found");
                            }
                            else if(array.length==1)
                            {
                                if(array[0]==="")
                                    jQuery('#cfp-content').html("No teachers found");
                                else
                                {
                                        var html="";
        
                                        array.forEach(element => {
                                           
                                            var teacherArray = element.split(';');
                                            
                                            var teacherToLink = teacherArray[0].toLowerCase();
                                            teacherToLink = teacherToLink.replace(' ','-');
                                            var nameAndLastname = teacherArray[0].split(" ");
                                            html+=`<div class="row border rounded border-success"><div class="col-5" style="position:relative"><p style="font-size: 3.5vh;text-align: center;margin: 0;
                                            position: absolute;
                                            top: 20%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);">
                                            <a href='${teacherArray[1]}' style="text-align: center;">${nameAndLastname[0]}<br><br> ${nameAndLastname[1]}</a></p>
                                            <p style="font-size: 2vh;text-align: center;margin: 0;
                                            position: absolute;
                                            top: 50%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);">Kraj: ${teacherArray[3]}</p>
                                            <p style="font-size: 2vh;text-align: center;margin: 0;
                                            position: absolute;
                                            top: 70%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);">Cena: ${teacherArray[2]} zł</p></div>
                                            <div class="col-3">${teacherArray[6]}"/>
                                            </div>
                                            <div class="col-4">
                                            <ul class="nav nav-tabs" id="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" onclick="a1_click('${teacherArray[4]}')" href="#teacherdescription">Opis</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" onclick="a2_click('${teacherArray[5]}')" href="#teachervideo">Video</a>
                                                </li>
                                                
                                                </ul>
                                                <div class="tab-content">
                                                <div id="teacher-content"><p style="font-size: 1.8vh">${teacherArray[4]}</p></div>
                                            </div></div></div>`;
                                        
                                        
                                        });
                                        jQuery('#cfp-content').html(html);
                                }
                                
                            }
                            else
                                {
                                        var html="";
        
                                        array.forEach(element => {
                                            var teacherArray = element.split(';');
                                            var teacherToLink = teacherArray[0].toLowerCase();
                                            teacherToLink = teacherToLink.replace(' ','-');
                                            var nameAndLastname = teacherArray[0].split(" ");
                                            html+=`<div class="row border rounded border-success"><div class="col-5" style="position:relative"><p style="font-size: 3.5vh;text-align: center;margin: 0;
                                            position: absolute;
                                            top: 20%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);">
                                            <a href='${teacherArray[1]}' style="text-align: center;">${nameAndLastname[0]}<br><br> ${nameAndLastname[1]}</a></p>
                                            <p style="font-size: 2vh;text-align: center;margin: 0;
                                            position: absolute;
                                            top: 50%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);">Kraj: ${teacherArray[3]}</p>
                                            <p style="font-size: 2vh;text-align: center;margin: 0;
                                            position: absolute;
                                            top: 70%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);">Cena: ${teacherArray[2]} zł</p></div>
                                            <div class="col-3">${teacherArray[6]}"/>
                                            </div>
                                            <div class="col-4">
                                            <ul class="nav nav-tabs" id="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" onclick="a1_click('${teacherArray[4]}')" href="#teacherdescription">Opis</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" onclick="a2_click('${teacherArray[5]}')" href="#teachervideo">Video</a>
                                                </li>
                                                
                                                </ul>
                                                <div class="tab-content">
                                                <div id="teacher-content"><p style="font-size: 1.8vh">${teacherArray[4]}</p></div>
                                            </div></div></div>`;
                                        
                                        
                                        });
                                        jQuery('#cfp-content').html(html);
                                }
                            
                        } 
                    },
                    error: function(xhr, status, error) {
                        
                        
                      
                    },
                    finally: function()
                    {
                        console.log('end');
                    }
                  });
            }
        );
        
        
        });

        
        // function a1_click()
        // {
        //     jQuery('#teacherdescription').addClass('active');
        //     jQuery('#teacherdescription').addClass('show');
            
        //     jQuery('#teachervideo').removeClass('active show');
        // }
        // function a2_click(link)
        // {
        //     jQuery('#teacherdescription').removeClass('active show');
        //     jQuery('#teachervideo').addClass('show');
        //     jQuery('#teachervideo').addClass('active');
        // }
        
        function a1_click(desc)
        {
            jQuery('#teacher-content').html(`<p style="font-size: 1.8vh">${desc}</p>`);
        }
        function a2_click(link)
        {
            jQuery('#teacher-content').html(`<iframe height="50%" src="${link}"></iframe>`);
        }