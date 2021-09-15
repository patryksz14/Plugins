<?php
require_once('../../../wp-config.php');
global $wpdb;
$table = "wp_likes";
$userId = $_POST['userId'];
$teacherId = $_POST['teacherId'];
$data = array('user_id' => $userId, 'teacher_id' => $teacherId);

if(count($wpdb->get_results("SELECT id FROM wp_likes WHERE user_id = $userId and teacher_id = $teacherId", ARRAY_A)) == 0)
{
    echo 'add';
    $wpdb->insert($table, $data);
}
else 
{
    echo 'del';
    $wpdb->delete($table, $data);
}