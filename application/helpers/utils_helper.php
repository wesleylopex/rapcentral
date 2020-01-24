<?php

if (!defined('BASEPATH'))
    exit('No direct script acess allowed');

function encode_url($str_url) {
    /*     * $str_url =  strtolower($str_url);
      $str_url = htmlentities($str_url, ENT_COMPAT, 'UTF-8');

      $str_url = preg_replace('/&([a-zA-Z0-9])(uml|acute|grave|circ|tilde|cedil);/', '$1',$str_url);
      $str_url = html_entity_decode($str_url);

      $str_url = url_title($str_url);* */
    $str_url = strtolower($str_url);
    $str_url = url_title(convert_accented_characters($str_url));
    return $str_url;
}

//criptografa dados
function encode_crip($string) {
    $key = "Taura2016";
    $textoCrip = base64_encode($string . "#" . $key);
    return $textoCrip;
}

function decode_crip($string) {
    $key = "Taura2016";
    $stringLimpa = base64_decode($string);
    $explode = explode("#", $stringLimpa);
    return $explode[0];
}

function gerar_senha() {
    $vogais = 'aeiou';
    // A variável $consoante recebendo valor
    $consoante = 'bcdfghjklmnpqrstvwxyzbcdfghjklmnpqrstvwxyz';
    // A variável $numeros recebendo valor
    $numeros = '123456789';
    // A variável $simbolos recebendo valor
    $simbolos = '#.,_$@';
    // A variável $resultado vazia no momento
    $resultado = '';

    // strlen conta o nº de caracteres da variável $vogais
    $a = strlen($vogais) - 1;
    // strlen conta o nº de caracteres da variável $consoante
    $b = strlen($consoante) - 1;
    // strlen conta o nº de caracteres da variável $numeros
    $c = strlen($numeros) - 1;
    // strlen conta o nº de caracteres da variável $simbolos
    $d = strlen($simbolos) - 1;

    for ($x = 0; $x <= 1; $x++) { // A função rand() tem objetivo de gerar um valor aleatório
        $aux1 = rand(0, $a);
        $aux2 = rand(0, $b);
        $aux3 = rand(0, $c);
        $aux4 = rand(0, $d);
        $aux5 = rand(0, $a);
        $aux6 = rand(0, $b);
        $aux7 = rand(0, $c);

        // A função substr() tem objetivo de retornar parte da string
        // Caso queira números com mais digitos mude de 1 para 2 e teste
        $str1 = substr($consoante, $aux1, 1);
        $str2 = substr($vogais, $aux2, 1);
        $str3 = substr($numeros, $aux3, 1);
        $str4 = substr($simbolos, $aux4, 1);
        $str5 = substr($consoante, $aux5, 1);
        $str6 = substr($vogais, $aux6, 1);
        $str7 = substr($numeros, $aux7, 1);

        $resultado .= $str1 . $str2 . $str3 . $str4 . $str5 . $str6 . $str7;

        $resultado = trim($resultado);
    }
    return $resultado;
}

function anti_injection($campo, $adicionaBarras = false) {
    $campo = preg_replace("/(from|alter table|select|insert|delete|update|
							where|drop table|show tables|#|\*|--|\\\\)/i", "", $campo);
    $campo = trim($campo);
    $campo = strip_tags($campo);
    if ($adicionaBarras || !get_magic_quotes_gpc())
        $campo = addslashes($campo);
    return $campo;
}

function anti_sql_injection($str) {
    $str = get_magic_quotes_gpc() ? stripslashes($str) : $str;
    $str = function_exists('mysql_real_escape_string') ? mysql_real_escape_string($str) : mysql_escape_string($str);

    return $str;
}

?>