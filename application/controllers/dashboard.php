<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function _remap($method) {
        $param_offset = 2;
        if (!method_exists($this, $method)) {
            $param_offset = 1;
            $method = 'map';
        }
        $params = array_slice($this->uri->rsegment_array(), $param_offset);
        call_user_func_array(array($this, $method), $params);
    }

    function record() {
        echo preg_replace('/\s\s+/', '', $this->load->view('dashboard/record_view', NULL, TRUE));
    }

    function server() {
        echo preg_replace('/\s\s+/', '', $this->load->view('dashboard/server_view', NULL, TRUE));
    }

    function view() {
        $data['component'] = 'dashboard/view_view';
        $data['rs_component'] = $this->Dashboard_model->simpro();
        $data['notification'] = $this->session->flashdata('notification');
        $data['js'] = array(
            'paiton.js',
            'pacitan.js',
            'tanjung_awar-awar.js',
            'rembang.js',
            'indramayu.js',
            'muara_tawar.js',
            'muara_karang.js',
            'duri.js',
            'amurang.js',
            'asahan.js'
        );
        $param['title'] = 'Dashboard';
        $param['arrCss'] = array(
            '../lib/devoops/plugins/bootstrap/bootstrap.css',
            '../lib/devoops/css/style.css'
        );
        $param['arrJs'] = array();
        $param['arrLib'] = array(
            'jquery-1.11.0.js',
            'Highcharts/js/highcharts.js',
            'Highcharts/js/modules/exporting.js',
            'devoops/plugins/bootstrap/bootstrap.js',
            'devoops/plugins/jquery-ui/jquery-ui.js',
            'devoops/plugins/datatables/jquery.dataTables.js',
            'devoops/plugins/datatables/ZeroClipboard.js',
            'devoops/plugins/datatables/TableTools.js',
            'devoops/plugins/datatables/dataTables.bootstrap.js',
            'devoops/js/devoops.js'
        );
        $this->load->library('Header_lib', $param);
        $data['header'] = $this->header_lib->loadHeader();
//        echo preg_replace('/\s\s+/', '', $this->load->view('template_view', $data, TRUE));
        $this->load->view('template_view', $data);
    }

    function map() {
        $data['component'] = 'dashboard/map_view';
        $data['rs_component'] = '';
        $data['notification'] = $this->session->flashdata('notification');
        $data['js'] = array();
        $param['title'] = 'Map';
        $param['arrCss'] = array(
            '../lib/devoops/plugins/bootstrap/bootstrap.css',
            '../lib/devoops/css/style.css'
        );
        $param['arrJs'] = array();
        $param['arrLib'] = array(
            'jquery-1.11.0.js',
            'devoops/plugins/bootstrap/bootstrap.js',
            'devoops/plugins/jquery-ui/jquery-ui.js',
            'devoops/js/devoops.js'
        );
        $this->load->library('Header_lib', $param);
        $data['header'] = $this->header_lib->loadHeader();
        echo preg_replace('/\s\s+/', '', $this->load->view('template_view', $data, TRUE));
    }

    function real_time() {
        $data['component'] = 'dashboard/real-time_view';
        $data['rs_component'] = '';
        $data['notification'] = $this->session->flashdata('notification');
        $data['js'] = array(
            'paiton.js',
            'pacitan.js',
            'tanjung_awar-awar.js',
            'rembang.js',
            'indramayu.js',
            'muara_tawar.js',
            'muara_karang.js',
            'duri.js',
            'amurang.js',
            'asahan.js'
        );
        $param['title'] = 'Real time';
        $param['arrCss'] = array(
            '../lib/devoops/plugins/bootstrap/bootstrap.css',
            '../lib/devoops/css/style.css'
        );
        $param['arrJs'] = array();
        $param['arrLib'] = array(
            'jquery-1.11.0.js',
            'Highcharts/js/highcharts.js',
            'Highcharts/js/modules/exporting.js',
            'devoops/plugins/bootstrap/bootstrap.js',
            'devoops/plugins/jquery-ui/jquery-ui.js',
            'devoops/js/devoops.js'
        );
        $this->load->library('Header_lib', $param);
        $data['header'] = $this->header_lib->loadHeader();
        echo preg_replace('/\s\s+/', '', $this->load->view('template_view', $data, TRUE));
    }

    function project() {
        $data['component'] = 'dashboard/project_view';
        $data['rs_component'] = $this->Dashboard_model->project();
        $data['notification'] = $this->session->flashdata('notification');
        $data['js'] = array();
        $param['title'] = 'Project';
        $param['arrCss'] = array(
            '../lib/devoops/plugins/bootstrap/bootstrap.css',
            '../lib/devoops/css/style.css'
        );
        $param['arrJs'] = array();
        $param['arrLib'] = array(
            'jquery-1.11.0.js',
            'devoops/plugins/bootstrap/bootstrap.js',
            'devoops/plugins/jquery-ui/jquery-ui.js',
            'devoops/js/devoops.js'
        );
        $this->load->library('Header_lib', $param);
        $data['header'] = $this->header_lib->loadHeader();
        echo preg_replace('/\s\s+/', '', $this->load->view('template_view', $data, TRUE));
    }

}
