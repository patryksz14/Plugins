<?php
class Show_Teacher_Available_Time extends WP_Widget {

/**
 * Register widget with WordPress.
 */
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
function __construct() {
    parent::__construct(
        'show_teacher_available_time_widget', // Base ID
        esc_html__( 'Show teacher available time widget', 'stat_domain' ), // Name
        array( 'description' => esc_html__( 'Widget for showing available time of teachers', 'stat_domain' ), ) // Args
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
    $output='';
    $uri = substr($_SERVER['REQUEST_URI'], 0, strlen($_SERVER['REQUEST_URI'])-1);
    
    if(strpos($uri, 'user'))
    {
    $uriArray = explode('/', $uri);
    $userName = $uriArray[count($uriArray)-1];
    $userArray = $wpdb->get_results("SELECT ID FROM wp_users WHERE user_login = '$userName'", ARRAY_A);
    $userId = $userArray[0]['ID'];
    $date = date("Y-m-d");
    $dayOfWeek = (int)date('w', strtotime($date));
    $dayOfWeek = $dayOfWeek == 0 ? 7 : $dayOfWeek;
    $daysToSub = $dayOfWeek - 1;
    $firstDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime("-{$daysToSub} day"))));
    $timeArray = [];
    $dateArray = [];
    array_push($dateArray, $firstDate);
    $timeArray[$firstDate] = [
        '0-5' => 0,
        '6-11' => 0,
        '12-17' => 0,
        '18-23' => 0
    ];
    $nextDate = date("Y-m-d", strtotime('+1 day', strToTime($firstDate)));
    array_push($dateArray, $nextDate);
    $timeArray[$nextDate] = [
        '0-5' => 0,
        '6-11' => 0,
        '12-17' => 0,
        '18-23' => 0
];
    for($i = 0; $i < 5; $i++)
    {
        $nextDate = date("Y-m-d", strtotime('+1 day', strToTime($nextDate)));
        array_push($dateArray, $nextDate);
        $timeArray[$nextDate] = [
            '0-5' => 0,
            '6-11' => 0,
            '12-17' => 0,
            '18-23' => 0
        ];
    }
    
    $firstDate.=" 00:00:00";
    $daysToAdd = 7 - $dayOfWeek;
    $lastDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime("+{$daysToAdd} day"))));
    $lastDate.=" 23:59:59";
    // $firstDate = str_replace("-", "", $firstDate);
    // $lastDate = str_replace("-", "", $lastDate);
    $output.='<div class="stat-container">
    <div class="row row-stat">
    <div class="col-5 col-stat"></div>
    <div class="col-1 col-stat">Pon</div>
    <div class="col-1 col-stat">Wt</div>
    <div class="col-1 col-stat">śr</div>
    <div class="col-1 col-stat">Czw</div>
    <div class="col-1 col-stat">Pt</div>
    <div class="col-1 col-stat">Sob</div>
    <div class="col-1 col-stat">Nie</div>
    </div>
    ';
    $availableTimeArray = $wpdb->get_results("SELECT * FROM wp_teachers_available_hours WHERE user_id = $userId and (start between '$firstDate' and '$lastDate')", ARRAY_A);
    
    foreach($availableTimeArray as $time)
    {
        $timeDate = substr($time['start'], 0, 10);
        $startingHour = (int)substr($time['start'], 11, 2);
        $endingHour = (int)substr($time['end'], 11, 2);
        for($i = $startingHour; $i <= $endingHour; $i++)
        {
            if($i >= 0 && $i <= 5)
            {
                $timeArray[$timeDate]['0-5'] = $timeArray[$timeDate]['0-5'] + 1;
            }
            else if($i >= 6 && $i <= 11)
            {
                $timeArray[$timeDate]['6-11'] = $timeArray[$timeDate]['6-11'] + 1;
            }
            else if($i >= 12 && $i <= 17)
            {
                $timeArray[$timeDate]['12-17'] = $timeArray[$timeDate]['12-17'] + 1;
            }
            else if($i >= 18 && $i <= 23)
            {
                $timeArray[$timeDate]['18-23'] = $timeArray[$timeDate]['18-23'] + 1;
            }
        }
    }
    $output.="<div class='stat-container'>
    <div class='row row-stat'>
    <div class='col-5 col-stat'>0-6</div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[0]]['0-5'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[1]]['0-5'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[2]]['0-5'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[3]]['0-5'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[4]]['0-5'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[5]]['0-5'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[6]]['0-5'])."'></div>
    </div>
    ";
    $output.="<div class='stat-container'>
    <div class='row row-stat'>
    <div class='col-5 col-stat'>6-12</div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[0]]['6-11'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[1]]['6-11'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[2]]['6-11'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[3]]['6-11'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[4]]['6-11'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[5]]['6-11'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[6]]['6-11'])."'></div>
    </div>
    ";
    $output.="<div class='stat-container'>
    <div class='row row-stat'>
    <div class='col-5 col-stat'>12-18</div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[0]]['12-17'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[1]]['12-17'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[2]]['12-17'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[3]]['12-17'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[4]]['12-17'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[5]]['12-17'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[6]]['12-17'])."'></div>
    </div>
    ";
    $output.="<div class='stat-container'>
    <div class='row row-stat'>
    <div class='col-5 col-stat'>18-24</div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[0]]['18-23'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[1]]['18-23'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[2]]['18-23'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[3]]['18-23'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[4]]['18-23'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[5]]['18-23'])."'></div>
    <div class='col-1 col-stat' style='background-color:".getColor($timeArray[$dateArray[6]]['18-23'])."'></div>
    </div>
    ";
    }
    echo $output;
    
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
function getColor($val)
{
    if($val >3) return '#ffa203';
    else if($val <= 3 && $val > 0 ) return '#ffc054';
    else return '#ffe6ba';
}