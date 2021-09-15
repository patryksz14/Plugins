<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

$args = array(  
    'role' => 'um_teacher',
    // 'meta_key' => 'languages',
    // 'meta_value' => $_post['language'],
    // 'compare' => 'LIKE'
    // 'meta_query'	=> array(
	// 	'relation'		=> 'AND',
	// 	array(
	// 		'key'		=> 'language',
	// 		'value'		=>  $_post["language"],
	// 		'compare'	=> 'like'
	// 	),
	// 	array(
	// 		'key'		=> 'country',
	// 		'value'		=> $_post["country"],
	// 		'compare'	=> 'like'
	// 	)
	// )
);
$toReturn="";
$query = new WP_User_Query( $args ); 
$users = $query->get_results();

foreach($users as $user) {
    
    if($_POST['country']!="Wszystkie")
    {
        if($_POST['country']==$user->kraj)
        {
            if(in_array($_POST['language'],$user->jezyki))
            {
                if($_POST['price'] >= $user->cena)
                {
                    
                    if(in_array($_POST['category'],$user->kategoria))
                    {
                        
                        if($_POST['type']=='both' || $user->type == "Obie opcje" || $_POST['type']==$user->type)
                        {
                            $native = $user->native_speaker == 1 ? 'on' : 'off';
                            
                            $isNative = $_POST['native'] == 'on' ? 'on' : 'off';
                            
                            if($isNative==$native)
                            {
                                $toReturn .=  $user->display_name;
                                $toReturn .= ";";
                                $toReturn .=  get_author_posts_url( $user->ID );
                                $toReturn .= ";";
                                
                                $toReturn .= $user->cena;
                                $toReturn .= ";";
                                $toReturn .=$user->kraj;
                                $toReturn .= ";";
                                $toReturn .=$user->opis;
                                $toReturn .= ";";
                                
                                $toReturn .=$user->t_video;
                                $toReturn .= ";";
                                $toReturn .=  get_simple_local_avatar( $user->ID );
                                
                                $toReturn .= "@";
                            }
                        }
                    }
                }
            
            }
        }
    }
    else
    {
        
        if(in_array($_POST['language'],$user->jezyki))
        {
                if($_POST['price'] >= $user->cena)
                {
                   
                    if(in_array($_POST['category'],$user->kategoria))
                    {
                      
                        if($_POST['type']=='both' || $user->type == "Obie opcje" || $_POST['type']==$user->type)
                        {
                            $native = $user->native_speaker == 1 ? 'on' : 'off';
                            
                            $isNative = $_POST['native'] == 'on' ? 'on' : 'off';
                            
                            if($isNative==$native)
                            {
                               
                                $toReturn .=  $user->display_name;
                                $toReturn .= ";";
                                $toReturn .=  get_author_posts_url($user->ID );
                                $toReturn .= ";";
                                
                                $toReturn .= $user->cena;
                                $toReturn .= ";";
                                $toReturn .=$user->kraj;
                                $toReturn .= ";";
                                $toReturn .=$user->opis;
                                $toReturn .= ";";
                                
                                $toReturn .=$user->t_video;
                                $toReturn .= ";";
                                $toReturn .=  get_simple_local_avatar( $user->ID );
                                $toReturn .= "@";
                            }
                        }
                    }
                }
            
        }
    }
    
     // echo $user->user_name;
}
echo $toReturn;


