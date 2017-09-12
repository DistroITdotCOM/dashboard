<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function paiton() {
        $temp = $this->Api_model->paiton();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->paiton_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->paiton_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

    function pacitan() {
        $temp = $this->Api_model->pacitan();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->pacitan_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->pacitan_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row2'] as $key => $value) {
            if ($temp['sum2'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->pacitan_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->pacitan_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

    function tanjung_awar_awar() {
        $temp = $this->Api_model->tanjung_awar_awar();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->tanjung_awar_awar_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->tanjung_awar_awar_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row2'] as $key => $value) {
            if ($temp['sum2'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->tanjung_awar_awar_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->tanjung_awar_awar_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

    function rembang() {
        $temp = $this->Api_model->rembang();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->rembang_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->rembang_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row2'] as $key => $value) {
            if ($temp['sum2'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->rembang_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->rembang_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

    function indramayu() {
        $temp = $this->Api_model->indramayu();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->indramayu_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->indramayu_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row2'] as $key => $value) {
            if ($temp['sum2'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->indramayu_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->indramayu_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row3'] as $key => $value) {
            if ($temp['sum3'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->indramayu_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->indramayu_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

    function muara_tawar() {
        $temp = $this->Api_model->muara_tawar();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->muara_tawar_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->muara_tawar_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row2'] as $key => $value) {
            if ($temp['sum2'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->muara_tawar_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->muara_tawar_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

    function muara_karang() {
        $temp = $this->Api_model->muara_karang();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->muara_karang_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->muara_karang_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row2'] as $key => $value) {
            if ($temp['sum2'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->muara_karang_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->muara_karang_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row3'] as $key => $value) {
            if ($temp['sum3'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->muara_karang_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->muara_karang_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row4'] as $key => $value) {
            if ($temp['sum4'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->muara_karang_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->muara_karang_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row5'] as $key => $value) {
            if ($temp['sum5'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->muara_karang_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->muara_karang_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

    function duri() {
        $temp = $this->Api_model->duri();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->duri_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->duri_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

    function amurang() {
        $temp = $this->Api_model->amurang();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->amurang_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->amurang_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row2'] as $key => $value) {
            if ($temp['sum2'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->amurang_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->amurang_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

    function asahan() {
        $temp = $this->Api_model->asahan();
        header('Content-Type: application/json');
        $json = '';
        $json.= '[[[';
        foreach ($temp['row1'] as $key => $value) {
            if ($temp['sum1'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->asahan_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->asahan_mw . '],';
            }
        }
        $json.= ']],[[';
        foreach ($temp['row2'] as $key => $value) {
            if ($temp['sum2'] == $key + 1) {
                $json.='[' . $value->waktu . ',' . $value->asahan_mw . ']';
            } else {
                $json.= '[' . $value->waktu . ',' . $value->asahan_mw . '],';
            }
        }
        $json.= ']]]';
        echo $json;
    }

}
