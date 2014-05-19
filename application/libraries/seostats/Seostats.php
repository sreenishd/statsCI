<?php
if (!function_exists('curl_init')) {
    throw new Exception('Facebook needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('Facebook needs the JSON PHP extension.');
}

/**
 * Thrown when an API call returns an exception.
 *
 * @author Naitik Shah <naitik@facebook.com>
 */
class Seostats extends Exception
{
    protected $result;
    public function __construct($result) {
        $this->result = $result;
        $code = isset($result['error_code']) ? $result['error_code'] : 0;

        if (isset($result['error_description'])) {
            // OAuth 2.0 Draft 10 style
            $msg = $result['error_description'];
        } else if (isset($result['error']) && is_array($result['error'])) {
            // OAuth 2.0 Draft 00 style
            $msg = $result['error']['message'];
        } else if (isset($result['error_msg'])) {
            // Rest server style
            $msg = $result['error_msg'];
        } else {
            $msg = 'Unknown Error. Check getResult()';
        }
        parent::__construct($msg, $code);
    }
}