<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function userLevel($level){

	switch ($level) {
		case '1':
			$lvl = 'Administrator';
		break;
        case '2':
            $lvl = 'Karyawan';
        break;
	}
	return $lvl;
}

function arrsUserLevel(){
	$arrs = array(
            '1' => 'Administrator',
            '2' => 'Karyawan'
        );
    return $arrs;
}

function statusPesanan($level){

    switch ($level) {
        case '1':
            $lvl = 'Pesanan Baru';
        break;
        case '2':
            $lvl = 'Pesanan Deadline';
        break;
        case '3':
            $lvl = 'Pesanan Selesei';
        break;
    }
    return $lvl;
}

function arrsPesanan(){
    $arrs = array(
            '1' => 'Pesanan Baru',
            '2' => 'Pesanan Deadline',
            '3' => 'Pesanan Selesei'
        );
    return $arrs;
}
