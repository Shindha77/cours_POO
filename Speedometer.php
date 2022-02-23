<?php

class Speedometer 
{
    public static function convertKmToMiles($km)
    {
        $result = $km * 1.609;
        return number_format($result, 2, ',', ' ');
    }

    public static function convertMilesToKm($miles)
    {
        $result = $miles / 1.609;
        return number_format($result, 2, ',', ' ');
    }
}