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

//method grade nilai
function grade_nilai($_nilai) {
    if ($_nilai > 85) {
        return "A";
    } else if ($_nilai > 70) {
        return "B";
    } else if ($_niali > 56) {
        return "C";
    } else if ($_niali > 36) {
        return "D";
    } else if ($_niali > 0) {
        return "E";
    } else {
        return "I";
    }
}


//method prediket niali
function predikat_nilai($grade_nilai){
    switch($grade_nilai){
        case "A";
            return "Sangat Memuaskan";
            break;
        case "B";
            return "Memuaskan";
            break;
        case "C";
            return "Cukup";
            break;
        case "D";
            return "Kurang";
            break;
        case "E";
            return "Sangat Kurang";
            break;
        default;
            return "Predikat tidak terdefinisi";

    }
}