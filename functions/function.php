<?php
function passwordGenerator($lunghezza, $numeri, $caratteri, $simboli)
{
    $passw = '';
    $caratteri = 'abcdefghijklmnopqrstuvwxyzèàòùABDEFGHILMNOPQRSTVUZJKWXY';
    $simboli = '<>,.-+^?=)(/&%$£"!|\;:_§';

    if (isset($numeri, $caratteri, $simboli)) {
        # code...
        for ($i = 0; strlen($passw) < $lunghezza; $i++) {
            $passw .= rand(0, 9);
            $passw .= $caratteri[rand(0, strlen($caratteri) - 1)];
            $passw .= $simboli[rand(0, strlen($simboli) - 1)];
            # code...
        }
    }
    return $passw;
    var_dump($passw);
}
