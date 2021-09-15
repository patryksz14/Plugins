<?php
require_once('../../../wp-config.php');

$userId = $_POST['user-id'];
$date = $_POST['time'];
$startHour = strlen($_POST['start-slider']) > 1 ? $_POST['start-slider'] : '0'.$_POST['start-slider'];
$endHour = strlen($_POST['end-slider']) > 1 ? $_POST['end-slider'] : '0'.$_POST['end-slider'];
$startDate1 = $date.' '.$startHour.':00:00';
$endDate1 = $date.' '.$endHour.':00:00';

global $wpdb;
$findTeachersHours = $wpdb->get_results("SELECT * FROM wp_teachers_available_hours WHERE user_id = $userId ", ARRAY_A);
$ifColliding = false;
foreach($findTeachersHours as $val)
{
    $startValDate = strtotime($val['start']);
    $endValDate = strtotime($val['end']);
    $startDate = strtotime($startDate1);
    $endDate = strtotime($endDate1);
    
    if((($endDate >= $startValDate) && ($endValDate >= $startDate)))
    {
        $ifColliding = true;
    }
}
if(!$ifColliding)
{
    $table = "wp_teachers_available_hours";
    $data = array('user_id' => $userId, 'start' => $startDate1, 'end' => $endDate1);

    $wpdb->insert($table, $data);
}
else echo "Colliding";