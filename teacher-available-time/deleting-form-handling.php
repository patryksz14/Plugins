<?php
require_once('../../../wp-config.php');
global $wpdb;
$wpdb->delete('wp_teachers_available_hours', array('id' => $_POST['date-id']));