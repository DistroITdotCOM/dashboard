<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Server_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function paiton($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function pacitan1($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function pacitan2($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function tanjung_awar_awar1($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function tanjung_awar_awar2($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function rembang1($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function rembang2($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function indramayu1($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function indramayu2($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function indramayu3($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function muara_tawar1($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function muara_tawar2($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function muara_karang1($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function muara_karang2($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function muara_karang3($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function muara_karang4($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function muara_karang5($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function duri($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function amurang($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

    function asahan($id, $date, $status) {
        $query = $this->db->query("SELECT * FROM uptime WHERE unit_unit_id = '{$id}' and uptime_kondisi = '{$status}' ORDER BY uptime_id DESC LIMIT 1");
        if ($query->num_rows() < 1) {
            $user = "INSERT INTO uptime (
                unit_unit_id, 
                uptime_waktu, 
                uptime_kondisi) VALUES (
                {$this->db->escape($id)},
                $date,
                {$this->db->escape($status)})";
            $this->db->query($user);
        }
    }

}
