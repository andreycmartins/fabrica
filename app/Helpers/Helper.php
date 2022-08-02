<?php

namespace App\Helpers;

class Helper
{
    public static function convertDateStrToDatetimeObject($dateStr)
    {
        $dateObj = $dateStr;

        if ($dateStr) {
            if (is_string($dateStr)) {
                if (!preg_match('/\d{4}-\d{2}-\d{2}/', $dateStr)) {
                    $dateStr = explode(" ", $dateStr);
                    $timeStr = isset($dateStr[1]) ? $dateStr[1] : '';
                    $dateStr = $dateStr[0];
                    $dateStr = implode("-", array_reverse(explode("/", $dateStr)));

                    if ($timeStr && substr_count($timeStr, ':') < 2) {
                        $timeStr .= ':00';
                    }

                    $dateStr = trim($dateStr . ' ' . $timeStr);
                }

                $dateObj = new \Datetime($dateStr);
            }
        } else {
            $dateObj = null;
        }

        return $dateObj;
    }

    public static function criarChassi()
    {
        $number = rand(0, 9);
        $letter = chr(rand(65, 90));
        $chassi = $number;
        $chassi .= $letter;
        $letter = chr(rand(65, 90));
        $chassi .= $letter;
        $chassi .= ' ';
        $letter = chr(rand(65, 90));
        $chassi .= $letter;
        $letter = chr(rand(65, 90));
        $chassi .= $letter;
        $number = rand(0, 9);
        $chassi .= $number;
        $number = rand(0, 9);
        $chassi .= $number;
        $letter = chr(rand(65, 90));
        $chassi .= $letter;
        $chassi .= ' ';
        $letter = chr(rand(65, 90));
        $chassi .= $letter;
        $chassi .= ' ';
        $number = rand(0, 9);
        $chassi .= $number;
        $number = rand(0, 9);
        $chassi .= $number;
        $number = rand(0, 9);
        $chassi .= $number;
        $number = rand(0, 9);
        $chassi .= $number;
        $number = rand(0, 9);
        $chassi .= $number;
        $number = rand(0, 9);
        $chassi .= $number;
        $number = rand(0, 9);
        $chassi .= $number;
        $number = rand(0, 9);
        $chassi .= $number;
        return $chassi;
    }

}
