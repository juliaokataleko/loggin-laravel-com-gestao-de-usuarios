<?php

function gender($gender) {
    if($gender == 'f') {
        echo "Feminino";
    } else {
        echo "Masculino";
    }
}

function dateFormat($dt) {
    echo date("d/m/Y", strtotime($dt));
}

function userLevel($role) {
    if($role == 1) 
        echo "Admnistrador";
    if($role == 2) 
        echo "Funcionário";
    if($role == 3) 
        echo "Utilizador";
}

function firstWord($sentece) {
    $arr = explode(' ',trim($sentece));
    echo $arr[0]; 
}

function firstLeterToUpper($sentece) {
    echo ucwords($sentece); 
}