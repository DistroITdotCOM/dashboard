<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Record extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function paiton() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->paiton($input);
    }

    function pacitan() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->pacitan($input);
    }

    function tanjung_awar_awar() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->tanjung_awar_awar($input);
    }

    function rembang() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->rembang($input);
    }

    function indramayu() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->indramayu($input);
    }

    function muara_tawar() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->muara_tawar($input);
    }

    function muara_karang() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->muara_karang($input);
    }

    function duri() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->duri($input);
    }

    function amurang() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->amurang($input);
    }

    function asahan() {
        $input = json_decode($this->input->post('input'), true);
//        $this->Record_model->asahan($input);
    }

}
