<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: srn
 * Date: 10/5/14
 * Time: 9:58 PM
 */
include("Seostats.php");
//load_class(seostats::flase);
class social extends seostats {
    private $CI;
    public function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
    }
    public static function dogen(){
        echo('DO Gen');
    }
    public static function dosocial(){
        //echo('In do Social');
        //$this->seostats->dothis();
        //print_r($this);
        //load_class(seostats::dothis());
        //$this->CI->load->database();
        var_dump($this);
    }
} 