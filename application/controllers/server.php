<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Server extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function paiton() {
        if (strpos(exec('ping 10.7.40.27'), '100% loss') !== false) {
            $this->Server_model->paiton('1','NOW()','0');
        } else {
            $this->Server_model->paiton('1','NOW()','1');
        }
    }

    function pacitan1() {
        if (strpos(exec('ping 10.7.32.18'), '100% loss') !== false) {
            $this->Server_model->pacitan1('2','NOW()','0');
        } else {
            $this->Server_model->pacitan1('2','NOW()','1');
        }
    }

    function pacitan2() {
        if (strpos(exec('ping 10.7.32.19'), '100% loss') !== false) {
            $this->Server_model->pacitan2('3','NOW()','0');
        } else {
            $this->Server_model->pacitan2('3','NOW()','1');
        }
    }

    function tanjung_awar_awar1() {
        if (strpos(exec('ping 10.7.29.60'), '100% loss') !== false) {
            $this->Server_model->tanjung_awar_awar1('4','NOW()','0');
        } else {
            $this->Server_model->tanjung_awar_awar1('4','NOW()','1');
        }
    }

    function tanjung_awar_awar2() {
        if (strpos(exec('ping 10.7.29.61'), '100% loss') !== false) {
            $this->Server_model->tanjung_awar_awar2('5','NOW()','0');
        } else {
            $this->Server_model->tanjung_awar_awar2('5','NOW()','1');
        }
    }

    function rembang1() {
        if (strpos(exec('ping 10.50.45.18'), '100% loss') !== false) {
            $this->Server_model->rembang1('6','NOW()','0');
        } else {
            $this->Server_model->rembang1('6','NOW()','1');
        }
    }

    function rembang2() {
        if (strpos(exec('ping 10.50.45.19'), '100% loss') !== false) {
            $this->Server_model->rembang2('7','NOW()','0');
        } else {
            $this->Server_model->rembang2('7','NOW()','1');
        }
    }

    function indramayu1() {
        if (strpos(exec('ping 172.17.19.208'), '100% loss') !== false) {
            $this->Server_model->indramayu1('8','NOW()','0');
        } else {
            $this->Server_model->indramayu1('8','NOW()','1');
        }
    }

    function indramayu2() {
        if (strpos(exec('ping 172.17.19.209'), '100% loss') !== false) {
            $this->Server_model->indramayu2('9','NOW()','0');
        } else {
            $this->Server_model->indramayu2('9','NOW()','1');
        }
    }

    function indramayu3() {
        if (strpos(exec('ping 172.17.19.210'), '100% loss') !== false) {
            $this->Server_model->indramayu3('10','NOW()','0');
        } else {
            $this->Server_model->indramayu3('10','NOW()','1');
        }
    }

    function muara_tawar1() {
        if (strpos(exec('ping 10.7.250.142'), '100% loss') !== false) {
            $this->Server_model->muara_tawar1('11','NOW()','0');
        } else {
            $this->Server_model->muara_tawar1('11','NOW()','1');
        }
    }

    function muara_tawar2() {
        if (strpos(exec('ping 10.7.250.143'), '100% loss') !== false) {
            $this->Server_model->muara_tawar2('12','NOW()','0');
        } else {
            $this->Server_model->muara_tawar2('12','NOW()','1');
        }
    }

    function muara_karang1() {
        if (strpos(exec('ping 10.7.250.172'), '100% loss') !== false) {
            $this->Server_model->muara_karang1('13','NOW()','0');
        } else {
            $this->Server_model->muara_karang1('13','NOW()','1');
        }
    }

    function muara_karang2() {
        if (strpos(exec('ping 10.7.250.173'), '100% loss') !== false) {
            $this->Server_model->muara_karang2('14','NOW()','0');
        } else {
            $this->Server_model->muara_karang2('14','NOW()','1');
        }
    }

    function muara_karang3() {
        if (strpos(exec('ping 10.7.250.177'), '100% loss') !== false) {
            $this->Server_model->muara_karang3('15','NOW()','0');
        } else {
            $this->Server_model->muara_karang3('15','NOW()','1');
        }
    }

    function muara_karang4() {
        if (strpos(exec('ping 10.7.250.178'), '100% loss') !== false) {
            $this->Server_model->muara_karang4('16','NOW()','0');
        } else {
            $this->Server_model->muara_karang4('16','NOW()','1');
        }
    }

    function muara_karang5() {
        if (strpos(exec('ping 10.7.250.179'), '100% loss') !== false) {
            $this->Server_model->muara_karang5('17','NOW()','0');
        } else {
            $this->Server_model->muara_karang5('17','NOW()','1');
        }
    }

    function duri() {
        if (strpos(exec('ping 10.7.39.30'), '100% loss') !== false) {
            $this->Server_model->duri('18','NOW()','0');
        } else {
            $this->Server_model->duri('18','NOW()','1');
        }
    }

    function amurang() {
        if (strpos(exec('ping 10.7.48.32'), '100% loss') !== false) {
            $this->Server_model->amurang('19','NOW()','0');
        } else {
            $this->Server_model->amurang('19','NOW()','1');
        }
    }

    function asahan() {
        if (strpos(exec('ping 10.7.47.30'), '100% loss') !== false) {
            $this->Server_model->asahan('20','NOW()','0');
        } else {
            $this->Server_model->asahan('20','NOW()','1');
        }
    }

}
