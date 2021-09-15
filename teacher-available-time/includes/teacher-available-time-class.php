<?php
class Teacher_Available_Time extends WP_Widget {

/**
 * Register widget with WordPress.
 */
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
function __construct() {
    parent::__construct(
        'teacher_available_time_widget', // Base ID
        esc_html__( 'Teacher available time widget', 'tat_domain' ), // Name
        array( 'description' => esc_html__( 'Widget for adding available time of teachers', 'tat_domain' ), ) // Args
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
    global $wpdb;
    if(is_user_logged_in())
        $id = get_current_user_id();
    else
        $id = 0;
    $findTeachersHours = $wpdb->get_results("SELECT * FROM wp_teachers_available_hours WHERE user_id = $id", ARRAY_A);
    
    echo $args['before_widget'];
    $currDate = gmdate('Y-m-d');
    $widgetOutput='<div class="row"><div class="col-2"></div><div class="col-8"><form id="tat-add-form">';
    $date = new DateTime("now", new DateTimeZone('Europe/Warsaw') );
    $currDate = $date->format('Y-m-d');
    $widgetOutput.="<div class='form-group'><label for='time'>Choose a time for your appointment:
<br>
        <input type='date' id='time' class='form-control'
               name='time' value='{$currDate}'
               min='{$currDate}' max='2025-06-14'>
        </label>
        <div class='form-group'>
        <div id='start-slider-value'> </div>
        <input type='range' max=23 min=0 value=10 id='start-slider' name='start-slider' />
        </div>
        <div class='form-group' style='margin-top:10px'>
        <div id='end-slider-value'> </div>
        <input type='range' max=24 min=1 value=14 id='end-slider' name='end-slider' />
        </div>
        </div>
        
        <input type='hidden' name='user-id' id='user-id' value={$id}>
        <div class='form-group'>
        <input type='submit' class='btn btn-primary' value='Dodaj datę'></div>";
        $widgetOutput.='</form></div></div>';
        $widgetOutput.='<div class="row"><div class="col-2"></div><div class="col-8"><form id="tat-del-form">';
        if(count($findTeachersHours)>0)
        {
            $widgetOutput .= "<div class='form-group'><select class='form-control' id='date-id' name='date-id' class='form-control'>";
            foreach($findTeachersHours as $value)
            {
                $widgetOutput .= "<option value={$value['id']}>{$value['start']}-{$value['end']}</option>";
            }
            $widgetOutput .= "</select></div>
            
            <input type='submit' class='btn btn-primary' value='Usuń wolny termin'>";
            $widgetOutput.='</form></div></div>';
        }  
        if(is_user_logged_in())
            {
                
                $user = wp_get_current_user();
                $roles = ( array ) $user->roles;
                
                if(!in_array('um_teacher',$roles))
                {
                    $widgetOutput='';
                }
            }
            
    echo $widgetOutput;
    
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