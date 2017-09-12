<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function paiton() {
        $sql1 = "SELECT UNIX_TIMESTAMP(paiton_waktu)*1000 as waktu, paiton_mw FROM paiton WHERE paiton_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        return ($data);
    }

    function pacitan() {
        $sql1 = "SELECT UNIX_TIMESTAMP(pacitan_waktu)*1000 as waktu, pacitan_mw FROM pacitan WHERE pacitan_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        $sql2 = "SELECT UNIX_TIMESTAMP(pacitan_waktu)*1000 as waktu, pacitan_mw FROM pacitan WHERE pacitan_unit = 2";
        $data['row2'] = $this->db->query($sql2)->result();
        $data['sum2'] = $this->db->query($sql2)->num_rows;
        return ($data);
    }

    function tanjung_awar_awar() {
        $sql1 = "SELECT UNIX_TIMESTAMP(tanjung_awar_awar_waktu)*1000 as waktu, tanjung_awar_awar_mw FROM tanjung_awar_awar WHERE tanjung_awar_awar_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        $sql2 = "SELECT UNIX_TIMESTAMP(tanjung_awar_awar_waktu)*1000 as waktu, tanjung_awar_awar_mw FROM tanjung_awar_awar WHERE tanjung_awar_awar_unit = 2";
        $data['row2'] = $this->db->query($sql2)->result();
        $data['sum2'] = $this->db->query($sql2)->num_rows;
        return ($data);
    }

    function rembang() {
        $sql1 = "SELECT UNIX_TIMESTAMP(rembang_waktu)*1000 as waktu, rembang_mw FROM rembang WHERE rembang_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        $sql2 = "SELECT UNIX_TIMESTAMP(rembang_waktu)*1000 as waktu, rembang_mw FROM rembang WHERE rembang_unit = 2";
        $data['row2'] = $this->db->query($sql2)->result();
        $data['sum2'] = $this->db->query($sql2)->num_rows;
        return ($data);
    }

    function indramayu() {
        $sql1 = "SELECT UNIX_TIMESTAMP(indramayu_waktu)*1000 as waktu, indramayu_mw FROM indramayu WHERE indramayu_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        $sql2 = "SELECT UNIX_TIMESTAMP(indramayu_waktu)*1000 as waktu, indramayu_mw FROM indramayu WHERE indramayu_unit = 2";
        $data['row2'] = $this->db->query($sql2)->result();
        $data['sum2'] = $this->db->query($sql2)->num_rows;
        $sql3 = "SELECT UNIX_TIMESTAMP(indramayu_waktu)*1000 as waktu, indramayu_mw FROM indramayu WHERE indramayu_unit = 3";
        $data['row3'] = $this->db->query($sql3)->result();
        $data['sum3'] = $this->db->query($sql3)->num_rows;
        return ($data);
    }

    function muara_tawar() {
        $sql1 = "SELECT UNIX_TIMESTAMP(muara_tawar_waktu)*1000 as waktu, muara_tawar_mw FROM muara_tawar WHERE muara_tawar_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        $sql2 = "SELECT UNIX_TIMESTAMP(muara_tawar_waktu)*1000 as waktu, muara_tawar_mw FROM muara_tawar WHERE muara_tawar_unit = 2";
        $data['row2'] = $this->db->query($sql2)->result();
        $data['sum2'] = $this->db->query($sql2)->num_rows;
        return ($data);
    }

    function muara_karang() {
        $sql1 = "SELECT UNIX_TIMESTAMP(muara_karang_waktu)*1000 as waktu, muara_karang_mw FROM muara_karang WHERE muara_karang_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        $sql2 = "SELECT UNIX_TIMESTAMP(muara_karang_waktu)*1000 as waktu, muara_karang_mw FROM muara_karang WHERE muara_karang_unit = 2";
        $data['row2'] = $this->db->query($sql2)->result();
        $data['sum2'] = $this->db->query($sql2)->num_rows;
        $sql3 = "SELECT UNIX_TIMESTAMP(muara_karang_waktu)*1000 as waktu, muara_karang_mw FROM muara_karang WHERE muara_karang_unit = 3";
        $data['row3'] = $this->db->query($sql3)->result();
        $data['sum3'] = $this->db->query($sql3)->num_rows;
        $sql4 = "SELECT UNIX_TIMESTAMP(muara_karang_waktu)*1000 as waktu, muara_karang_mw FROM muara_karang WHERE muara_karang_unit = 4";
        $data['row4'] = $this->db->query($sql4)->result();
        $data['sum4'] = $this->db->query($sql4)->num_rows;
        $sql5 = "SELECT UNIX_TIMESTAMP(muara_karang_waktu)*1000 as waktu, muara_karang_mw FROM muara_karang WHERE muara_karang_unit = 5";
        $data['row5'] = $this->db->query($sql5)->result();
        $data['sum5'] = $this->db->query($sql5)->num_rows;
        return ($data);
    }

    function duri() {
        $sql1 = "SELECT UNIX_TIMESTAMP(duri_waktu)*1000 as waktu, duri_mw FROM duri WHERE duri_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        return ($data);
    }

    function amurang() {
        $sql1 = "SELECT UNIX_TIMESTAMP(amurang_waktu)*1000 as waktu, amurang_mw FROM amurang WHERE amurang_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        $sql2 = "SELECT UNIX_TIMESTAMP(amurang_waktu)*1000 as waktu, amurang_mw FROM amurang WHERE amurang_unit = 2";
        $data['row2'] = $this->db->query($sql2)->result();
        $data['sum2'] = $this->db->query($sql2)->num_rows;
        return ($data);
    }

    function asahan() {
        $sql1 = "SELECT UNIX_TIMESTAMP(asahan_waktu)*1000 as waktu, asahan_mw FROM asahan WHERE asahan_unit = 1";
        $data['row1'] = $this->db->query($sql1)->result();
        $data['sum1'] = $this->db->query($sql1)->num_rows;
        $sql2 = "SELECT UNIX_TIMESTAMP(asahan_waktu)*1000 as waktu, asahan_mw FROM asahan WHERE asahan_unit = 2";
        $data['row2'] = $this->db->query($sql2)->result();
        $data['sum2'] = $this->db->query($sql2)->num_rows;
        return ($data);
    }

}
