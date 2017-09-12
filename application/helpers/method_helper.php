<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('is_connected')) {

    function is_connected($ip = '') {
        $connected = @fsockopen($ip, 80);
        if ($connected) {
            $is_conn = true;
            fclose($connected);
        } else {
            $is_conn = false;
        }
        return $is_conn;
    }

}

if (!function_exists('date_convert')) {

    function date_convert($dateString, $Time = false) {
        $dateParse = strtotime($dateString);
        $month_arr = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        );
        $day_arr = Array(
            '0' => 'Minggu',
            '1' => 'Senin',
            '2' => 'Selasa',
            '3' => 'Rabu',
            '4' => 'Kamis',
            '5' => 'Jumat',
            '6' => 'Sabtu'
        );
        $day = @$day_arr[date('w', $dateParse)];
        $date = date('j', $dateParse);
        $month = @$month_arr[date('m', $dateParse)];
        $year = date('Y', $dateParse);
        $time = $Time ? date('g:i A', $dateParse) : '';
        return "$day, $date $month $year $time";
    }

}