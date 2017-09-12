<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Left_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function menu() {
        $sql = "SELECT * FROM pembangkitan";
        $data['pembangkitan'] = $this->db->query($sql)->result();
        foreach ($data['pembangkitan'] as $key => $value) {
            $sql = "SELECT * FROM unit WHERE pembangkitan_pembangkitan_id = $value->pembangkitan_id";
            $data['unit'][$key] = $this->db->query($sql)->result();
        }
        return ($data);
    }

}
