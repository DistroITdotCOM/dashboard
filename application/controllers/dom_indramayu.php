<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dom_indramayu extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('simplehtmldom/simple_html_dom.php');
    }

    function index() {
        if (is_connected('172.17.19.208') === TRUE) {
            $array[0]['MW'] = round(explode(' ', file_get_html('http://172.17.19.208/Operation.html')->find('td.v', 2)->plaintext)[0] / 1000, 3);
            $array[0]['MVAR'] = round(explode(' ', file_get_html('http://172.17.19.208/Operation.html')->find('td.v', 25)->plaintext)[0] / 1000, 3);
        } else {
            $array[0]['MW'] = false;
            $array[0]['MVAR'] = false;
        }
        if (is_connected('172.17.19.209') === TRUE) {
            $array[1]['MW'] = round(explode(' ', file_get_html('http://172.17.19.209/Operation.html')->find('td.v', 2)->plaintext)[0] / 1000, 3);
            $array[1]['MVAR'] = round(explode(' ', file_get_html('http://172.17.19.209/Operation.html')->find('td.v', 25)->plaintext)[0] / 1000, 3);
        } else {
            $array[1]['MW'] = false;
            $array[1]['MVAR'] = false;
        }
        if (is_connected('172.17.19.210') === TRUE) {
            $array[2]['MW'] = round(explode(' ', file_get_html('http://172.17.19.210/Operation.html')->find('td.v', 2)->plaintext)[0] / 1000, 3);
            $array[2]['MVAR'] = round(explode(' ', file_get_html('http://172.17.19.210/Operation.html')->find('td.v', 25)->plaintext)[0] / 1000, 3);
        } else {
            $array[2]['MW'] = false;
            $array[2]['MVAR'] = false;
        }
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function dashboard() {
        $array = $this->Dom_indramayu_model->dashboard();
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    function add() {
        $input = json_decode($this->input->post('input'), true);
        $this->Dom_indramayu_model->add($input);
    }

    function unit() {
        $temp = $this->Dom_indramayu_model->unit();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->pengukuran_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->pengukuran_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row2'] as $key => $value) {
            if ($temp['sum2'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->pengukuran_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->pengukuran_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row3'] as $key => $value) {
            if ($temp['sum3'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->pengukuran_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->pengukuran_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

}
