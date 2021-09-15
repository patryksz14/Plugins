<?php 
class Custom_Likes_Widget extends WP_Widget {

/**
 * Register widget with WordPress.
 */

function __construct() {
    parent::__construct(
        'custom_likes_widget', // Base ID
        esc_html__( 'Custom Likes Plugin', 'clp_domain' ), // Name
        array( 'description' => esc_html__( 'Widget for liking teachers', 'clp_domain' ), ) // Args
    );
}

/**
 * Front-end display of widget.
 *
 * @see WP_Widget::widget()
 *
 * @param array $args     Widget arguments.
 * @param array $instance Saved values from database.
 */
public function widget( $args, $instance ) {
    echo $args['before_widget'];
    $output = '';
    if(is_user_logged_in())
        $id = get_current_user_id();
    else
        $id = 0;
    if($id!=0)
    {
        $user_meta=get_userdata($id);
        
        $user_roles=$user_meta->roles;
        if(in_array('student', $user_roles))
        {
            
            $uri = substr($_SERVER['REQUEST_URI'], 0, strlen($_SERVER['REQUEST_URI'])-1);
            $uriArray = explode('/', $uri);
            $userName = $uriArray[count($uriArray)-1];
            global $wpdb;
            $userArray = $wpdb->get_results("SELECT ID FROM wp_users WHERE user_login = '$userName'", ARRAY_A);
            $teacherId = $userArray[0]['ID'];
            $user_meta=get_userdata($teacherId);
            $user_roles=$user_meta->roles;
            
            if(in_array('um_teacher', $user_roles))
            {
                $likes = $wpdb->get_results("SELECT id FROM wp_likes WHERE user_id = $id and teacher_id = $teacherId", ARRAY_A);
                if(count($likes)>0)
                {
                    echo "<center><button userId={$id} teacherId={$teacherId} id='custom-like-button' class='btn btn-secondary'>♥</button></center>";
                }
                else
                {
                    echo "<center><button userId={$id} teacherId={$teacherId} id='custom-like-button' class='btn btn-primary'>♡</button></center>";
                }
            }
        }
    }
    echo $args['after_widget'];
}



/**
 * Back-end widget form.
 *
 * @see WP_Widget::form()
 *
 * @param array $instance Previously saved values from database.
 */
public function form( $instance ) {
}

/**
 * Sanitize widget form values as they are saved.
 *
 * @see WP_Widget::update()
 *
 * @param array $new_instance Values just sent to be saved.
 * @param array $old_instance Previously saved values from database.
 *
 * @return array Updated safe values to be saved.
 */
public function update( $new_instance, $old_instance ) {
}

}
?>
