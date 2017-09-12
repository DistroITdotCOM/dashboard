<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Slj extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function asahan() {
        if (strpos(exec('ping 10.7.47.1'), 'Minimum')) {
            $this->Slj_model->asahan(date("d-m-Y H:i:s"), 'up');
            $array[0]['status'] = 'connected';
            echo json_encode($array);
        } else {
            $this->Slj_model->asahan(date("d-m-Y H:i:s"), 'down');
            $array[0]['status'] = 'disconnected';
            echo json_encode($array);
        }
    }

    function bangka() {
        if (strpos(exec('ping 10.7.38.1'), 'Minimum')) {
            $this->Slj_model->bangka(date("d-m-Y H:i:s"), 'up');
            $array[0]['status'] = 'connected';
            echo json_encode($array);
        } else {
            $this->Slj_model->bangka(date("d-m-Y H:i:s"), 'down');
            $array[0]['status'] = 'disconnected';
            echo json_encode($array);
        }
    }

    function baca() {
        $this->Slj_model->baca();
    }

}
