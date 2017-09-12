<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Slj_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $m = new MongoClient();
        $db = $m->engineering;
        $this->collection = $db->server;
    }

    function asahan($waktu, $status) {
        $cursor = $this->collection->find(array("lokasi" => "asahan"))->limit(1)->sort(array("waktu" => -1))->getNext();
        if ($cursor === NULL || $cursor['status'] !== $status)
            $this->collection->insert(array("waktu" => $waktu, "status" => $status, "lokasi" => "asahan"));
    }

    function bangka($waktu, $status) {
        $cursor = $this->collection->find(array("lokasi" => "bangka"))->limit(1)->sort(array("waktu" => -1))->getNext();
        if ($cursor === NULL || $cursor['status'] !== $status)
            $this->collection->insert(array("waktu" => $waktu, "status" => $status, "lokasi" => "bangka"));
    }

    function baca() {
        $cursor = $this->collection->find(array("lokasi" => "asahan", "status" => "up"))->limit(1)->sort(array("waktu" => -1));
//        echo json_encode(iterator_to_array($cursor, false));
        echo $cursor->getNext()['waktu'];
        echo '<br>';
        foreach ($cursor as $document) {
            echo $document["waktu"];
        }
    }

}
