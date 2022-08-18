<?php

/*
 */

namespace common\components;

use DateTime;
use yii\db\Exception;

/**
 * Description of HopeGeoHelper
 *
 * @author PhucHip
 */
class HopeImageHelper
{
    public function createTagImage($url,$class = null,$alias=null,$type=null,$data = [],$other = null)
    {
        $strData = '';
        if(!empty($data)){
            foreach($data as $key => $value){
                $strData .= ' data-'.$key.'="'.$value.'" ';
            }
        }
        if($type == 'avatar'){
            $error = '/images/avatar/no-user.png';
        }else{
            $error = '/images/error.png';
        }
        $html = '<img class="'.$class.' lazyload"'; //Class
        $html .= ' src="/images/loading.gif" data-src = "'.$url.'" '; //url image
        $html .= ' alias = "'.$alias.'"'; //Alias
        $html .= 'onerror=this.onerror=null;this.src="'.$error.'";'; //If error load image
        $html .= $strData; //Data
        $html .= $other; //Other
        $html .= '>';

        return $html;
    }
}
