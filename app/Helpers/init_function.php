<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 6/02/2017
 * Time: 11:25 AM
 */


function currentUser(){
    if(Auth::check()) {
        return Auth::user() ;
    }else{
        return '';
    }
}

function setActive($uri)
{
    return Request::is($uri) ? 'active' : '';
}
function setSelected($uri)
{
    return Request::is($uri) ? '<span class="selected"></span>' : '';
}

function moneyFormat($number, $fractional = false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);

        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}

function userBasePathFileUpload(){
    return    $path = public_path().'/system file/'.currentUser()->colombian_id.'/';
}
