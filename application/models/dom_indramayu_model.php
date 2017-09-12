<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dom_indramayu_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function dashboard() {
        $sql = "SELECT sum(pengukuran_mw) mw, DATE(pengukuran_waktu) tanggal, count(pengukuran_waktu) times FROM pengukuran WHERE "
                . "pengukuran_waktu between now() - INTERVAL 8 DAY and now() - INTERVAL 1 DAY group by tanggal;";
        $data['dashboard'] = $this->db->query($sql)->result();
        return ($data);
    }

    function add($input) {
        foreach ($input as $key => $value) {
            $user = "INSERT INTO pengukuran (
            unit_unit_id, 
            pengukuran_mw, 
            pengukuran_mvar,
            pengukuran_waktu) VALUES (
            {$this->db->escape($input[$key]['unit'])},
            {$this->db->escape($input[$key]['MW'])},
            {$this->db->escape($input[$key]['MVAR'])},
            {$this->db->escape($input[$key]['waktu'])})";
            $this->db->query($user);
        }
    }

    function unit() {
        $sql1 = "SELECT UNIX_TIMESTAMP(pengukuran_waktu)*1000 as waktu, pengukuran_mw FROM pengukuran WHERE unit_unit_id = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        $sql2 = "SELECT UNIX_TIMESTAMP(pengukuran_waktu)*1000 as waktu, pengukuran_mw FROM pengukuran WHERE unit_unit_id = 2";
        $data['row2'] = $this->db->query($sql2)->result();
        $data['sum2'] = $this->db->query($sql2)->num_rows;
        $sql3 = "SELECT UNIX_TIMESTAMP(pengukuran_waktu)*1000 as waktu, pengukuran_mw FROM pengukuran WHERE unit_unit_id = 3";
        $data['row3'] = $this->db->query($sql3)->result();
        $data['sum3'] = $this->db->query($sql3)->num_rows;
        return ($data);
    }

}
