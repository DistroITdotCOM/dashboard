<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dom extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('simplehtmldom/simple_html_dom.php');
    }

    function paiton() {
        if (is_connected('10.7.40.27') === TRUE) {
            $paiton_mw = explode(' ', file_get_html('http://10.7.40.27/Operation.html')->find('td.v', 2)->plaintext);
            $paiton_mvar = explode(' ', file_get_html('http://10.7.40.27/Operation.html')->find('td.v', 25)->plaintext);
            $array[0]['MW'] = round($paiton_mw[0] / 1000, 3);
            $array[0]['MVAR'] = round($paiton_mvar[0] / 1000, 3);
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function pacitan() {
        if (is_connected('10.7.32.18') === TRUE) {
            $pacitan_mw = explode(' ', file_get_html('http://10.7.32.18/Operation.html')->find('td.v', 2)->plaintext);
            $pacitan_mvar = explode(' ', file_get_html('http://10.7.32.18/Operation.html')->find('td.v', 25)->plaintext);
            $array[0]['MW'] = round($pacitan_mw[0] / 1000, 3);
            $array[0]['MVAR'] = round($pacitan_mvar[0] / 1000, 3);
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        if (is_connected('10.7.32.19') === TRUE) {
            $pacitan_mw = explode(' ', file_get_html('http://10.7.32.19/Operation.html')->find('td.v', 2)->plaintext);
            $pacitan_mvar = explode(' ', file_get_html('http://10.7.32.19/Operation.html')->find('td.v', 25)->plaintext);
            $array[1]['MW'] = round($pacitan_mw[0] / 1000, 3);
            $array[1]['MVAR'] = round($pacitan_mvar[0] / 1000, 3);
        } else {
            $array[1]['MW'] = -1;
            $array[1]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function tanjung_awar_awar() {
        if (is_connected('10.7.29.60') === TRUE) {
            $tanjung_awar_awar_mw = explode(' ', file_get_html('http://10.7.29.60/Operation.html')->find('td.v', 2)->plaintext);
            $tanjung_awar_awar_mvar = explode(' ', file_get_html('http://10.7.29.60/Operation.html')->find('td.v', 25)->plaintext);
            $array[0]['MW'] = round($tanjung_awar_awar_mw[0] / 1000, 3);
            $array[0]['MVAR'] = round($tanjung_awar_awar_mvar[0] / 1000, 3);
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        if (is_connected('10.7.29.61') === TRUE) {
            $tanjung_awar_awar_mw = explode(' ', file_get_html('http://10.7.29.61/Operation.html')->find('td.v', 2)->plaintext);
            $tanjung_awar_awar_mvar = explode(' ', file_get_html('http://10.7.29.61/Operation.html')->find('td.v', 25)->plaintext);
            $array[1]['MW'] = round($tanjung_awar_awar_mw[0] / 1000, 3);
            $array[1]['MVAR'] = round($tanjung_awar_awar_mvar[0] / 1000, 3);
        } else {
            $array[1]['MW'] = -1;
            $array[1]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function rembang() {
        if (is_connected('10.50.45.18') === TRUE) {
            $rembang_mw = explode(' ', file_get_html('http://10.50.45.18/')->find('td.v', 2)->plaintext);
            $rembang_mvar = explode(' ', file_get_html('http://10.50.45.18/')->find('td.v', 25)->plaintext);
            $array[0]['MW'] = round($rembang_mw[0] / 1000, 3);
            $array[0]['MVAR'] = round($rembang_mvar[0] / 1000, 3);
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        if (is_connected('10.50.45.19') === TRUE) {
            $rembang_mw = explode(' ', file_get_html('http://10.50.45.19/')->find('td.v', 2)->plaintext);
            $rembang_mvar = explode(' ', file_get_html('http://10.50.45.19/')->find('td.v', 25)->plaintext);
            $array[1]['MW'] = round($rembang_mw[0] / 1000, 3);
            $array[1]['MVAR'] = round($rembang_mvar[0] / 1000, 3);
        } else {
            $array[1]['MW'] = -1;
            $array[1]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function indramayu() {
        if (is_connected('172.17.19.208') === TRUE) {
            $indramayu_mw = explode(' ', file_get_html('http://172.17.19.208/Operation.html')->find('td.v', 2)->plaintext);
            $indramayu_mvar = explode(' ', file_get_html('http://172.17.19.208/Operation.html')->find('td.v', 25)->plaintext);
            $array[0]['MW'] = round($indramayu_mw[0] / 1000, 3);
            $array[0]['MVAR'] = round($indramayu_mvar[0] / 1000, 3);
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        if (is_connected('172.17.19.209') === TRUE) {
            $indramayu_mw = explode(' ', file_get_html('http://172.17.19.209/Operation.html')->find('td.v', 2)->plaintext);
            $indramayu_mvar = explode(' ', file_get_html('http://172.17.19.209/Operation.html')->find('td.v', 25)->plaintext);
            $array[1]['MW'] = round($indramayu_mw[0] / 1000, 3);
            $array[1]['MVAR'] = round($indramayu_mvar[0] / 1000, 3);
        } else {
            $array[1]['MW'] = -1;
            $array[1]['MVAR'] = -1;
        }
        if (is_connected('172.17.19.210') === TRUE) {
            $indramayu_mw = explode(' ', file_get_html('http://172.17.19.210/Operation.html')->find('td.v', 2)->plaintext);
            $indramayu_mvar = explode(' ', file_get_html('http://172.17.19.210/Operation.html')->find('td.v', 25)->plaintext);
            $array[2]['MW'] = round($indramayu_mw[0] / 1000, 3);
            $array[2]['MVAR'] = round($indramayu_mvar[0] / 1000, 3);
        } else {
            $array[2]['MW'] = -1;
            $array[2]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function muara_tawar() {
        if (is_connected('10.7.250.142') === TRUE) {
            $muara_tawar_mw = explode(' ', file_get_html('http://10.7.250.142/Operation.html')->find('td.v', 2)->plaintext);
            $muara_tawar_mvar = explode(' ', file_get_html('http://10.7.250.142/Operation.html')->find('td.v', 25)->plaintext);
            $array[0]['MW'] = round($muara_tawar_mw[0] / 1000, 3);
            $array[0]['MVAR'] = round($muara_tawar_mvar[0] / 1000, 3);
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        if (is_connected('10.7.250.143') === TRUE) {
            $muara_tawar_mw = explode(' ', file_get_html('http://10.7.250.143/Operation.html')->find('td.v', 2)->plaintext);
            $muara_tawar_mvar = explode(' ', file_get_html('http://10.7.250.143/Operation.html')->find('td.v', 25)->plaintext);
            $array[1]['MW'] = round($muara_tawar_mw[0] / 1000, 3);
            $array[1]['MVAR'] = round($muara_tawar_mvar[0] / 1000, 3);
        } else {
            $array[1]['MW'] = -1;
            $array[1]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function muara_karang() {
        if (is_connected('10.7.250.172') === TRUE) {
            $muara_karang_mw = explode(' ', file_get_html('http://10.7.250.172/Operation.html')->find('td.v', 2)->plaintext);
            $muara_karang_mvar = explode(' ', file_get_html('http://10.7.250.172/Operation.html')->find('td.v', 25)->plaintext);
            $array[0]['MW'] = round($muara_karang_mw[0] / 1000, 3);
            $array[0]['MVAR'] = round($muara_karang_mvar[0] / 1000, 3);
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        if (is_connected('10.7.250.173') === TRUE) {
            $muara_karang_mw = explode(' ', file_get_html('http://10.7.250.173/Operation.html')->find('td.v', 2)->plaintext);
            $muara_karang_mvar = explode(' ', file_get_html('http://10.7.250.173/Operation.html')->find('td.v', 25)->plaintext);
            $array[1]['MW'] = round($muara_karang_mw[0] / 1000, 3);
            $array[1]['MVAR'] = round($muara_karang_mvar[0] / 1000, 3);
        } else {
            $array[1]['MW'] = -1;
            $array[1]['MVAR'] = -1;
        }
        if (is_connected('10.7.250.177') === TRUE) {
            $muara_karang_mw = explode(' ', file_get_html('http://10.7.250.177/Operation.html')->find('td.v', 2)->plaintext);
            $muara_karang_mvar = explode(' ', file_get_html('http://10.7.250.177/Operation.html')->find('td.v', 25)->plaintext);
            $array[2]['MW'] = round($muara_karang_mw[0] / 1000, 3);
            $array[2]['MVAR'] = round($muara_karang_mvar[0] / 1000, 3);
        } else {
            $array[2]['MW'] = -1;
            $array[2]['MVAR'] = -1;
        }
        if (is_connected('10.7.250.178') === TRUE) {
            $muara_karang_mw = explode(' ', file_get_html('http://10.7.250.178/Operation.html')->find('td.v', 2)->plaintext);
            $muara_karang_mvar = explode(' ', file_get_html('http://10.7.250.178/Operation.html')->find('td.v', 25)->plaintext);
            $array[3]['MW'] = round($muara_karang_mw[0] / 1000, 3);
            $array[3]['MVAR'] = round($muara_karang_mvar[0] / 1000, 3);
        } else {
            $array[3]['MW'] = -1;
            $array[3]['MVAR'] = -1;
        }
        if (is_connected('10.7.250.179') === TRUE) {
            $muara_karang_mw = explode(' ', file_get_html('http://10.7.250.179/Operation.html')->find('td.v', 2)->plaintext);
            $muara_karang_mvar = explode(' ', file_get_html('http://10.7.250.179/Operation.html')->find('td.v', 25)->plaintext);
            $array[4]['MW'] = round($muara_karang_mw[0] / 1000, 3);
            $array[4]['MVAR'] = round($muara_karang_mvar[0] / 1000, 3);
        } else {
            $array[4]['MW'] = -1;
            $array[4]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function duri() {
        if (is_connected('10.7.39.30') === TRUE) {
            $array[0]['MW'] = floatval(trim(file_get_html('http://10.7.39.30/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=17&lpid=AI009')->plaintext));
            $array[0]['MVAR'] = floatval(trim(file_get_html('http://10.7.39.30/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=17&lpid=AI010')->plaintext));
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function amurang() {
        if (is_connected('10.7.48.32') === TRUE) {
            $array[0]['MW'] = floatval(trim(file_get_html('http://10.7.48.32/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=3&lpid=AI009')->plaintext));
            $array[0]['MVAR'] = floatval(trim(file_get_html('http://10.7.48.32/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=3&lpid=AI010')->plaintext));
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function asahan() {
        if (is_connected('10.7.47.30') === TRUE) {
            $array[0]['MW'] = floatval(trim(file_get_html('http://10.7.47.30/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=17&lpid=AI009')->plaintext));
            $array[0]['MVAR'] = floatval(trim(file_get_html('http://10.7.47.30/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=17&lpid=AI010')->plaintext));
        } else {
            $array[0]['MW'] = -1;
            $array[0]['MVAR'] = -1;
        }
        if (is_connected('10.7.47.30') === TRUE) {
            $array[1]['MW'] = floatval(trim(file_get_html('http://10.7.47.30/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=17&lpid=AI025')->plaintext));
            $array[1]['MVAR'] = floatval(trim(file_get_html('http://10.7.47.30/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=17&lpid=AI026')->plaintext));
        } else {
            $array[1]['MW'] = -1;
            $array[1]['MVAR'] = -1;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

}
