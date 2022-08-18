<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components;

use DateTime;
use yii\db\Exception;

/**
 *
 * @author PhucHip
 */
class HopeHtmlHelper
{
    public function createRateStar($score = null,$totalRate = null)
    {
        $html = '<div class="rating">';
        for($i=1;$i<=5;$i++){
            $active = '';
            if($i <= $score){
                $active = ' active';
            }
            $html .= '<i class="icon-star'.$active.'"></i>';
        }
        $html .= '</div>';
        if($totalRate){
            $html .= '<div class="total-rate">('.$totalRate.')</div>';
        }
        return $html;
    }
}
