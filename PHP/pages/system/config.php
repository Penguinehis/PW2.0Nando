<?php

$linha = file_get_contents("/etc/kernel/recweb/verweb");
$passw = '102030';
$ipdominio = 'localhost';
$data_hora_atual = date("Y-m-d H:i:s");
$accessKEY = 'accesskeyhash';
$DirBackup = 'accesskeyhash';
//Dados API SMS ClickAtell
$ClickAtellEnabled = 0;
$UserClickAtell = urlencode("jrmcassa");
$PassClickAtell = urlencode("jr519cas601");
$APIClickAtell = urlencode("3599126");
//Dados API SMS LocaSMS
$LocaSMSEnabled = 1;
$UserLocaSMS = urlencode(" ");
$PassLocaSMS = urlencode(" ");
date_default_timezone_set("America/Sao_Paulo");
define('DEBUG', true);
error_reporting(E_ALL);
ini_set('display_errors', "On");
ini_set('log_errors', 0);
set_time_limit(0);
error_reporting(0);
// ======================================
//  Texto para Mes
// ======================================
function muda_mes($Mes)
{
    $primeiro = substr($Mes, 0, 1);
    if ($primeiro == "0") {
        $Mes = str_replace("0", "", $Mes);
    }
    $mes = array(1 => "Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");
    return $mes[$Mes];
}
// ======================================
//  Texto para Mes (Perfil)
// ======================================
function muda_mes2($Meses)
{
    $primeiro = substr($Meses, 0, 1);
    if ($primeiro == "0") {
        $Meses = str_replace("0", "", $Meses);
    }
    $mes = array(1 => "Janeiro", "Fevereiro", "Mar\xc3\xa7o", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    return $mes[$Meses];
}
// ======================================
//  Formata telefone
// ======================================
function formataTelefone($numero)
{
    if (strlen($numero) == 10) {
        $novo = substr_replace($numero, '(', 0, 0);
        $novo = substr_replace($novo, '9', 3, 0);
        $novo = substr_replace($novo, ')', 3, 0);
        $novo = substr_replace($novo, '-', 8, 0);
        $novo = substr_replace($novo, ' ', 4, 0);
    } else {
        $novo = substr_replace($numero, '(', 0, 0);
        $novo = substr_replace($novo, ')', 3, 0);
    }
    return $novo;
}
