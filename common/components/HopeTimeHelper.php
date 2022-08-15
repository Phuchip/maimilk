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
 * Description of HopeGeoHelper
 *
 * @author PhucHip
 */
class HopeTimeHelper
{

    public static function getNow()
    {
        return date('Y-m-d H:i:s');
    }
    public static function formatDate($date)
    {
        return date('d-m-Y', strtotime($date));
    }

    public static function getStartOfDay($date)
    {
        return date('Y-m-d', strtotime($date)) . " 00:00:00";
    }

    public static function getEndOfDay($date)
    {
        return date('Y-m-d', strtotime($date)) . " 23:59:59";
    }

    public static function getDayPlus($day)
    {
        return date('Y-m-d', strtotime("+$day days"));
    }

    public static function getTimeByAddDay($numberOfDay)
    {
        return date('Y-m-d H:i:s', strtotime("+$numberOfDay days"));
    }

    public static function getTimeByAddHour($numberOfHour)
    {
        return date('Y-m-d H:i:s', strtotime("+$numberOfHour hours"));
    }

    public static function getTimeByAddMinute($numberOfMinute)
    {
        return date('Y-m-d H:i:s', strtotime("+$numberOfMinute minutes"));
    }

    public static function getTimeByAddSecond($numberOfSecond)
    {
        return date('Y-m-d H:i:s', strtotime("+$numberOfSecond seconds"));
    }

    public static function getDob($dob)
    {
        return substr($dob, 0, 4);
    }

    /**
     * @param $date
     * @return array
     */
    public static function getTimePeriod($date)
    {
        $arrTime = [];
        $now = HopeTimeHelper::getNow();
        if (strlen($date)) {
            if (self::isValidateDate($date, 'Y-m-d')) {
                $arrTime['startTime'] = $date . ' 00:00:01';
                if ($date >= date('Y-m-d')){
                    $arrTime['endTime'] = $now;
                }else{
                    $arrTime['endTime'] = $date . ' 23:59:58';
                }
            } elseif (self::isValidateDate($date, 'Y-m-d H:i:s')) {
                $arrTime['startTime'] = $date;
                $arrTime['endTime'] = $date;
            } else {
                $arrTime['startTime'] = date('Y-m-d') . ' 00:00:01';
                $arrTime['endTime'] = $now;
            }
        } else {
            $arrTime['startTime'] = date('Y-m-d') . ' 00:00:01';
            $arrTime['endTime'] = $now;
        }
        return $arrTime;
    }

    /**
     * @param $date
     * @param $format
     * @return bool
     */
    public static function isValidateDate($date, $format)
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }

    /**
     * @param $stringDate
     * @return false|string
     * Get valid datetime from dd/mm or dd/mm/yyyy or dd-mm or dd-mm-yyyy
     */
    public static function getValidDatetime($stringDate)
    {
        // split the text by forward slash
        $arrDateElement = preg_split("/\/|-/", $stringDate);
        // count number of elements after splitting
        $countElement = count($arrDateElement);
        // reformat date from dd/mm or dd/mm/yyyy to dd-mm or dd-mm-yyyy
        $reformattedDate = str_replace('/', '-', $stringDate);
        // $callDate has year, month and day
        if ($countElement == 3) {
            // return formatted $callDate
            return date('Y-m-d', strtotime($reformattedDate));
        } elseif ($countElement == 2) {
            // $callDate only has date and month
            $reformattedDateWithYear = $reformattedDate . '-' . date('Y');
            // return formatted $callDate
            return date('Y-m-d', strtotime($reformattedDateWithYear));
        } else {

            $date = date('Y-m-d', strtotime($reformattedDate));
            if (strpos($date, '1970') !== false) {
                // if date can not be parsed or contains 1970, return yesterday
                return date('Y-m-d', strtotime('-1 days'));
            } else {
                return $date;
            }
        }
    }

    /**
     * @param $originalTime
     * @param $format
     *  Note: $format docs available at https://www.w3schools.com/php/func_date_date.asp
     * @return false|string
     * Convert a time into a format, providing that $format is correct datetime format
     */
    public static function getFormattedTime($originalTime, $format)
    {
        try {
            // remove all spaces
            $normalFormattedTime = preg_replace('/\s+/', '', trim($originalTime));
            // replace all forward-slash to dash
            $dashedTime = str_replace("/", "-", $normalFormattedTime);
            if (preg_match('/^\d{1,2}(\/|-)\d{1,2}(\/|-)\d{4}$/', $dashedTime)) {
                // datetime formatted as dd/mm/yyyy or dd-mm-yyyy
                if (strtotime($dashedTime)) {
                    return date($format, strtotime($dashedTime));
                } else {
                    return $originalTime;
                }
            } elseif (preg_match('/^\d{4}(\/|-)\d{1,2}(\/|-)\d{1,2}$/', $dashedTime)) {
                // datetime formatted as yyyy/mm/dd or yyyy-mm-dd
                if (strtotime($dashedTime)) {
                    return date($format, strtotime($dashedTime));
                } else {
                    return $originalTime;
                }
            } elseif (preg_match('/^\d{4}-\d{1,2}$/', $dashedTime)) {
                // datetime formatted as yyyy-mm or yyyy/mm
                return DateTime::createFromFormat('Y-m', $dashedTime)->format($format);
            } elseif (preg_match('/^\d{1,2}-\d{4}$/', $dashedTime)) {
                // datetime formatted as mm-yyyy or mm/yyyy
                return DateTime::createFromFormat('m-Y', $dashedTime)->format($format);
            } else {
                // other cases
                return $originalTime;
            }
        } catch (Exception $e) {
            // can not convert to formatted time
            return $originalTime;
        }
    }

    /**
     * @param $str
     * @return bool
     */
    public static function isDate($str){
        $str = str_replace('/', '-', $str);
        $stamp = strtotime($str);
        if (is_numeric($stamp)){
            $month = date( 'm', $stamp );
            $day   = date( 'd', $stamp );
            $year  = date( 'Y', $stamp );
            return checkdate($month, $day, $year);
        }
        return false;
    }

    /**
     * @param $datetime
     * @param $format
     * @return false|string
     * Change format of the datetime
     */
    public static function changeDateFormat($datetime, $format){
        $dashedTime = str_replace("/", "-", $datetime);
        return date($format, strtotime($dashedTime));
    }
}
