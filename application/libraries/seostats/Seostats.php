<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class seostats {
    function __construct() {
        $this->ci =& get_instance();
    }
    public static function dothis(){
        die('Do this from parent Class');
    }
    /*
    public static function sendRequest(){
        die('Dead,....');
    }
    public static function sendRequest($url, $postData = false, $postJson = false)
    {
        $ua = sprintf('SEOstats %s https://github.com/eyecatchup/SEOstats',
            \SEOstats\SEOstats::BUILD_NO);

        $ch = curl_init($url);
        curl_setopt_array($ch, array(
            CURLOPT_USERAGENT       => $ua,
            CURLOPT_RETURNTRANSFER  => 1,
            CURLOPT_CONNECTTIMEOUT  => 30,
            CURLOPT_FOLLOWLOCATION  => 1,
            CURLOPT_MAXREDIRS       => 2,
            CURLOPT_SSL_VERIFYPEER  => 0,
        ));

        if (false !== $postData) {
            if (false !== $postJson) {
                curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array('Content-type: application/json'));
                $data = json_encode($postData);
            } else {
                $data = http_build_query($postData);
            }
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return (200 == (int)$httpCode) ? $response : false;
    }*/
}