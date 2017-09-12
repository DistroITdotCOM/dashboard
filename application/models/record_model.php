<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Record_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function paiton($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM paiton WHERE DATE_FORMAT(paiton_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND paiton_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO paiton (
                paiton_unit, 
                paiton_mw, 
                paiton_mvar,
                paiton_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

    function pacitan($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM pacitan WHERE DATE_FORMAT(pacitan_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND pacitan_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO pacitan (
                pacitan_unit, 
                pacitan_mw, 
                pacitan_mvar,
                pacitan_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

    function tanjung_awar_awar($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM tanjung_awar_awar WHERE DATE_FORMAT(tanjung_awar_awar_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND tanjung_awar_awar_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO tanjung_awar_awar (
                tanjung_awar_awar_unit, 
                tanjung_awar_awar_mw, 
                tanjung_awar_awar_mvar,
                tanjung_awar_awar_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

    function rembang($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM rembang WHERE DATE_FORMAT(rembang_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND rembang_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO rembang (
                rembang_unit, 
                rembang_mw, 
                rembang_mvar,
                rembang_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

    function indramayu($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM indramayu WHERE DATE_FORMAT(indramayu_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND indramayu_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO indramayu (
                indramayu_unit, 
                indramayu_mw, 
                indramayu_mvar,
                indramayu_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

    function muara_tawar($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM muara_tawar WHERE DATE_FORMAT(muara_tawar_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND muara_tawar_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO muara_tawar (
                muara_tawar_unit, 
                muara_tawar_mw, 
                muara_tawar_mvar,
                muara_tawar_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

    function muara_karang($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM muara_karang WHERE DATE_FORMAT(muara_karang_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND muara_karang_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO muara_karang (
                muara_karang_unit, 
                muara_karang_mw, 
                muara_karang_mvar,
                muara_karang_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

    function duri($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM duri WHERE DATE_FORMAT(duri_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND duri_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO duri (
                duri_unit, 
                duri_mw, 
                duri_mvar,
                duri_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

    function amurang($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM amurang WHERE DATE_FORMAT(amurang_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND amurang_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO amurang (
                amurang_unit, 
                amurang_mw, 
                amurang_mvar,
                amurang_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

    function asahan($input) {
        foreach ($input as $key => $value) {
            $query = $this->db->query("SELECT * FROM asahan WHERE DATE_FORMAT(asahan_waktu,'%Y-%m-%d %H') = DATE_FORMAT('{$input[$key]['waktu']}','%Y-%m-%d %H') AND asahan_unit = {$input[$key]['unit']}");
            if ($query->num_rows() < 1) {
                $user = "INSERT INTO asahan (
                asahan_unit, 
                asahan_mw, 
                asahan_mvar,
                asahan_waktu) VALUES (
                {$this->db->escape($input[$key]['unit'])},
                {$this->db->escape($input[$key]['MW'])},
                {$this->db->escape($input[$key]['MVAR'])},
                {$this->db->escape($input[$key]['waktu'])})";
                $this->db->query($user);
            }
        }
    }

}
