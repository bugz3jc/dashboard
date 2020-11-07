<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function crumb($e){
    $return = '';
    if(is_array($e)){
        $a = $e[count($e) - 1];

        $e[count($e) - 1] = '<strong class="text-dark">' . $a . '</strong>';
        $return = implode($e, ' / ');
    }
    return $return;
}

function image_path(){
    return base_url() . 'assets/images/';
}

function vendor_path(){
    return base_url() . 'assets/vendor/';
}
function css_path(){
    return base_url() . 'assets/css/';
}
function js_path(){
    return base_url() . 'assets/js/';
}
function _s($number,$wordSingular, $wordPlural){
    return $number . ' ' . ( ($number > 1) ? $wordPlural: $wordSingular);
}
function _fallback($exp,$alternate,$ref = NULL){
    if (empty($exp)){
        return $alternate;
    }else{
        return ($ref == NULL) ? $exp: $ref($exp);
    }
}

function is_active($item,$active){
    if($item == $active){
        return 'active';
    }
    return '';
}

function money($number){
    return "$" . number_format($number, 2);
}