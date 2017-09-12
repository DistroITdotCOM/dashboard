<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    function __construct() {
        parent::__construct();
//        $this->simpro = $this->load->database('simpro', true);
    }

    function simpro() {
        $indramayu = "SELECT sum(indramayu_mw) mw, DATE(indramayu_waktu) tanggal, count(indramayu_waktu) times FROM indramayu WHERE "
                . "indramayu_waktu between now() - INTERVAL 8 DAY and now() - INTERVAL 1 DAY group by tanggal;";
        $data['dashboard'] = $this->db->query($indramayu)->result();
        return ($data);
    }

    function project() {
        $simpro = "SELECT * FROM project";
        $data['simpro'] = $this->simpro->query($simpro)->result();
        return ($data);
    }

}
