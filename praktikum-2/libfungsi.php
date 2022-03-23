<?php
//method persentase
function persentase($_uts, $_uas, $_tugas){
    $result = (30 *(int) $_uts / 100) + (35 * (int)$_uas / 100) + (35 * (int)$_tugas / 100);
    return $result;
}

//method persantase
function kelulusan($_nilai){
    if($_nilai > 55){
        return 'LULUS';
    }else{
        return 'TIDAK LULUS';
    }
}