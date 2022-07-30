<?php

namespace App\Libraries;

use Carbon\Carbon;
use File;
use App\Jobs\SavePushNotification;
use App\Jobs\SendPushChat;
use App\Models\RequestCounselor;
use Braintree;
use DateInterval;
use DatePeriod;
use DateTime;
use Exception;
use Illuminate\Support\Facades\Auth;
use Twilio\Exceptions\RestException;
use Twilio\Rest\Client;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

use Symfony\Component\HttpFoundation\Response;

class Ultilities
{
    /**
     * Calculates the great-circle distance between two points, with
     * the Haversine formula.
     * @param float $latitudeFrom Latitude of start point in [deg decimal]
     * @param float $longitudeFrom Longitude of start point in [deg decimal]
     * @param float $latitudeTo Latitude of target point in [deg decimal]
     * @param float $longitudeTo Longitude of target point in [deg decimal]
     * @param float $earthRadius Mean earth radius in [km]
     * @return float Distance between points in [km] (same as earthRadius)
     */
    public static function haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
    {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
        cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return round($angle * $earthRadius / 1000, 1) ;
    }

    public static function clearXSS($string)
    {
        $string = nl2br($string);
        $string = trim(strip_tags($string));
        $string = self::removeScripts($string);

        return $string;
    }
    public static function removeScripts($str)
    {
        $regex =
            '/(<link[^>]+rel="[^"]*stylesheet"[^>]*>)|'.
            '<script[^>]*>.*?<\/script>|'.
            '<style[^>]*>.*?<\/style>|'.
            '<!--.*?-->/is';

        return preg_replace($regex, '', $str);
    }

    public static function clearXssInput($input)
    {
        $data = array_map(function ($value) {
            return self::clearXSS($value);
        }, $input);

        return $data;
    }
    public static function ccMasking($number, $maskingCharacter = '*') {
        return substr($number, 0, 4) . str_repeat($maskingCharacter, strlen($number) - 8) . substr($number, -4);
    }
    public static function phoneStartsWith($str, $prefix, $pos = 0, $encoding = null)
    {
        if (is_null($encoding)) {
            $encoding = mb_internal_encoding();
        }
        return mb_substr($str, $pos, mb_strlen($prefix, $encoding), $encoding) === $prefix;
    }

    public static function replacePhoneMultiCountries($phone)
    {
        if(empty($phone)){
            return null;
        }
        $phone = explode(' ', $phone);
        if  (self::phoneStartsWith($phone[1], '0')) {
            $phone[1] = substr($phone[1], 1);
        }
        return implode(' ', $phone);
    }

    public static function replacePhone($phone)
    {
        if(empty($phone)){
            return $phone;
        }
        if  (!self::phoneStartsWith($phone, '+84') && !self::phoneStartsWith($phone, '84') && !self::phoneStartsWith($phone, '0')) {
            $phone = '0'.$phone;
            // dd($phone);
        }
        if ($phone == '') {
            return null;
        }
        $search = array('(84)', '(+84)', '+84', ' ', '-');
        $replace = array('0', '0', '0', '', '');
        $phone = str_replace($search, $replace, Ultilities::clearXSS($phone));
        $rest = substr($phone, 0,2);
        if($rest == '84'){
            $rest_phone = substr($phone ,2);
            $phone  = '0'.$rest_phone;
        }
        return $phone;
    }

    /**
     * Format phone number add +84
     *
     * @author anhqt
     * @return void
     */
    public static function formatPhone($phone)
    {
        $phone = str_replace(' ', '', $phone);
        if(str_contains($phone, '+')) {
            return $phone;
        } else {
            return '+' . $phone;
        }
    }


    /**
     * extract phone number + country code
     *
     * @author anhqt
     * @return void
     */
    public static function extractPhone($phone)
    {
        $arrPhone = explode(" ", $phone);
        $countryCode = array_shift($arrPhone);
        $phone = implode("", $arrPhone);
        return [$countryCode, $phone];
    }

    /**
     * Concat phone with country code
     *
     * @author anhqt
     * @param [type] $countryCode
     * @return phone
     */
    public static function concatPhoneCountryCode($phone, $countryCode)
    {
        if(empty($phone)){
            return $phone;
        }

        return $countryCode . ' ' . $phone;
    }

    public static function formatDistance($val)
    {
        if($val > 0){
            $data = explode('.', $val);
            if($data[1] === '00'){
                return $data[0];
            }
            return $val;
        }
        return "0";
    }

    public static function logException($ex)
    {
        \Log::error("[ERROR]---------------");
        \Log::error("Message: {$ex->getMessage()}");
        \Log::error("File: {$ex->getFile()}");
        \Log::error("Line: {$ex->getLine()}");
        \Log::error($ex->getTraceAsString());

        \Log::error("[ERROR]---------------");
        return $ex->getMessage();
    }

    public static function getTypeOfExtension($string = null)
    {
        if (empty($string)) {
            return 0;
        }
        $imageExtensions = ['jpeg','jpg','png','gif','heic'];
        $videoExtensions = ['mov','mp4'];

        $ex = pathinfo($string, PATHINFO_EXTENSION);
        $type = 0;
        if (in_array($ex, $imageExtensions)) {
            $type = 1;
        }
        if (in_array($ex, $videoExtensions)) {
            $type = 2;
        }
        return $type;
    }

    public static function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824) {
           return $bytes = number_format($bytes / 1073741824, 2);    //GB
        } elseif ($bytes >= 1048576) {
           return $bytes = number_format($bytes / 1048576, 2); // MB
        } elseif ($bytes >= 1024) {
           return $bytes = number_format($bytes / 1024, 2); // KB
        } else {
            return $bytes;
        }
    }


}
